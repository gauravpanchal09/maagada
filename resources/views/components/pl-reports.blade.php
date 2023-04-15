@foreach ($reports as $report)
<div class="col-xs-12">
    <div class="box box-default box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">{{ __('Gynae Report') }} #{{ $report->id }}</h3>
            <div class="box-tools pull-right">
                <button data-href="{{ route('pl.edit', ['id' => $report->id]) }}" class="btn btn-box-tool">
                    <i class="fa fa-edit"></i> Edit
                </button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <label for="description">{{ __('Description') }}</label>
                    <div class="form-group" style="border: solid 1px #ccc; padding: 0.5rem 1rem;">
                        {!! $report->description ?: 'N/A' !!}
                    </div>
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
</div>
@endforeach

@if (count($reports) === 0)
<div class="col-xs-12">
    <div class="box box-warning box-solid">
        <div class="box-body">{{ __('Gynae Report not found for this patient.') }}</div>
    </div>
</div>
@endif
