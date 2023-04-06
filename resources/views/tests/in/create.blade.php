@extends('layouts.app')

@push('styles')
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('bower_components/select2/dist/css/select2.min.css') }}">
<style rel="stylesheet">
    .select2-container .select2-selection--single {
        height: 35px !important;
    }

    .centered-text th, .centered-text td {
        text-align: center !important;
    }
</style>
@endpush

@push('content-header')
<section class="content-header">
  <h1>
    {{ __('Infertility') }}
    <small>{{ __('Control panel') }}</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i>{{ __('Dashboard') }}</a></li>
    <li><a href="#"><i class="fa fa-medkit"></i>{{ __('Tests') }}</a></li>
    <li class="active">{{ __('Infertility') }}</li>
  </ol>
</section>
@endpush

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-body">
                @include('tests.in._form', ['test' => null, 'patients' => $patients])
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>
@endsection

@push('scripts')
<!-- Select2 -->
<script src="{{ asset('bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        var files = [];
        $('input[type="file"]').change(function (event) {
            if (files.length) {
                $(this).parent().parent().children('.row').remove();
                files = [];
            }

            let target = event.target.files;
            for(let i=0; i < target.length; i++) {
                files.push({
                    "name": target[i].name,
                    "url": URL.createObjectURL(target[i])
                });
            }

            handleFileUpload($(this));
        });

        function handleFileUpload(target) {
            if (files.length && target) {
                let html = `<div class="row" style="margin-bottom: 1rem;">`;
                files.forEach(function (file) {
                    html += `
                    <div class="col-md-4">
                        <span>${file.name}</span>
                        <img class="img-thumbnail" src="${file.url}" />
                    </div>`;
                });
                html += `</div>`;
                target.parent().after(html);
            }
        }
    });
</script>
@endpush
