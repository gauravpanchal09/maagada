@extends('layouts.app')

@push('content-header')
<section class="content-header">
  <h1>
    {{ __('Hospitals') }}
    <small>{{ __('Control panel') }}</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i>{{ __('Dashboard') }}</a></li>
    <li><a href="{{ route('hospitals.index') }}"><i class="fa fa-hospital-o"></i>{{ __('Hospitals') }}</a></li>
    <li class="active">{{ __('Add') }}</li>
  </ol>
</section>
@endpush

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">{{ __('Add Hospital') }}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                @include('hospitals._form', ['hospital' => null, 'statuses' => $statuses])
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>
@endsection
