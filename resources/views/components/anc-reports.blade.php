@foreach ($reports as $report)
<div class="col-xs-12">
    <div class="box box-primary box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">{{ __('ANC Report') }} #{{ $report->id }}</h3>
            <div class="box-tools pull-right">
                <button data-href="{{ route('anc.edit', ['id' => $report->id]) }}" class="btn btn-box-tool">
                    <i class="fa fa-edit"></i> Edit
                </button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <fieldset>
                <legend>{{ __('Menstrual History') }}</legend>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="menstrual_history_lmd">{{ __('LMP') }}</label>
                            <span class="form-control">{{ $report->menstrual_history_lmp ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="menstrual_history_edd">{{ __('EDD') }}</label>
                            <span class="form-control">{{ $report->menstrual_history_edd ?: 'N/A' }}</span>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{{ __('Obstetric History') }}</legend>
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="obstetric_history_g">{{ __('G') }}</label>
                                    <span class="form-control">{{ $report->obstetric_history_g ?: 'N/A' }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="obstetric_history_p">{{ __('P') }}</label>
                                    <span class="form-control">{{ $report->obstetric_history_p ?: 'N/A' }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="obstetric_history_a">{{ __('A') }}</label>
                                    <span class="form-control">{{ $report->obstetric_history_a ?: 'N/A' }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="obstetric_history_l">{{ __('L') }}</label>
                                    <span class="form-control">{{ $report->obstetric_history_l ?: 'N/A' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="obstetric_history_first">{{ __('I') }}</label>
                                    <span class="form-control">{{ $report->obstetric_history_first ?: 'N/A' }}</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="obstetric_history_second">{{ __('II') }}</label>
                                    <span class="form-control">{{ $report->obstetric_history_second ?: 'N/A' }}</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="obstetric_history_third">{{ __('III') }}</label>
                                    <span class="form-control">{{ $report->obstetric_history_third ?: 'N/A' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="marital_life">{{ __('Marital Life') }}</label>
                            <span class="form-control">{{ $report->marital_life ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="infertility_treatment">{{ __('Infertility Treatment') }}</label>
                            <span class="form-control">{{ $report->infertility_treatment ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="previous_surgeries">{{ __('Previous Surgeries') }}</label>
                            <span class="form-control">{{ $report->previous_surgeries ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="past_history">{{ __('Past History') }}</label>
                            <span class="form-control">{{ $report->past_history ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="family_history">{{ __('Family History') }}</label>
                            <span class="form-control">{{ $report->family_history ?: 'N/A' }}</span>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{{ __('Investigation') }}</legend>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="blood_group">{{ __('Blood Group') }}</label>
                            <span class="form-control">{{ $report->blood_group ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="hb">{{ __('HB') }}</label>
                            <span class="form-control">{{ $report->hb ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="platelets">{{ __('Platelets') }}</label>
                            <span class="form-control">{{ $report->platelets ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="hiv">{{ __('HIV') }}</label>
                            <span class="form-control">{{ $report->hiv ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="hbsag">{{ __('HBSAG') }}</label>
                            <span class="form-control">{{ $report->hbsag ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="udrl">{{ __('UDRL') }}</label>
                            <span class="form-control">{{ $report->udrl ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="urine_randm">{{ __('Urine R&M') }}</label>
                            <span class="form-control">{{ $report->urine_randm ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="tsh">{{ __('TSH') }}</label>
                            <span class="form-control">{{ $report->tsh ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="bl_suger">{{ __('BL Suger') }}</label>
                            <span class="form-control">{{ $report->bl_suger ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="ogtt">{{ __('OGTT') }}</label>
                            <span class="form-control">{{ $report->ogtt ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="hb_electro">{{ __('HB Electro') }}</label>
                            <span class="form-control">{{ $report->hb_electro ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="dual_markar">{{ __('DUAL Markar') }}</label>
                            <span class="form-control">{{ $report->dual_markar ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="quadraple_markar">{{ __('QUADRAPLE Markar') }}</label>
                            <span class="form-control">{{ $report->quadraple_markar ?: 'N/A' }}</span>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{{ __('General Examination') }}</legend>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <span class="form-control">{{ $report->general_examination ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="vaccination">{{ __('Vaccination') }}</label>
                            <span class="form-control">{{ $report->vaccination ?: 'N/A' }}</span>
                        </div>
                    </div>
                </div>
            </fieldset>
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
        <div class="box-body">{{ __('ANC Report not found for this patient.') }}</div>
    </div>
</div>
@endif
