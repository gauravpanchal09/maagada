@extends('layouts.app')

@push('styles')
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('bower_components/select2/dist/css/select2.min.css') }}">
<style rel="stylesheet">
    .select2-container .select2-selection--single {
        height: 35px !important;
    }
</style>
@endpush

@push('content-header')
<section class="content-header">
  <h1>
    {{ __('ANC') }}
    <small>{{ __('Control panel') }}</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i>{{ __('Dashboard') }}</a></li>
    <li><a href="#"><i class="fa fa-medkit"></i>{{ __('Tests') }}</a></li>
    <li class="active">{{ __('ANC') }}</li>
  </ol>
</section>
@endpush

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-body">
                @include('tests.anc._form', [
                    'test' => null,
                    'patients' => $patients,
                    'infertilityStatuses' => $infertilityStatuses,
                    'vaccinations' => $vaccinations,
                    'bloodGroups' => $bloodGroups,
                    'history' => []
                ])
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
    });
</script>
@endpush
