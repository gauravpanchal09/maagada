@extends('layouts.app')

@push('styles')
<!-- fullCalendar -->
<link rel="stylesheet" href="{{ asset('bower_components/fullcalendar/dist/fullcalendar.min.css') }}">
<link rel="stylesheet" href="{{ asset('bower_components/fullcalendar/dist/fullcalendar.print.min.css') }}" media="print">
@endpush

@push('content-header')
<section class="content-header">
  <h1>
    {{ __('Dashboard') }}
    <small>{{ __('Control panel') }}</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i>{{ __('Home') }}</a></li>
    <li class="active">{{ __('Dashboard') }}</li>
  </ol>
</section>
@endpush

@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
    <!-- <div class="col-lg-4 col-xs-6">
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>{{ $hospitals }}</h3>
                <p>{{ __('Hospitals') }}</p>
            </div>
            <div class="icon">
                <i class="fa fa-hospital-o"></i>
            </div>
            <a href="{{ route('hospitals.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div> -->
    <!-- ./col -->
    <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>{{ $patients }}</h3>
                <p>{{ __('Patients') }}</p>
            </div>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
            <a href="{{ route('patients.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <!-- <div class="col-lg-4 col-xs-6">
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>{{ $hospitalPatients }}</h3>
                <p>{{ __('Hospital Patients') }}</p>
            </div>
            <div class="icon">
                <i class="fa fa-ambulance"></i>
            </div>
            <a href="{{ route('hospital-patients.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div> -->
    <!-- ./col -->
</div>
<!-- /.row -->

<!-- Calendar -->
<div class="box box-primary">
    <div class="box-body no-padding">
        <!-- THE CALENDAR -->
        <div id="calendar"></div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
@endsection

@push('scripts')
<!-- fullCalendar -->
<script src="{{ asset('bower_components/moment/moment.js') }}"></script>
<script src="{{ asset('bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>
<!-- Page specific script -->
<script>
  $(function () {
      /* initialize the calendar
       -----------------------------------------------------------------*/
      //Date for the calendar events (dummy data)
      var date = new Date()
      var d    = date.getDate(),
          m    = date.getMonth(),
          y    = date.getFullYear()
      $('#calendar').fullCalendar({
        header    : {
          left  : 'prev,next today',
          center: 'title',
          right : 'month,agendaWeek,agendaDay'
        },
        buttonText: {
          today: 'today',
          month: 'month',
          week : 'week',
          day  : 'day'
        }
    });
  });
</script>
@endpush
