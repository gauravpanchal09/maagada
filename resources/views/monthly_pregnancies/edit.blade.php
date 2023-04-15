@extends('layouts.app')

@push('content-header')
<section class="content-header">
  <h1>
    {{ __('Edit Monthly Pregnancy') }}
    <small>{{ __('Control panel') }}</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i>{{ __('Dashboard') }}</a></li>
    <li><a href="{{ route('monthly-pregnancies.index') }}"><i class="fa fa-calendar-plus-o"></i>{{ __('Monthly Pregnancies') }}</a></li>
    <li class="active">{{ __('Edit') }}</li>
  </ol>
</section>
@endpush

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">{{ __('Edit Monthly Pregnancy') }}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                @include('monthly_pregnancies._form', ['monthlyPregnancy' => $monthlyPregnancy])
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>
@endsection
