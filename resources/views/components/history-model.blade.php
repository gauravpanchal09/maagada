<div class="modal fade" id="modal-default">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">{{ __("{$test} Test History") }}</h4>
            </div>
            <div class="modal-body">
                @if (count($histories) === 0)
                <div class="callout callout-warning">
                    {{ __('History records not found.') }}
                </div>
                @endif

                <div class="row">
                    @foreach ($histories as $value)
                        <div class="col-md-12">
                            <div class="pull-right text-muted"></div>
                            <div class="box box-default box-solid">
                                <div class="box-body">
                                    <div class="text-muted text-right">{{ __('Updated on') }} {{ date('d M, Y h:i A', strtotime($value->created_at)) }}</div>
                                    <br>
                                    @foreach ($value->change_set as $curr)
                                        <div class="box box-default no-margin">
                                            <div class="box-header">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <strong>{{ $curr['field'] }}</strong>
                                                    </div>
                                                    <div class="col-md-4 text-red">
                                                        <i class="icon fa fa-ban"></i>
                                                        <strong>{{ $curr['old'] ?: "N/A" }}</strong>
                                                    </div>
                                                    <div class="col-md-4 text-green">
                                                        <i class="icon fa fa-check"></i>
                                                        <strong>{{ $curr['new'] ?: "N/A" }}</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->