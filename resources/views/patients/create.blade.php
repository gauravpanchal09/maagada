@extends('layouts.app')

@push('content-header')
<section class="content-header">
  <h1>
    {{ __('Patients') }}
    <small>{{ __('Control panel') }}</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i>{{ __('Dashboard') }}</a></li>
    <li><a href="{{ route('patients.index') }}"><i class="fa fa-users"></i>{{ __('Patients') }}</a></li>
    <li class="active">{{ __('Add') }}</li>
  </ol>
</section>
@endpush

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">{{ __('Add Patient') }}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                @include('patients._form', ['patient' => null])
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>
@endsection

@push('scripts')
<!-- InputMask -->
<script src="{{ asset('plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset('plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>

<script>
    $(function () {
      //Money Euro
      $('[data-mask]').inputmask()
    });
</script>
@endpush
