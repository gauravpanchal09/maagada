@foreach ($reports as $report)
<div class="col-xs-12">
    <div class="box box-success box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">{{ __('Infertility Report') }} #{{ $report->id }}</h3>
            <div class="box-tools pull-right">
                <button data-href="{{ route('in.edit', ['id' => $report->id]) }}" class="btn btn-box-tool">
                    <i class="fa fa-edit"></i> Edit
                </button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body report-content">
            @include('components.includes.in-report', [
                'report' => $report
            ])
        </div>
        <!-- /.box-body -->
        <!-- Loading (remove the following to stop the loading)-->
        <div class="overlay">
            <i class="fa fa-refresh fa-spin"></i>
        </div>
        <!-- end loading -->
    </div>
    <!-- /.box -->
</div>
@endforeach

@if (count($reports) === 0)
<div class="col-xs-12">
    <div class="box box-warning box-solid">
        <div class="box-body">{{ __('Infertility Report not found for this patient.') }}</div>
    </div>
</div>
@endif