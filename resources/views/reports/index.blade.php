@extends('layouts.app')

@push('styles')
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('bower_components/select2/dist/css/select2.min.css') }}">
<style rel="stylesheet">
    .select2-container .select2-selection--single {
        height: 35px !important;
    }

    .d-flex {
        display: flex !important;
    }
    
    .justify-content-space-between {
        justify-content: space-between !important;
    }

    .widget-user-header {
        height: 180px !important;
    }

    fieldset .row {
        margin-left: 0.5rem !important;
    }
</style>
@endpush

@push('content-header')
<section class="content-header">
  <h1>
    {{ __('Reports') }}
    <small>{{ __('Control panel') }}</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i>{{ __('Dashboard') }}</a></li>
    <li class="active">{{ __('Reports') }}</li>
  </ol>
</section>
@endpush

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">{{ __('Generate Report') }}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="patient">{{ __('Select Patient') }}</label>
                            <select name="patient" class="form-control select2">
                                @foreach ($patients as $patient)
                                    <option value="{{ $patient->id }}" @if(old('patient_id') == $patient->id) selected @endif>
                                        #{{ $patient->registration_number }} {{ $patient->first_name }} {{ $patient->last_name }} ( {{ $patient->doctor }} )
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <a href="#" class="btn btn-app pull-right">
                            <i class="fa fa-print"></i> Print
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <!-- Loading (remove the following to stop the loading)-->
            <div class="overlay">
                <i class="fa fa-refresh fa-spin"></i>
            </div>
            <!-- end loading -->
        </div>
        <!-- /.box -->

        <div class="row">
            <div class="col-md-12 body-block"></div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<!-- Select2 -->
<script src="{{ asset('bower_components/select2/dist/js/select2.full.min.js') }}"></script>

<!-- InputMask -->
<script src="{{ asset('plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset('plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>

<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2();

        //Money Euro
        $('span[data-mask]').inputmask();

        generateReport();
        $('select[name="patient"]').change(function (event) {
            generateReport();
        });

        function generateReport() {
            let target = $('div.body-block'),
            patient = $('select[name="patient"]').val(),
            url = "{{ route('reports.generate', ['id' => ':id']) }}";
            $('.box > .overlay').hide();

            if (patient > 0) {
                url = url.replace(':id', patient);
                $('.box > .overlay').show();

                $.ajax({
                    url : url,
                    type : 'GET',
                    success : function(res){
                        target.html(res);
                        $('.box > .overlay').hide();
                        //Money Euro
                        $('span[data-mask]').inputmask();
                    }
                });
            }
        }

        $('.btn-app').click(function (event) {
            event.preventDefault();
            let patient = $('select[name="patient"]').val(),
            url = "{{ route('reports.print', ['id' => ':id']) }}";

            if (patient > 0) {
                url = url.replace(':id', patient);
                window.open(url, '_blank');
            }
        });
    });
</script>
@endpush
