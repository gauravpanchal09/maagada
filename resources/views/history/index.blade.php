@extends('layouts.app')

@push('styles')

@endpush

@push('content-header')
<section class="content-header">
    <h1>
        {{ __('Histories') }}
        <small>{{ __('Control panel') }}</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i>{{ __('Dashboard') }}</a></li>
        <li><a href="#"><i class="fa fa-medkit"></i>{{ __('Tests') }}</a></li>
        <li><a href="{{ route('in.edit', ['id' => $report->id]) }}"><i class="fa fa-circle-o"></i>{{ __('Infertility') }}</a></li>
        <li class="active">{{ __('History') }}</li>
    </ol>
</section>
@endpush

@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12">
        <!-- The time line -->
        <ul class="timeline">
            @foreach($histories as $date => $history)
                <!-- timeline time label -->
                <li class="time-label">
                    <span class="bg-red">
                        {{ date('d M. Y', strtotime($date)) }}
                    </span>
                </li>
                <!-- /.timeline-label -->
                <!-- timeline item -->
                @foreach($history as $key => $value)
                    <li>
                        <i class="fa fa-history bg-blue"></i>
                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> {{ date('h:i A', strtotime($value['created_at'])) }}</span>
                            <h3 class="timeline-header">Snapshot Created</h3>
                            <div class="timeline-body">
                                @if($value['type'] == 'in')
                                <div class="panel box" id="reportPanel_{{$key}}">
                                    <h4 class="box-title">
                                        <a class="text-muted" data-toggle="collapse" data-parent="#reportPanel_{{$key}}" href="#reportCollapse_{{$key}}">
                                            <i class="fa fa-file-pdf-o"></i> 
                                            {{ __('Infertility Report') }}
                                        </a>
                                    </h4>
                                    <div id="reportCollapse_{{$key}}" class="panel-collapse collapse">
                                        <div class="box-body">
                                            @include('components.includes.in-report', [
                                                'report' => $value['report']
                                            ])
                                        </div>
                                    </div>
                                </div>    
                                @endif
                            </div>
                        </div>
                    </li>
                @endforeach
                <!-- END timeline item -->
            @endforeach
            <li>
                <i class="fa fa-clock-o bg-gray"></i>
            </li>
        </ul>
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->

@endsection

@push('scripts')
<script>
    $(function() {
        $("span.form-control").each(function() {
            let element = $(this);

            if (!(element.text() && element.text() != 'N/A')) {
                element.addClass('marked-as-hide');
            }
        });

        $(".timeline .row").each(function() {
            let row = $(this);
            let markAsHide = row.find('span.form-control.marked-as-hide').length, 
            total = row.find('span.form-control').length;

            if (markAsHide === total) {
                row.hide();
            }
        });

        $(".timeline table.table").each(function() {
            let row = $(this);
            let markAsHide = row.find('span.form-control.marked-as-hide').length, 
            total = row.find('span.form-control').length;

            if (markAsHide === total) {
                row.hide();
            }
        });

        $(".exclude-hide").each(function() {
            $(this).parents('.row').show().parents('.main-row').show();
        });
    })
</script>
@endpush