<form method="POST" action="{{ $test ? route('in.update', $test) : route('in.store') }}" enctype="multipart/form-data">
    @if ($test)
    @method('PUT')
    @endif
    @csrf
    <div class="row">
        <div class="col-md-4">
            <div class="form-group @error('patient_id') has-error @enderror">
                <label for="patient_id">{{ __('Patient') }}</label>
                <select name="patient_id" class="form-control select2" @if($test) disabled @endif>
                    @foreach ($patients as $patient)
                    <option value="{{ $patient->id }}" @if(($test && $test->patient->id == $patient->id) || (old('patient_id') == $patient->id)) selected @endif>
                        #{{ $patient->registration_number }} {{ $patient->first_name }} {{ $patient->last_name }} ({{ $patient->doctor }})
                    </option>
                    @endforeach
                </select>

                @error('patient_id')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        @if ($test && $history)
        <div class="col-md-8">
            <a href="#" class="btn btn-app pull-right" data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-history"></i> History
            </a>
        </div>
        @endif
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group @error('p_married_year') has-error @enderror">
                <label for="p_married_year">{{ __('Married Year') }}</label>
                <input type="text" name="p_married_year" class="form-control" value="{{ $test ? $test->p_married_year : old('p_married_year') }}">
                @error('p_married_year')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group @error('p_ttc') has-error @enderror">
                <label for="p_ttc">{{ __('Trying to conceive') }}</label>
                <input type="text" name="p_ttc" class="form-control" value="{{ $test ? $test->p_ttc : old('p_ttc') }}">
                @error('p_ttc')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group @error('p_ttc_year') has-error @enderror">
                <label for="p_ttc_year">{{ __('Year') }}</label>
                <input type="text" name="p_ttc_year" class="form-control" value="{{ $test ? $test->p_ttc_year : old('p_ttc_year') }}">
                @error('p_ttc_year')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group @error('p_toi') has-error @enderror">
                <label for="p_toi">{{ __('Type of infertility') }}</label>
                <input type="text" name="p_toi" class="form-control" value="{{ $test ? $test->p_toi : old('p_toi') }}">
                @error('p_toi')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="panel box" id="previousContraceptionPanelOne">
        <div class="box-header">
            <h4 class="box-title">
                <a class="text-muted" data-toggle="collapse" data-parent="#previousContraceptionPanelOne" href="#previousContraceptionCollapseOne">
                    {{ __('Previous Contraception') }}
                </a>
            </h4>
        </div>
        <div id="previousContraceptionCollapseOne" class="panel-collapse collapse">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group @error('pc_method') has-error @enderror">
                            <label for="pc_method">{{ __('Method') }}</label>
                            <input type="text" name="pc_method" class="form-control" value="{{ $test ? $test->pc_method : old('pc_method') }}">
                            @error('pc_method')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group @error('pc_duration_year') has-error @enderror">
                            <label for="pc_duration_year">{{ __('Duration year') }}</label>
                            <input type="text" name="pc_duration_year" class="form-control" value="{{ $test ? $test->pc_duration_year : old('pc_duration_year') }}">
                            @error('pc_duration_year')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel box" id="methodHistoryPanelOne">
        <div class="box-header">
            <h4 class="box-title">
                <a class="text-muted" data-toggle="collapse" data-parent="#methodHistoryPanelOne" href="#methodHistoryCollapseOne">
                    {{ __('Method History') }}
                </a>
            </h4>
        </div>
        <div id="methodHistoryCollapseOne" class="panel-collapse collapse">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group @error('mh_menarchat') has-error @enderror">
                            <label for="mh_menarchat">{{ __('Menarch at') }}</label>
                            <input type="text" name="mh_menarchat" class="form-control" value="{{ $test ? $test->mh_menarchat : old('mh_menarchat') }}">
                            @error('mh_menarchat')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group @error('mh_year') has-error @enderror">
                            <label for="mh_year">{{ __('Year') }}</label>
                            <input type="text" name="mh_year" class="form-control" value="{{ $test ? $test->mh_year : old('mh_year') }}">
                            @error('mh_year')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group @error('mh_previous_cycle') has-error @enderror">
                            <label for="mh_previous_cycle">{{ __('Previous cycle') }}</label>
                            <input type="text" name="mh_previous_cycle" class="form-control" value="{{ $test ? $test->mh_previous_cycle : old('mh_previous_cycle') }}">
                            @error('mh_previous_cycle')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group @error('mh_present_cycle') has-error @enderror">
                            <label for="mh_present_cycle">{{ __('Present cycle') }}</label>
                            <input type="text" name="mh_present_cycle" class="form-control" value="{{ $test ? $test->mh_present_cycle : old('mh_present_cycle') }}">
                            @error('mh_present_cycle')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group @error('mh_lmp') has-error @enderror">
                            <label for="mh_lmp">{{ __('L.M.P') }}</label>
                            <input type="text" name="mh_lmp" class="form-control" value="{{ $test ? $test->mh_lmp : old('mh_lmp') }}">
                            @error('mh_lmp')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel box" id="obstericHistoryPanelOne">
        <div class="box-header">
            <h4 class="box-title">
                <a class="text-muted" data-toggle="collapse" data-parent="#obstericHistoryPanelOne" href="#obstericHistoryCollapseOne">
                    {{ __('Obsteric History') }}
                </a>
            </h4>
        </div>
        <div id="obstericHistoryCollapseOne" class="panel-collapse collapse">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group @error('oh_delivery') has-error @enderror">
                            <label for="oh_delivery">{{ __('Delivery') }}</label>
                            <input type="text" name="oh_delivery" class="form-control" value="{{ $test ? $test->oh_delivery : old('oh_delivery') }}">
                            @error('oh_delivery')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('oh_miscarriage') has-error @enderror">
                            <label for="oh_miscarriage">{{ __('Miscarriage') }}</label>
                            <input type="text" name="oh_miscarriage" class="form-control" value="{{ $test ? $test->oh_miscarriage : old('oh_miscarriage') }}">
                            @error('oh_miscarriage')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group @error('oh_pgti') has-error @enderror">
                            <label for="oh_pgti">{{ __('Previous genital tract infection') }}</label>
                            <input type="text" name="oh_pgti" class="form-control" value="{{ $test ? $test->oh_pgti : old('oh_pgti') }}">
                            @error('oh_pgti')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group @error('oh_pa') has-error @enderror">
                            <label for="oh_pa">{{ __('Previous abdominal / Gynaecological surgery') }}</label>
                            <textarea name="oh_pa" class="form-control">{{ $test ? $test->oh_pa : old('oh_pa') }}</textarea>
                            @error('oh_pa')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel box" id="previousMedicalPanelOne">
        <div class="box-header">
            <h4 class="box-title">
                <a class="text-muted" data-toggle="collapse" data-parent="#previousMedicalPanelOne" href="#previousMedicalCollapseOne">
                    {{ __('Previous Medical History') }}
                </a>
            </h4>
        </div>
        <div id="previousMedicalCollapseOne" class="panel-collapse collapse">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group @error('pmh_thyroid') has-error @enderror">
                            <label for="pmh_thyroid">{{ __('Thyroid') }}</label>
                            <input type="text" name="pmh_thyroid" class="form-control" value="{{ $test ? $test->pmh_thyroid : old('pmh_thyroid') }}">
                            @error('pmh_thyroid')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group @error('pmh_tuberculosis') has-error @enderror">
                            <label for="pmh_tuberculosis">{{ __('Tuberculosis') }}</label>
                            <input type="text" name="pmh_tuberculosis" class="form-control" value="{{ $test ? $test->pmh_tuberculosis : old('pmh_tuberculosis') }}">
                            @error('pmh_tuberculosis')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group @error('pmh_hypertension') has-error @enderror">
                            <label for="pmh_hypertension">{{ __('Hypertension') }}</label>
                            <input type="text" name="pmh_hypertension" class="form-control" value="{{ $test ? $test->pmh_hypertension : old('pmh_hypertension') }}">
                            @error('pmh_hypertension')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('pmh_diabetes') has-error @enderror">
                            <label for="pmh_diabetes">{{ __('Diabetes') }}</label>
                            <input type="text" name="pmh_diabetes" class="form-control" value="{{ $test ? $test->pmh_diabetes : old('pmh_diabetes') }}">
                            @error('pmh_diabetes')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('pmh_other') has-error @enderror">
                            <label for="pmh_other">{{ __('Other') }}</label>
                            <input type="text" name="pmh_other" class="form-control" value="{{ $test ? $test->pmh_other : old('pmh_other') }}">
                            @error('pmh_other')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel box" id="significantFamilyPanelOne">
        <div class="box-header">
            <h4 class="box-title">
                <a class="text-muted" data-toggle="collapse" data-parent="#significantFamilyPanelOne" href="#significantFamilyCollapseOne">
                    {{ __('Significant Family History') }}
                </a>
            </h4>
        </div>
        <div id="significantFamilyCollapseOne" class="panel-collapse collapse">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group @error('sfh_wife') has-error @enderror">
                            <label for="sfh_wife">{{ __('Wife') }}</label>
                            <input type="text" name="sfh_wife" class="form-control" value="{{ $test ? $test->sfh_wife : old('sfh_wife') }}">
                            @error('sfh_wife')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group @error('sfh_husband') has-error @enderror">
                            <label for="sfh_husband">{{ __('Husband') }}</label>
                            <input type="text" name="sfh_husband" class="form-control" value="{{ $test ? $test->sfh_husband : old('sfh_husband') }}">
                            @error('sfh_husband')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel box" id="examinationPanelOne">
        <div class="box-header">
            <h4 class="box-title">
                <a class="text-muted" data-toggle="collapse" data-parent="#examinationPanelOne" href="#examinationCollapseOne">
                    {{ __('Examination') }}
                </a>
            </h4>
        </div>
        <div id="examinationCollapseOne" class="panel-collapse collapse">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group @error('eve_stature') has-error @enderror">
                            <label for="eve_stature">{{ __('Stature') }}</label>
                            <input type="text" name="eve_stature" class="form-control" value="{{ $test ? $test->eve_stature : old('eve_stature') }}">
                            @error('eve_stature')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group @error('eve_pulse') has-error @enderror">
                            <label for="eve_pulse">{{ __('Pulse') }}</label>
                            <input type="text" name="eve_pulse" class="form-control" value="{{ $test ? $test->eve_pulse : old('eve_pulse') }}">
                            @error('eve_pulse')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group @error('eve_height') has-error @enderror">
                            <label for="eve_height">{{ __('Height') }}</label>
                            <input type="number" name="eve_height" class="form-control" value="{{ $test ? $test->eve_height : old('eve_height') }}">
                            @error('eve_height')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group @error('eve_weight') has-error @enderror">
                            <label for="eve_weight">{{ __('Weight') }}</label>
                            <input type="text" name="eve_weight" class="form-control" value="{{ $test ? $test->eve_weight : old('eve_weight') }}">
                            @error('eve_weight')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group @error('eve_bp') has-error @enderror">
                            <label for="eve_bp">{{ __('B.P') }}</label>
                            <input type="text" name="eve_bp" class="form-control" value="{{ $test ? $test->eve_bp : old('eve_bp') }}">
                            @error('eve_bp')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group @error('eve_bmi') has-error @enderror">
                            <label for="eve_bmi">{{ __('BMI') }}</label>
                            <input type="text" name="eve_bmi" class="form-control" value="{{ $test ? $test->eve_bmi : old('eve_bmi') }}">
                            @error('eve_bmi')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group @error('eve_anaemia') has-error @enderror">
                            <label for="eve_anaemia">{{ __('Anaemia') }}</label>
                            <input type="text" name="eve_anaemia" class="form-control" value="{{ $test ? $test->eve_anaemia : old('eve_anaemia') }}">
                            @error('eve_anaemia')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group @error('eve_hyriod') has-error @enderror">
                            <label for="eve_hyriod">{{ __('Thyriod') }}</label>
                            <input type="text" name="eve_hyriod" class="form-control" value="{{ $test ? $test->eve_hyriod : old('eve_hyriod') }}">
                            @error('eve_hyriod')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group @error('eve_hirsutism') has-error @enderror">
                            <label for="eve_hirsutism">{{ __('Hirsutism') }}</label>
                            <input type="text" name="eve_hirsutism" class="form-control" value="{{ $test ? $test->eve_hirsutism : old('eve_hirsutism') }}">
                            @error('eve_hirsutism')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group @error('eve_face') has-error @enderror">
                            <label for="eve_face">{{ __('Face') }}</label>
                            <input type="text" name="eve_face" class="form-control" value="{{ $test ? $test->eve_face : old('eve_face') }}">
                            @error('eve_face')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group @error('eve_breast') has-error @enderror">
                            <label for="eve_breast">{{ __('Breast') }}</label>
                            <input type="text" name="eve_breast" class="form-control" value="{{ $test ? $test->eve_breast : old('eve_breast') }}">
                            @error('eve_breast')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group @error('eve_other') has-error @enderror">
                            <label for="eve_other">{{ __('Other') }}</label>
                            <input type="text" name="eve_other" class="form-control" value="{{ $test ? $test->eve_other : old('eve_other') }}">
                            @error('eve_other')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group @error('eve_cvs') has-error @enderror">
                            <label for="eve_cvs">{{ __('C.V.S') }}</label>
                            <input type="text" name="eve_cvs" class="form-control" value="{{ $test ? $test->eve_cvs : old('eve_cvs') }}">
                            @error('eve_cvs')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group @error('eve_rs') has-error @enderror">
                            <label for="eve_rs">{{ __('R.S') }}</label>
                            <input type="text" name="eve_rs" class="form-control" value="{{ $test ? $test->eve_rs : old('eve_rs') }}">
                            @error('eve_rs')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group @error('eve_sec_sex_character') has-error @enderror">
                            <label for="eve_sec_sex_character">{{ __('Sec. Sex Character') }}</label>
                            <input type="text" name="eve_sec_sex_character" class="form-control" value="{{ $test ? $test->eve_sec_sex_character : old('eve_sec_sex_character') }}">
                            @error('eve_sec_sex_character')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group @error('eve_breast2') has-error @enderror">
                            <label for="eve_breast2">{{ __('Breast') }}</label>
                            <input type="text" name="eve_breast2" class="form-control" value="{{ $test ? $test->eve_breast2 : old('eve_breast2') }}">
                            @error('eve_breast2')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group @error('eve_public_hair') has-error @enderror">
                            <label for="eve_public_hair">{{ __('Public hair') }}</label>
                            <input type="text" name="eve_public_hair" class="form-control" value="{{ $test ? $test->eve_public_hair : old('eve_public_hair') }}">
                            @error('eve_public_hair')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group @error('eve_axillary_hairs') has-error @enderror">
                            <label for="eve_axillary_hairs">{{ __('Axillary hairs') }}</label>
                            <input type="text" name="eve_axillary_hairs" class="form-control" value="{{ $test ? $test->eve_axillary_hairs : old('eve_axillary_hairs') }}">
                            @error('eve_axillary_hairs')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel box" id="abdomainalExaminationPanelOne">
        <div class="box-header">
            <h4 class="box-title">
                <a class="text-muted" data-toggle="collapse" data-parent="#abdomainalExaminationPanelOne" href="#abdomainalExaminationCollapseOne">
                    {{ __('Abdomainal Examination') }}
                </a>
            </h4>
        </div>
        <div id="abdomainalExaminationCollapseOne" class="panel-collapse collapse">
            <div class="box-body">
                <div class="form-group @error('ea_stature') has-error @enderror">
                    <label for="ea_stature"></label>
                    <textarea name="ea_stature" class="form-control">{{ $test ? $test->ea_stature : old('ea_stature') }}</textarea>
                    @error('ea_stature')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <div class="panel box" id="pelvicExaminationPanelOne">
        <div class="box-header">
            <h4 class="box-title">
                <a class="text-muted" data-toggle="collapse" data-parent="#pelvicExaminationPanelOne" href="#pelvicExaminationCollapseOne">
                    {{ __('Pelvic Examination') }}
                </a>
            </h4>
        </div>
        <div id="pelvicExaminationCollapseOne" class="panel-collapse collapse">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group @error('ep_ps') has-error @enderror">
                            <label for="ep_ps">{{ __('PS') }}</label>
                            <input type="text" name="ep_ps" class="form-control" value="{{ $test ? $test->ep_ps : old('ep_ps') }}">
                            @error('ep_ps')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('ep_vulva') has-error @enderror">
                            <label for="ep_vulva">{{ __('Vulva') }}</label>
                            <input type="text" name="ep_vulva" class="form-control" value="{{ $test ? $test->ep_vulva : old('ep_vulva') }}">
                            @error('ep_vulva')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('ep_pv') has-error @enderror">
                            <label for="ep_pv">{{ __('PV') }}</label>
                            <input type="text" name="ep_pv" class="form-control" value="{{ $test ? $test->ep_pv : old('ep_pv') }}">
                            @error('ep_pv')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('ep_veg') has-error @enderror">
                            <label for="ep_veg">{{ __('Vagina') }}</label>
                            <input type="text" name="ep_veg" class="form-control" value="{{ $test ? $test->ep_veg : old('ep_veg') }}">
                            @error('ep_veg')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel box" id="treatmentReceivedPanelOne">
        <div class="box-header">
            <h4 class="box-title">
                <a class="text-muted" data-toggle="collapse" data-parent="#treatmentReceivedPanelOne" href="#treatmentReceivedCollapseOne">
                    {{ __('Treatment Received') }}
                </a>
            </h4>
        </div>
        <div id="treatmentReceivedCollapseOne" class="panel-collapse collapse">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group @error('tr_year') has-error @enderror">
                            <label for="tr_year">{{ __('Year') }}</label>
                            <input type="text" name="tr_year" class="form-control" value="{{ $test ? $test->tr_year : old('tr_year') }}" />
                            @error('tr_year')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel box" id="husbandPanelOne">
        <div class="box-header">
            <h4 class="box-title">
                <a class="text-muted" data-toggle="collapse" data-parent="#husbandPanelOne" href="#husbandCollapseOne">
                    <strong>{{ __('Husband') }}</strong>
                </a>
            </h4>
        </div>
        <div id="husbandCollapseOne" class="panel-collapse collapse">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group @error('husband_dob') has-error @enderror">
                            <label for="husband_dob">{{ __('Date of birth') }}</label>
                            <input type="date" name="husband_dob" class="form-control" value="{{ $test ? $test->husband_dob : old('husband_dob') }}" />
                            @error('husband_dob')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group @error('husband_occupation') has-error @enderror">
                            <label for="husband_occupation">{{ __('Occupation') }}</label>
                            <input type="text" name="husband_occupation" class="form-control" value="{{ $test ? $test->husband_occupation : old('husband_occupation') }}" />
                            @error('husband_occupation')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group @error('husband_married_previously') has-error @enderror">
                            <label for="husband_married_previously">{{ __('Married Previously') }}</label>
                            <input type="text" name="husband_married_previously" class="form-control" value="{{ $test ? $test->husband_married_previously : old('husband_married_previously') }}" />
                            @error('husband_married_previously')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group @error('husband_age') has-error @enderror">
                            <label for="husband_age">{{ __('Age') }}</label>
                            <input type="text" name="husband_age" class="form-control" value="{{ $test ? $test->husband_age : old('husband_age') }}" />
                            @error('husband_age')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group @error('husband_children') has-error @enderror">
                            <label for="husband_children">{{ __('Children') }}</label>
                            <input type="text" name="husband_children" class="form-control" value="{{ $test ? $test->husband_children : old('husband_children') }}" />
                            @error('husband_children')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group @error('husband_coitus_frequency') has-error @enderror">
                            <label for="husband_coitus_frequency">{{ __('Coitus frequency') }}</label>
                            <input type="text" name="husband_coitus_frequency" class="form-control" value="{{ $test ? $test->husband_coitus_frequency : old('husband_coitus_frequency') }}" />
                            @error('husband_coitus_frequency')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group @error('husband_exection') has-error @enderror">
                            <label for="husband_exection">{{ __('Erection') }}</label>
                            <input type="text" name="husband_exection" class="form-control" value="{{ $test ? $test->husband_exection : old('husband_exection') }}" />
                            @error('husband_exection')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group @error('husband_ejaculation') has-error @enderror">
                            <label for="husband_ejaculation">{{ __('Ejaculation') }}</label>
                            <input type="text" name="husband_ejaculation" class="form-control" value="{{ $test ? $test->husband_ejaculation : old('husband_ejaculation') }}" />
                            @error('husband_ejaculation')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group @error('husband_orgasm') has-error @enderror">
                            <label for="husband_orgasm">{{ __('Orgasm') }}</label>
                            <input type="text" name="husband_orgasm" class="form-control" value="{{ $test ? $test->husband_orgasm : old('husband_orgasm') }}" />
                            @error('husband_orgasm')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group @error('husband_drugs') has-error @enderror">
                            <label for="husband_drugs">{{ __('Drugs') }}</label>
                            <input type="text" name="husband_drugs" class="form-control" value="{{ $test ? $test->husband_drugs : old('husband_drugs') }}" />
                            @error('husband_drugs')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group @error('husband_smoking') has-error @enderror">
                            <label for="husband_smoking">{{ __('Smoking') }}</label>
                            <input type="text" name="husband_smoking" class="form-control" value="{{ $test ? $test->husband_smoking : old('husband_smoking') }}" />
                            @error('husband_smoking')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group @error('husband_alcohol') has-error @enderror">
                            <label for="husband_alcohol">{{ __('Alcohol') }}</label>
                            <input type="text" name="husband_alcohol" class="form-control" value="{{ $test ? $test->husband_alcohol : old('husband_alcohol') }}" />
                            @error('husband_alcohol')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel box" id="previousMedicalPanelTwo">
        <div class="box-header">
            <h4 class="box-title">
                <a class="text-muted" data-toggle="collapse" data-parent="#previousMedicalPanelTwo" href="#previousMedicalCollapseTwo">
                    {{ __('Previous Medical History') }}
                </a>
            </h4>
        </div>
        <div id="previousMedicalCollapseTwo" class="panel-collapse collapse">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group @error('husband_pmh_mumps') has-error @enderror">
                            <label for="husband_pmh_mumps">{{ __('Mumps') }}</label>
                            <input type="text" name="husband_pmh_mumps" class="form-control" value="{{ $test ? $test->husband_pmh_mumps : old('husband_pmh_mumps') }}" />
                            @error('husband_pmh_mumps')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group @error('husband_pmh_kochs') has-error @enderror">
                            <label for="husband_pmh_kochs">{{ __("Koch's") }}</label>
                            <input type="text" name="husband_pmh_kochs" class="form-control" value="{{ $test ? $test->husband_pmh_kochs : old('husband_pmh_kochs') }}" />
                            @error('husband_pmh_kochs')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group @error('husband_pmh_diabetes') has-error @enderror">
                            <label for="husband_pmh_diabetes">{{ __('Diabetes') }}</label>
                            <input type="text" name="husband_pmh_diabetes" class="form-control" value="{{ $test ? $test->husband_pmh_diabetes : old('husband_pmh_diabetes') }}" />
                            @error('husband_pmh_diabetes')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group @error('husband_pmh_hypertension') has-error @enderror">
                            <label for="husband_pmh_hypertension">{{ __('Hypertension') }}</label>
                            <input type="text" name="husband_pmh_hypertension" class="form-control" value="{{ $test ? $test->husband_pmh_hypertension : old('husband_pmh_hypertension') }}" />
                            @error('husband_pmh_hypertension')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group @error('husband_pmh_previous_sergery') has-error @enderror">
                            <label for="husband_pmh_previous_sergery">{{ __('Previous Sergery') }}</label>
                            <input type="text" name="husband_pmh_previous_sergery" class="form-control" value="{{ $test ? $test->husband_pmh_previous_sergery : old('husband_pmh_previous_sergery') }}" />
                            @error('husband_pmh_previous_sergery')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group @error('husband_pmh_examination') has-error @enderror">
                            <label for="husband_pmh_examination">{{ __('Examination') }}</label>
                            <input type="text" name="husband_pmh_examination" class="form-control" value="{{ $test ? $test->husband_pmh_examination : old('husband_pmh_examination') }}" />
                            @error('husband_pmh_examination')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group @error('husband_pmh_stature') has-error @enderror">
                            <label for="husband_pmh_stature">{{ __('Stature') }}</label>
                            <input type="text" name="husband_pmh_stature" class="form-control" value="{{ $test ? $test->husband_pmh_stature : old('husband_pmh_stature') }}" />
                            @error('husband_pmh_stature')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group @error('husband_pmh_bp') has-error @enderror">
                            <label for="husband_pmh_bp">{{ __('B.P') }}</label>
                            <input type="text" name="husband_pmh_bp" class="form-control" value="{{ $test ? $test->husband_pmh_bp : old('husband_pmh_bp') }}" />
                            @error('husband_pmh_bp')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group @error('husband_pmh_sec_sex') has-error @enderror">
                            <label for="husband_pmh_sec_sex">{{ __('Sec. Sex Character') }}</label>
                            <input type="text" name="husband_pmh_sec_sex" class="form-control" value="{{ $test ? $test->husband_pmh_sec_sex : old('husband_pmh_sec_sex') }}" />
                            @error('husband_pmh_sec_sex')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group @error('husband_pmh_genital_examination') has-error @enderror">
                            <label for="husband_pmh_genital_examination">{{ __('Genital Examination') }}</label>
                            <input type="text" name="husband_pmh_genital_examination" class="form-control" value="{{ $test ? $test->husband_pmh_genital_examination : old('husband_pmh_genital_examination') }}" />
                            @error('husband_pmh_genital_examination')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group @error('husband_semon_analysic') has-error @enderror">
                            <label for="husband_semon_analysic">{{ __('Semen Analysis') }}</label>
                            <textarea name="husband_semon_analysic" class="form-control">{{ $test ? $test->husband_semon_analysic : old('husband_semon_analysic') }}</textarea>
                            @error('husband_semon_analysic')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group @error('husband_testicular_biospy') has-error @enderror">
                            <label for="husband_testicular_biospy">{{ __('Testicular Biospy') }}</label>
                            <textarea name="husband_testicular_biospy" class="form-control">{{ $test ? $test->husband_testicular_biospy : old('husband_testicular_biospy') }}</textarea>
                            @error('husband_testicular_biospy')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group @error('husband_other_investigationq') has-error @enderror">
                            <label for="husband_other_investigationq">{{ __('Other Investigation') }}</label>
                            <textarea name="husband_other_investigationq" class="form-control">{{ $test ? $test->husband_other_investigationq : old('husband_other_investigationq') }}</textarea>
                            @error('husband_other_investigationq')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group @error('husband_te_advised') has-error @enderror">
                            <label for="husband_te_advised">{{ __('Treatment Advised') }}</label>
                            <textarea name="husband_te_advised" class="form-control">{{ $test ? $test->husband_te_advised : old('husband_te_advised') }}</textarea>
                            @error('husband_te_advised')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel box" id="investigationsPanelOne">
        <div class="box-header">
            <h4 class="box-title">
                <a class="text-muted" data-toggle="collapse" data-parent="#investigationsPanelOne" href="#investigationsCollapseOne">
                    {{ __('Investigations') }}
                </a>
            </h4>
        </div>
        <div id="investigationsCollapseOne" class="panel-collapse collapse">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group @error('husband_i_cbc') has-error @enderror">
                            <label for="husband_i_cbc">{{ __('CBC') }}</label>
                            <input type="text" name="husband_i_cbc" class="form-control" value="{{ $test ? $test->husband_i_cbc : old('husband_i_cbc') }}" />
                            @error('husband_i_cbc')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('husband_i_hb') has-error @enderror">
                            <label for="husband_i_hb">{{ __('HB') }}</label>
                            <input type="text" name="husband_i_hb" class="form-control" value="{{ $test ? $test->husband_i_hb : old('husband_i_hb') }}" />
                            @error('husband_i_hb')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('husband_i_td') has-error @enderror">
                            <label for="husband_i_td">{{ __('T & D') }}</label>
                            <input type="text" name="husband_i_td" class="form-control" value="{{ $test ? $test->husband_i_td : old('husband_i_td') }}" />
                            @error('husband_i_td')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('husband_i_esr') has-error @enderror">
                            <label for="husband_i_esr">{{ __('ESR') }}</label>
                            <input type="text" name="husband_i_esr" class="form-control" value="{{ $test ? $test->husband_i_esr : old('husband_i_esr') }}" />
                            @error('husband_i_esr')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('husband_i_abo') has-error @enderror">
                            <label for="husband_i_abo">{{ __('ABO-RH') }}</label>
                            <input type="text" name="husband_i_abo" class="form-control" value="{{ $test ? $test->husband_i_abo : old('husband_i_abo') }}" />
                            @error('husband_i_abo')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('husband_i_hiv') has-error @enderror">
                            <label for="husband_i_hiv">{{ __('HIV I & II') }}</label>
                            <input type="text" name="husband_i_hiv" class="form-control" value="{{ $test ? $test->husband_i_hiv : old('husband_i_hiv') }}" />
                            @error('husband_i_hiv')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('husband_i_blood_sugar') has-error @enderror">
                            <label for="husband_i_blood_sugar">{{ __('Blood Sugar') }}</label>
                            <input type="text" name="husband_i_blood_sugar" class="form-control" value="{{ $test ? $test->husband_i_blood_sugar : old('husband_i_blood_sugar') }}" />
                            @error('husband_i_blood_sugar')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('husband_i_hbsag') has-error @enderror">
                            <label for="husband_i_hbsag">{{ __('HbsAg') }}</label>
                            <input type="text" name="husband_i_hbsag" class="form-control" value="{{ $test ? $test->husband_i_hbsag : old('husband_i_hbsag') }}" />
                            @error('husband_i_hbsag')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('husband_i_urine') has-error @enderror">
                            <label for="husband_i_urine">{{ __('Urine') }}</label>
                            <input type="text" name="husband_i_urine" class="form-control" value="{{ $test ? $test->husband_i_urine : old('husband_i_urine') }}" />
                            @error('husband_i_urine')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('husband_i_hcv') has-error @enderror">
                            <label for="husband_i_hcv">{{ __('HCV') }}</label>
                            <input type="text" name="husband_i_hcv" class="form-control" value="{{ $test ? $test->husband_i_hcv : old('husband_i_hcv') }}" />
                            @error('husband_i_hcv')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('husband_i_semen_culture') has-error @enderror">
                            <label for="husband_i_semen_culture">{{ __('Semen Culture') }}</label>
                            <input type="text" name="husband_i_semen_culture" class="form-control" value="{{ $test ? $test->husband_i_semen_culture : old('husband_i_semen_culture') }}" />
                            @error('husband_i_semen_culture')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('husband_i_vdrl') has-error @enderror">
                            <label for="husband_i_vdrl">{{ __('VDRL') }}</label>
                            <input type="text" name="husband_i_vdrl" class="form-control" value="{{ $test ? $test->husband_i_vdrl : old('husband_i_vdrl') }}" />
                            @error('husband_i_vdrl')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('husband_i_sperm') has-error @enderror">
                            <label for="husband_i_sperm">{{ __('Sperm Antibodies') }}</label>
                            <input type="text" name="husband_i_sperm" class="form-control" value="{{ $test ? $test->husband_i_sperm : old('husband_i_sperm') }}" />
                            @error('husband_i_sperm')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel box" id="wifePanelOne">
        <div class="box-header">
            <h4 class="box-title">
                <a class="text-muted" data-toggle="collapse" data-parent="#wifePanelOne" href="#wifeCollapseOne">
                    <strong>{{ __('Wife') }}</strong>
                </a>
            </h4>
        </div>
        <div id="wifeCollapseOne" class="panel-collapse collapse">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group @error('inv_hysteroscopy') has-error @enderror">
                            <label for="inv_hysteroscopy">{{ __('Hysteroscopy') }}</label>
                            <textarea name="inv_hysteroscopy" class="form-control">{{ $test ? $test->inv_hysteroscopy : old('inv_hysteroscopy') }}</textarea>
                            @error('inv_hysteroscopy')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group @error('inv_laparoscopy') has-error @enderror">
                            <label for="inv_laparoscopy">{{ __('Laparoscopy') }}</label>
                            <textarea name="inv_laparoscopy" class="form-control">{{ $test ? $test->inv_laparoscopy : old('inv_laparoscopy') }}</textarea>
                            @error('inv_laparoscopy')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group @error('inv_image') has-error @enderror">
                            <label for="inv_image">{{ __('Image') }}</label>
                            <input type="file" name="inv_image[]" accept="image/*" class="form-control" multiple="true" />
                            @error('inv_image')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group @error('inv_pcr_for_tb') has-error @enderror">
                            <label for="inv_pcr_for_tb">{{ __('PCR for TB') }}</label>
                            <input type="text" name="inv_pcr_for_tb" class="form-control" value="{{ $test ? $test->inv_pcr_for_tb : old('inv_pcr_for_tb') }}" />
                            @error('inv_pcr_for_tb')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group @error('inv_hysterosalpingography') has-error @enderror">
                            <label for="inv_hysterosalpingography">{{ __('HSG (Hysterosalpingography)') }}</label>
                            <textarea name="inv_hysterosalpingography" class="form-control">{{ $test ? $test->inv_hysterosalpingography : old('inv_hysterosalpingography') }}</textarea>
                            @error('inv_hysterosalpingography')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel box" id="investigationsPanelTwo">
        <div class="box-header">
            <h4 class="box-title">
                <a class="text-muted" data-toggle="collapse" data-parent="#investigationsPanelTwo" href="#investigationsCollapseTwo">
                    {{ __('Investigations') }}
                </a>
            </h4>
        </div>
        <div id="investigationsCollapseTwo" class="panel-collapse collapse">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group @error('wife_i_cbc') has-error @enderror">
                            <label for="wife_i_cbc">{{ __('CBC') }}</label>
                            <input type="text" name="wife_i_cbc" class="form-control" value="{{ $test ? $test->wife_i_cbc : old('wife_i_cbc') }}" />
                            @error('wife_i_cbc')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('wife_i_hb') has-error @enderror">
                            <label for="wife_i_hb">{{ __('HB') }}</label>
                            <input type="text" name="wife_i_hb" class="form-control" value="{{ $test ? $test->wife_i_hb : old('wife_i_hb') }}" />
                            @error('wife_i_hb')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('wife_i_td') has-error @enderror">
                            <label for="wife_i_td">{{ __('T & D') }}</label>
                            <input type="text" name="wife_i_td" class="form-control" value="{{ $test ? $test->wife_i_td : old('wife_i_td') }}" />
                            @error('wife_i_td')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('wife_i_esr') has-error @enderror">
                            <label for="wife_i_esr">{{ __('ESR') }}</label>
                            <input type="text" name="wife_i_esr" class="form-control" value="{{ $test ? $test->wife_i_esr : old('wife_i_esr') }}" />
                            @error('wife_i_esr')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('wife_i_abo') has-error @enderror">
                            <label for="wife_i_abo">{{ __('ABO-RH') }}</label>
                            <input type="text" name="wife_i_abo" class="form-control" value="{{ $test ? $test->wife_i_abo : old('wife_i_abo') }}" />
                            @error('wife_i_abo')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('wife_i_hiv') has-error @enderror">
                            <label for="wife_i_hiv">{{ __('HIV I & II') }}</label>
                            <input type="text" name="wife_i_hiv" class="form-control" value="{{ $test ? $test->wife_i_hiv : old('wife_i_hiv') }}" />
                            @error('wife_i_hiv')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('wife_i_blood_sugar') has-error @enderror">
                            <label for="wife_i_blood_sugar">{{ __('Blood Sugar') }}</label>
                            <input type="text" name="wife_i_blood_sugar" class="form-control" value="{{ $test ? $test->wife_i_blood_sugar : old('wife_i_blood_sugar') }}" />
                            @error('wife_i_blood_sugar')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('wife_i_hbsag') has-error @enderror">
                            <label for="wife_i_hbsag">{{ __('HbsAg') }}</label>
                            <input type="text" name="wife_i_hbsag" class="form-control" value="{{ $test ? $test->wife_i_hbsag : old('wife_i_hbsag') }}" />
                            @error('wife_i_hbsag')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('wife_i_urine') has-error @enderror">
                            <label for="wife_i_urine">{{ __('Urine') }}</label>
                            <input type="text" name="wife_i_urine" class="form-control" value="{{ $test ? $test->wife_i_urine : old('wife_i_urine') }}" />
                            @error('wife_i_urine')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('wife_i_hcv') has-error @enderror">
                            <label for="wife_i_hcv">{{ __('HCV') }}</label>
                            <input type="text" name="wife_i_hcv" class="form-control" value="{{ $test ? $test->wife_i_hcv : old('wife_i_hcv') }}" />
                            @error('wife_i_hcv')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('wife_i_vdrl') has-error @enderror">
                            <label for="wife_i_vdrl">{{ __('VDRL') }}</label>
                            <input type="text" name="wife_i_vdrl" class="form-control" value="{{ $test ? $test->wife_i_vdrl : old('wife_i_vdrl') }}" />
                            @error('wife_i_vdrl')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel box" id="hormonalEstimationPanelOne">
        <div class="box-header">
            <h4 class="box-title">
                <a class="text-muted" data-toggle="collapse" data-parent="#hormonalEstimationPanelOne" href="#hormonalEstimationCollapseOne">
                    {{ __('Hormonal Estimation') }}
                </a>
            </h4>
        </div>
        <div id="hormonalEstimationCollapseOne" class="panel-collapse collapse">
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Serum</th>
                                <th>Date</th>
                                <th>Day of cycle</th>
                                <th>Result</th>
                                <th>Normal range</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="AMH" readonly />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_anh_date') has-error @enderror">
                                        <input type="date" name="he_anh_date" class="form-control" value="{{ $test ? $test->he_anh_date : old('he_anh_date') }}" />
                                        @error('he_anh_date')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_anh_day_of_cycle') has-error @enderror">
                                        <input type="text" name="he_anh_day_of_cycle" class="form-control" value="{{ $test ? $test->he_anh_day_of_cycle : old('he_anh_day_of_cycle') }}" />
                                        @error('he_anh_day_of_cycle')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_anh_result') has-error @enderror">
                                        <input type="text" name="he_anh_result" class="form-control" value="{{ $test ? $test->he_anh_result : old('he_anh_result') }}" />
                                        @error('he_anh_result')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_anh_normal_range') has-error @enderror">
                                        <input type="text" name="he_anh_normal_range" class="form-control" value="{{ $test ? $test->he_anh_normal_range : old('he_anh_normal_range') }}" />
                                        @error('he_anh_normal_range')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="Prolaction" readonly />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_prolaction_date') has-error @enderror">
                                        <input type="date" name="he_prolaction_date" class="form-control" value="{{ $test ? $test->he_prolaction_date : old('he_prolaction_date') }}" />
                                        @error('he_prolaction_date')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_prolaction_day_of_cycle') has-error @enderror">
                                        <input type="text" name="he_prolaction_day_of_cycle" class="form-control" value="{{ $test ? $test->he_prolaction_day_of_cycle : old('he_prolaction_day_of_cycle') }}" />
                                        @error('he_prolaction_day_of_cycle')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_prolaction_result') has-error @enderror">
                                        <input type="text" name="he_prolaction_result" class="form-control" value="{{ $test ? $test->he_prolaction_result : old('he_prolaction_result') }}" />
                                        @error('he_prolaction_result')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_prolaction_normal_range') has-error @enderror">
                                        <input type="text" name="he_prolaction_normal_range" class="form-control" value="{{ $test ? $test->he_prolaction_normal_range : old('he_prolaction_normal_range') }}" />
                                        @error('he_prolaction_normal_range')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="L.H" readonly />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_lh_date') has-error @enderror">
                                        <input type="date" name="he_lh_date" class="form-control" value="{{ $test ? $test->he_lh_date : old('he_lh_date') }}" />
                                        @error('he_lh_date')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_lh_day_of_cycle') has-error @enderror">
                                        <input type="text" name="he_lh_day_of_cycle" class="form-control" value="{{ $test ? $test->he_lh_day_of_cycle : old('he_lh_day_of_cycle') }}" />
                                        @error('he_lh_day_of_cycle')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_lh_result') has-error @enderror">
                                        <input type="text" name="he_lh_result" class="form-control" value="{{ $test ? $test->he_lh_result : old('he_lh_result') }}" />
                                        @error('he_lh_result')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_lh_normal_range') has-error @enderror">
                                        <input type="text" name="he_lh_normal_range" class="form-control" value="{{ $test ? $test->he_lh_normal_range : old('he_lh_normal_range') }}" />
                                        @error('he_lh_normal_range')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="F.S.H" readonly />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_fsh_date') has-error @enderror">
                                        <input type="date" name="he_fsh_date" class="form-control" value="{{ $test ? $test->he_fsh_date : old('he_fsh_date') }}" />
                                        @error('he_fsh_date')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_fsh_day_of_cycle') has-error @enderror">
                                        <input type="text" name="he_fsh_day_of_cycle" class="form-control" value="{{ $test ? $test->he_fsh_day_of_cycle : old('he_fsh_day_of_cycle') }}" />
                                        @error('he_fsh_day_of_cycle')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_fsh_result') has-error @enderror">
                                        <input type="text" name="he_fsh_result" class="form-control" value="{{ $test ? $test->he_fsh_result : old('he_fsh_result') }}" />
                                        @error('he_fsh_result')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_fsh_normal_range') has-error @enderror">
                                        <input type="text" name="he_fsh_normal_range" class="form-control" value="{{ $test ? $test->he_fsh_normal_range : old('he_fsh_normal_range') }}" />
                                        @error('he_fsh_normal_range')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="Testosterone" readonly />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_testosterone_date') has-error @enderror">
                                        <input type="date" name="he_testosterone_date" class="form-control" value="{{ $test ? $test->he_testosterone_date : old('he_testosterone_date') }}" />
                                        @error('he_testosterone_date')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_testosterone_day_of_cycle') has-error @enderror">
                                        <input type="text" name="he_testosterone_day_of_cycle" class="form-control" value="{{ $test ? $test->he_testosterone_day_of_cycle : old('he_testosterone_day_of_cycle') }}" />
                                        @error('he_testosterone_day_of_cycle')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_testosterone_result') has-error @enderror">
                                        <input type="text" name="he_testosterone_result" class="form-control" value="{{ $test ? $test->he_testosterone_result : old('he_testosterone_result') }}" />
                                        @error('he_testosterone_result')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_testosterone_normal_range') has-error @enderror">
                                        <input type="text" name="he_testosterone_normal_range" class="form-control" value="{{ $test ? $test->he_testosterone_normal_range : old('he_testosterone_normal_range') }}" />
                                        @error('he_testosterone_normal_range')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="Oestrogen" readonly />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_oestrogen_date') has-error @enderror">
                                        <input type="date" name="he_oestrogen_date" class="form-control" value="{{ $test ? $test->he_oestrogen_date : old('he_oestrogen_date') }}" />
                                        @error('he_oestrogen_date')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_oestrogen_day_of_cycle') has-error @enderror">
                                        <input type="text" name="he_oestrogen_day_of_cycle" class="form-control" value="{{ $test ? $test->he_oestrogen_day_of_cycle : old('he_oestrogen_day_of_cycle') }}" />
                                        @error('he_oestrogen_day_of_cycle')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_oestrogen_result') has-error @enderror">
                                        <input type="text" name="he_oestrogen_result" class="form-control" value="{{ $test ? $test->he_oestrogen_result : old('he_oestrogen_result') }}" />
                                        @error('he_oestrogen_result')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_oestrogen_normal_range') has-error @enderror">
                                        <input type="text" name="he_oestrogen_normal_range" class="form-control" value="{{ $test ? $test->he_oestrogen_normal_range : old('he_oestrogen_normal_range') }}" />
                                        @error('he_oestrogen_normal_range')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="Progesterone" readonly />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_progesterone_date') has-error @enderror">
                                        <input type="date" name="he_progesterone_date" class="form-control" value="{{ $test ? $test->he_progesterone_date : old('he_progesterone_date') }}" />
                                        @error('he_progesterone_date')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_progesterone_day_of_cycle') has-error @enderror">
                                        <input type="text" name="he_progesterone_day_of_cycle" class="form-control" value="{{ $test ? $test->he_progesterone_day_of_cycle : old('he_progesterone_day_of_cycle') }}" />
                                        @error('he_progesterone_day_of_cycle')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_progesterone_result') has-error @enderror">
                                        <input type="text" name="he_progesterone_result" class="form-control" value="{{ $test ? $test->he_progesterone_result : old('he_progesterone_result') }}" />
                                        @error('he_progesterone_result')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_progesterone_normal_range') has-error @enderror">
                                        <input type="text" name="he_progesterone_normal_range" class="form-control" value="{{ $test ? $test->he_progesterone_normal_range : old('he_progesterone_normal_range') }}" />
                                        @error('he_progesterone_normal_range')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="DHEAS" readonly />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_dheas_date') has-error @enderror">
                                        <input type="date" name="he_dheas_date" class="form-control" value="{{ $test ? $test->he_dheas_date : old('he_dheas_date') }}" />
                                        @error('he_dheas_date')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_dheas_day_of_cycle') has-error @enderror">
                                        <input type="text" name="he_dheas_day_of_cycle" class="form-control" value="{{ $test ? $test->he_dheas_day_of_cycle : old('he_dheas_day_of_cycle') }}" />
                                        @error('he_dheas_day_of_cycle')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_dheas_result') has-error @enderror">
                                        <input type="text" name="he_dheas_result" class="form-control" value="{{ $test ? $test->he_dheas_result : old('he_dheas_result') }}" />
                                        @error('he_dheas_result')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_dheas_normal_range') has-error @enderror">
                                        <input type="text" name="he_dheas_normal_range" class="form-control" value="{{ $test ? $test->he_dheas_normal_range : old('he_dheas_normal_range') }}" />
                                        @error('he_dheas_normal_range')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="Cortisol" readonly />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_cortisol_date') has-error @enderror">
                                        <input type="date" name="he_cortisol_date" class="form-control" value="{{ $test ? $test->he_cortisol_date : old('he_cortisol_date') }}" />
                                        @error('he_cortisol_date')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_cortisol_day_of_cycle') has-error @enderror">
                                        <input type="text" name="he_cortisol_day_of_cycle" class="form-control" value="{{ $test ? $test->he_cortisol_day_of_cycle : old('he_cortisol_day_of_cycle') }}" />
                                        @error('he_cortisol_day_of_cycle')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_cortisol_result') has-error @enderror">
                                        <input type="text" name="he_cortisol_result" class="form-control" value="{{ $test ? $test->he_cortisol_result : old('he_cortisol_result') }}" />
                                        @error('he_cortisol_result')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_cortisol_normal_range') has-error @enderror">
                                        <input type="text" name="he_cortisol_normal_range" class="form-control" value="{{ $test ? $test->he_cortisol_normal_range : old('he_cortisol_normal_range') }}" />
                                        @error('he_cortisol_normal_range')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="T3" readonly />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_t3_date') has-error @enderror">
                                        <input type="date" name="he_t3_date" class="form-control" value="{{ $test ? $test->he_t3_date : old('he_t3_date') }}" />
                                        @error('he_t3_date')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_t3_day_of_cycle') has-error @enderror">
                                        <input type="text" name="he_t3_day_of_cycle" class="form-control" value="{{ $test ? $test->he_t3_day_of_cycle : old('he_t3_day_of_cycle') }}" />
                                        @error('he_t3_day_of_cycle')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_t3_result') has-error @enderror">
                                        <input type="text" name="he_t3_result" class="form-control" value="{{ $test ? $test->he_t3_result : old('he_t3_result') }}" />
                                        @error('he_t3_result')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_t3_normal_range') has-error @enderror">
                                        <input type="text" name="he_t3_normal_range" class="form-control" value="{{ $test ? $test->he_t3_normal_range : old('he_t3_normal_range') }}" />
                                        @error('he_t3_normal_range')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="T4" readonly />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_t4_date') has-error @enderror">
                                        <input type="date" name="he_t4_date" class="form-control" value="{{ $test ? $test->he_t4_date : old('he_t4_date') }}" />
                                        @error('he_t4_date')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_t4_day_of_cycle') has-error @enderror">
                                        <input type="text" name="he_t4_day_of_cycle" class="form-control" value="{{ $test ? $test->he_t4_day_of_cycle : old('he_t4_day_of_cycle') }}" />
                                        @error('he_t4_day_of_cycle')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_t4_result') has-error @enderror">
                                        <input type="text" name="he_t4_result" class="form-control" value="{{ $test ? $test->he_t4_result : old('he_t4_result') }}" />
                                        @error('he_t4_result')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_t4_normal_range') has-error @enderror">
                                        <input type="text" name="he_t4_normal_range" class="form-control" value="{{ $test ? $test->he_t4_normal_range : old('he_t4_normal_range') }}" />
                                        @error('he_t4_normal_range')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="TSH" readonly />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_tsh_date') has-error @enderror">
                                        <input type="date" name="he_tsh_date" class="form-control" value="{{ $test ? $test->he_tsh_date : old('he_tsh_date') }}" />
                                        @error('he_tsh_date')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_tsh_day_of_cycle') has-error @enderror">
                                        <input type="text" name="he_tsh_day_of_cycle" class="form-control" value="{{ $test ? $test->he_tsh_day_of_cycle : old('he_tsh_day_of_cycle') }}" />
                                        @error('he_tsh_day_of_cycle')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_tsh_result') has-error @enderror">
                                        <input type="text" name="he_tsh_result" class="form-control" value="{{ $test ? $test->he_tsh_result : old('he_tsh_result') }}" />
                                        @error('he_tsh_result')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('he_tsh_normal_range') has-error @enderror">
                                        <input type="text" name="he_tsh_normal_range" class="form-control" value="{{ $test ? $test->he_tsh_normal_range : old('he_tsh_normal_range') }}" />
                                        @error('he_tsh_normal_range')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>Antibodies against husband's sperms:</p>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group @error('wife_hea_date') has-error @enderror">
                            <label for="wife_hea_date">{{ __('Date') }}</label>
                            <input type="date" name="wife_hea_date" class="form-control" value="{{ $test ? $test->wife_hea_date : old('wife_hea_date') }}" />
                            @error('wife_hea_date')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>lgG</th>
                                        <th>lgM</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="Toxoplasma" readonly />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_hea_toxoplasma_g') has-error @enderror">
                                                <input type="text" name="wife_hea_toxoplasma_g" class="form-control" value="{{ $test ? $test->wife_hea_toxoplasma_g : old('wife_hea_toxoplasma_g') }}" />
                                                @error('wife_hea_toxoplasma_g')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_hea_toxoplasma_m') has-error @enderror">
                                                <input type="text" name="wife_hea_toxoplasma_m" class="form-control" value="{{ $test ? $test->wife_hea_toxoplasma_m : old('wife_hea_toxoplasma_m') }}" />
                                                @error('wife_hea_toxoplasma_m')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="Rubella" readonly />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_hea_rubella_g') has-error @enderror">
                                                <input type="text" name="wife_hea_rubella_g" class="form-control" value="{{ $test ? $test->wife_hea_rubella_g : old('wife_hea_rubella_g') }}" />
                                                @error('wife_hea_rubella_g')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_hea_rubella_m') has-error @enderror">
                                                <input type="text" name="wife_hea_rubella_m" class="form-control" value="{{ $test ? $test->wife_hea_rubella_m : old('wife_hea_rubella_m') }}" />
                                                @error('wife_hea_rubella_m')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="C.M.V" readonly />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_hea_cmv_g') has-error @enderror">
                                                <input type="text" name="wife_hea_cmv_g" class="form-control" value="{{ $test ? $test->wife_hea_cmv_g : old('wife_hea_cmv_g') }}" />
                                                @error('wife_hea_cmv_g')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_hea_cmv_m') has-error @enderror">
                                                <input type="text" name="wife_hea_cmv_m" class="form-control" value="{{ $test ? $test->wife_hea_cmv_m : old('wife_hea_cmv_m') }}" />
                                                @error('wife_hea_cmv_m')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="Herpes" readonly />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_hea_herpes_g') has-error @enderror">
                                                <input type="text" name="wife_hea_herpes_g" class="form-control" value="{{ $test ? $test->wife_hea_herpes_g : old('wife_hea_herpes_g') }}" />
                                                @error('wife_hea_herpes_g')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_hea_herpes_m') has-error @enderror">
                                                <input type="text" name="wife_hea_herpes_m" class="form-control" value="{{ $test ? $test->wife_hea_herpes_m : old('wife_hea_herpes_m') }}" />
                                                @error('wife_hea_herpes_m')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="ACA" readonly />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_hea_aca_g') has-error @enderror">
                                                <input type="text" name="wife_hea_aca_g" class="form-control" value="{{ $test ? $test->wife_hea_aca_g : old('wife_hea_aca_g') }}" />
                                                @error('wife_hea_aca_g')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_hea_aca_m') has-error @enderror">
                                                <input type="text" name="wife_hea_aca_m" class="form-control" value="{{ $test ? $test->wife_hea_aca_m : old('wife_hea_aca_m') }}" />
                                                @error('wife_hea_aca_m')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="APA" readonly />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_hea_apa_g') has-error @enderror">
                                                <input type="text" name="wife_hea_apa_g" class="form-control" value="{{ $test ? $test->wife_hea_apa_g : old('wife_hea_apa_g') }}" />
                                                @error('wife_hea_apa_g')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_hea_apa_m') has-error @enderror">
                                                <input type="text" name="wife_hea_apa_m" class="form-control" value="{{ $test ? $test->wife_hea_apa_m : old('wife_hea_apa_m') }}" />
                                                @error('wife_hea_apa_m')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="ANA" readonly />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_hea_ana_g') has-error @enderror">
                                                <input type="text" name="wife_hea_ana_g" class="form-control" value="{{ $test ? $test->wife_hea_ana_g : old('wife_hea_ana_g') }}" />
                                                @error('wife_hea_ana_g')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_hea_ana_m') has-error @enderror">
                                                <input type="text" name="wife_hea_ana_m" class="form-control" value="{{ $test ? $test->wife_hea_ana_m : old('wife_hea_ana_m') }}" />
                                                @error('wife_hea_ana_m')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="LA" readonly />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_hea_la_g') has-error @enderror">
                                                <input type="text" name="wife_hea_la_g" class="form-control" value="{{ $test ? $test->wife_hea_la_g : old('wife_hea_la_g') }}" />
                                                @error('wife_hea_la_g')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_hea_la_m') has-error @enderror">
                                                <input type="text" name="wife_hea_la_m" class="form-control" value="{{ $test ? $test->wife_hea_la_m : old('wife_hea_la_m') }}" />
                                                @error('wife_hea_la_m')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group @error('sa_hrs_1') has-error @enderror">
                            <label for="sa_hrs_1">{{ __('Chromosomal Analysis') }}</label>
                            <textarea name="sa_hrs_1" class="form-control">{{ $test ? $test->sa_hrs_1 : old('sa_hrs_1') }}</textarea>
                            @error('sa_hrs_1')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel box" id="iUICyclePanelOne">
        <div class="box-header">
            <h4 class="box-title">
                <a class="text-muted" data-toggle="collapse" data-parent="#iUICyclePanelOne" href="#iUICycleCollapseOne">
                    {{ __('IUI Cycle') }}
                </a>
            </h4>
        </div>
        <div id="iUICycleCollapseOne" class="panel-collapse collapse">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Day</th>
                                        <th>Date</th>
                                        <th>Endo.</th>
                                        <th>Rt. Ov.</th>
                                        <th>Lt. Ov.</th>
                                        <th>Remark</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <div class="form-group @error('wife_ici_day_1') has-error @enderror">
                                                <input type="text" name="wife_ici_day_1" class="form-control" value="{{ $test ? $test->wife_ici_day_1 : old('wife_ici_day_1') }}" />
                                                @error('wife_ici_day_1')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_ici_date_1') has-error @enderror">
                                                <input type="date" name="wife_ici_date_1" class="form-control" value="{{ $test ? $test->wife_ici_date_1 : old('wife_ici_date_1') }}" />
                                                @error('wife_ici_date_1')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_ici_endo_1') has-error @enderror">
                                                <input type="text" name="wife_ici_endo_1" class="form-control" value="{{ $test ? $test->wife_ici_endo_1 : old('wife_ici_endo_1') }}" />
                                                @error('wife_ici_endo_1')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_ici_rtov_1') has-error @enderror">
                                                <input type="text" name="wife_ici_rtov_1" class="form-control" value="{{ $test ? $test->wife_ici_rtov_1 : old('wife_ici_rtov_1') }}" />
                                                @error('wife_ici_rtov_1')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_ici_ltov_1') has-error @enderror">
                                                <input type="text" name="wife_ici_ltov_1" class="form-control" value="{{ $test ? $test->wife_ici_ltov_1 : old('wife_ici_ltov_1') }}" />
                                                @error('wife_ici_ltov_1')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_ici_remark_1') has-error @enderror">
                                                <input type="text" name="wife_ici_remark_1" class="form-control" value="{{ $test ? $test->wife_ici_remark_1 : old('wife_ici_remark_1') }}" />
                                                @error('wife_ici_remark_1')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <div class="form-group @error('wife_ici_day_2') has-error @enderror">
                                                <input type="text" name="wife_ici_day_2" class="form-control" value="{{ $test ? $test->wife_ici_day_2 : old('wife_ici_day_2') }}" />
                                                @error('wife_ici_day_2')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_ici_date_2') has-error @enderror">
                                                <input type="date" name="wife_ici_date_2" class="form-control" value="{{ $test ? $test->wife_ici_date_2 : old('wife_ici_date_2') }}" />
                                                @error('wife_ici_date_2')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_ici_endo_2') has-error @enderror">
                                                <input type="text" name="wife_ici_endo_2" class="form-control" value="{{ $test ? $test->wife_ici_endo_2 : old('wife_ici_endo_2') }}" />
                                                @error('wife_ici_endo_2')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_ici_rtov_2') has-error @enderror">
                                                <input type="text" name="wife_ici_rtov_2" class="form-control" value="{{ $test ? $test->wife_ici_rtov_2 : old('wife_ici_rtov_2') }}" />
                                                @error('wife_ici_rtov_2')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_ici_ltov_2') has-error @enderror">
                                                <input type="text" name="wife_ici_ltov_2" class="form-control" value="{{ $test ? $test->wife_ici_ltov_2 : old('wife_ici_ltov_2') }}" />
                                                @error('wife_ici_ltov_2')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_ici_remark_2') has-error @enderror">
                                                <input type="text" name="wife_ici_remark_2" class="form-control" value="{{ $test ? $test->wife_ici_remark_2 : old('wife_ici_remark_2') }}" />
                                                @error('wife_ici_remark_2')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <div class="form-group @error('wife_ici_day_3') has-error @enderror">
                                                <input type="text" name="wife_ici_day_3" class="form-control" value="{{ $test ? $test->wife_ici_day_3 : old('wife_ici_day_3') }}" />
                                                @error('wife_ici_day_3')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_ici_date_3') has-error @enderror">
                                                <input type="date" name="wife_ici_date_3" class="form-control" value="{{ $test ? $test->wife_ici_date_3 : old('wife_ici_date_3') }}" />
                                                @error('wife_ici_date_3')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_ici_endo_3') has-error @enderror">
                                                <input type="text" name="wife_ici_endo_3" class="form-control" value="{{ $test ? $test->wife_ici_endo_3 : old('wife_ici_endo_3') }}" />
                                                @error('wife_ici_endo_3')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_ici_rtov_3') has-error @enderror">
                                                <input type="text" name="wife_ici_rtov_3" class="form-control" value="{{ $test ? $test->wife_ici_rtov_3 : old('wife_ici_rtov_3') }}" />
                                                @error('wife_ici_rtov_3')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_ici_ltov_3') has-error @enderror">
                                                <input type="text" name="wife_ici_ltov_3" class="form-control" value="{{ $test ? $test->wife_ici_ltov_3 : old('wife_ici_ltov_3') }}" />
                                                @error('wife_ici_ltov_3')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_ici_remark_3') has-error @enderror">
                                                <input type="text" name="wife_ici_remark_3" class="form-control" value="{{ $test ? $test->wife_ici_remark_3 : old('wife_ici_remark_3') }}" />
                                                @error('wife_ici_remark_3')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <div class="form-group @error('wife_ici_day_4') has-error @enderror">
                                                <input type="text" name="wife_ici_day_4" class="form-control" value="{{ $test ? $test->wife_ici_day_4 : old('wife_ici_day_4') }}" />
                                                @error('wife_ici_day_4')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_ici_date_4') has-error @enderror">
                                                <input type="date" name="wife_ici_date_4" class="form-control" value="{{ $test ? $test->wife_ici_date_4 : old('wife_ici_date_4') }}" />
                                                @error('wife_ici_date_4')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_ici_endo_4') has-error @enderror">
                                                <input type="text" name="wife_ici_endo_4" class="form-control" value="{{ $test ? $test->wife_ici_endo_4 : old('wife_ici_endo_4') }}" />
                                                @error('wife_ici_endo_4')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_ici_rtov_4') has-error @enderror">
                                                <input type="text" name="wife_ici_rtov_4" class="form-control" value="{{ $test ? $test->wife_ici_rtov_4 : old('wife_ici_rtov_4') }}" />
                                                @error('wife_ici_rtov_4')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_ici_ltov_4') has-error @enderror">
                                                <input type="text" name="wife_ici_ltov_4" class="form-control" value="{{ $test ? $test->wife_ici_ltov_4 : old('wife_ici_ltov_4') }}" />
                                                @error('wife_ici_ltov_4')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_ici_remark_4') has-error @enderror">
                                                <input type="text" name="wife_ici_remark_4" class="form-control" value="{{ $test ? $test->wife_ici_remark_4 : old('wife_ici_remark_4') }}" />
                                                @error('wife_ici_remark_4')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <div class="form-group @error('wife_ici_day_5') has-error @enderror">
                                                <input type="text" name="wife_ici_day_5" class="form-control" value="{{ $test ? $test->wife_ici_day_5 : old('wife_ici_day_5') }}" />
                                                @error('wife_ici_day_5')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_ici_date_5') has-error @enderror">
                                                <input type="date" name="wife_ici_date_5" class="form-control" value="{{ $test ? $test->wife_ici_date_5 : old('wife_ici_date_5') }}" />
                                                @error('wife_ici_date_5')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_ici_endo_5') has-error @enderror">
                                                <input type="text" name="wife_ici_endo_5" class="form-control" value="{{ $test ? $test->wife_ici_endo_5 : old('wife_ici_endo_5') }}" />
                                                @error('wife_ici_endo_5')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_ici_rtov_5') has-error @enderror">
                                                <input type="text" name="wife_ici_rtov_5" class="form-control" value="{{ $test ? $test->wife_ici_rtov_5 : old('wife_ici_rtov_5') }}" />
                                                @error('wife_ici_rtov_5')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_ici_ltov_5') has-error @enderror">
                                                <input type="text" name="wife_ici_ltov_5" class="form-control" value="{{ $test ? $test->wife_ici_ltov_5 : old('wife_ici_ltov_5') }}" />
                                                @error('wife_ici_ltov_5')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_ici_remark_5') has-error @enderror">
                                                <input type="text" name="wife_ici_remark_5" class="form-control" value="{{ $test ? $test->wife_ici_remark_5 : old('wife_ici_remark_5') }}" />
                                                @error('wife_ici_remark_5')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>
                                            <div class="form-group @error('wife_ici_day_6') has-error @enderror">
                                                <input type="text" name="wife_ici_day_6" class="form-control" value="{{ $test ? $test->wife_ici_day_6 : old('wife_ici_day_6') }}" />
                                                @error('wife_ici_day_6')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_ici_date_6') has-error @enderror">
                                                <input type="date" name="wife_ici_date_6" class="form-control" value="{{ $test ? $test->wife_ici_date_6 : old('wife_ici_date_6') }}" />
                                                @error('wife_ici_date_6')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_ici_endo_6') has-error @enderror">
                                                <input type="text" name="wife_ici_endo_6" class="form-control" value="{{ $test ? $test->wife_ici_endo_6 : old('wife_ici_endo_6') }}" />
                                                @error('wife_ici_endo_6')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_ici_rtov_6') has-error @enderror">
                                                <input type="text" name="wife_ici_rtov_6" class="form-control" value="{{ $test ? $test->wife_ici_rtov_6 : old('wife_ici_rtov_6') }}" />
                                                @error('wife_ici_rtov_6')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_ici_ltov_6') has-error @enderror">
                                                <input type="text" name="wife_ici_ltov_6" class="form-control" value="{{ $test ? $test->wife_ici_ltov_6 : old('wife_ici_ltov_6') }}" />
                                                @error('wife_ici_ltov_6')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_ici_remark_6') has-error @enderror">
                                                <input type="text" name="wife_ici_remark_6" class="form-control" value="{{ $test ? $test->wife_ici_remark_6 : old('wife_ici_remark_6') }}" />
                                                @error('wife_ici_remark_6')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table">
                                <caption><b>{{ __('Intra-Uterine Insemination Details') }}</b></caption>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Day</th>
                                        <th>Volume</th>
                                        <th>Native Count</th>
                                        <th>Motility</th>
                                        <th>Harvest Count</th>
                                        <th>Motility</th>
                                        <th>Grade</th>
                                        <th>Remark</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_day_1') has-error @enderror">
                                                <input type="text" name="wife_iuid_day_1" class="form-control" value="{{ $test ? $test->wife_iuid_day_1 : old('wife_iuid_day_1') }}" />
                                                @error('wife_iuid_day_1')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_volume_1') has-error @enderror">
                                                <input type="text" name="wife_iuid_volume_1" class="form-control" value="{{ $test ? $test->wife_iuid_volume_1 : old('wife_iuid_volume_1') }}" />
                                                @error('wife_iuid_volume_1')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_native_couint_1') has-error @enderror">
                                                <input type="text" name="wife_iuid_native_couint_1" class="form-control" value="{{ $test ? $test->wife_iuid_native_couint_1 : old('wife_iuid_native_couint_1') }}" />
                                                @error('wife_iuid_native_couint_1')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_motility1_1') has-error @enderror">
                                                <input type="text" name="wife_iuid_motility1_1" class="form-control" value="{{ $test ? $test->wife_iuid_motility1_1 : old('wife_iuid_motility1_1') }}" />
                                                @error('wife_iuid_motility1_1')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_harvest_count_1') has-error @enderror">
                                                <input type="text" name="wife_iuid_harvest_count_1" class="form-control" value="{{ $test ? $test->wife_iuid_harvest_count_1 : old('wife_iuid_harvest_count_1') }}" />
                                                @error('wife_iuid_harvest_count_1')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_motility2_1') has-error @enderror">
                                                <input type="text" name="wife_iuid_motility2_1" class="form-control" value="{{ $test ? $test->wife_iuid_motility2_1 : old('wife_iuid_motility2_1') }}" />
                                                @error('wife_iuid_motility2_1')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_motility3_1') has-error @enderror">
                                                <input type="text" name="wife_iuid_motility3_1" class="form-control" value="{{ $test ? $test->wife_iuid_motility3_1 : old('wife_iuid_motility3_1') }}" />
                                                @error('wife_iuid_motility3_1')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_remark_1') has-error @enderror">
                                                <input type="text" name="wife_iuid_remark_1" class="form-control" value="{{ $test ? $test->wife_iuid_remark_1 : old('wife_iuid_remark_1') }}" />
                                                @error('wife_iuid_remark_1')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_day_2') has-error @enderror">
                                                <input type="text" name="wife_iuid_day_2" class="form-control" value="{{ $test ? $test->wife_iuid_day_2 : old('wife_iuid_day_2') }}" />
                                                @error('wife_iuid_day_2')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_volume_2') has-error @enderror">
                                                <input type="text" name="wife_iuid_volume_2" class="form-control" value="{{ $test ? $test->wife_iuid_volume_2 : old('wife_iuid_volume_2') }}" />
                                                @error('wife_iuid_volume_2')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_native_couint_2') has-error @enderror">
                                                <input type="text" name="wife_iuid_native_couint_2" class="form-control" value="{{ $test ? $test->wife_iuid_native_couint_2 : old('wife_iuid_native_couint_2') }}" />
                                                @error('wife_iuid_native_couint_2')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_motility1_2') has-error @enderror">
                                                <input type="text" name="wife_iuid_motility1_2" class="form-control" value="{{ $test ? $test->wife_iuid_motility1_2 : old('wife_iuid_motility1_2') }}" />
                                                @error('wife_iuid_motility1_2')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_harvest_count_2') has-error @enderror">
                                                <input type="text" name="wife_iuid_harvest_count_2" class="form-control" value="{{ $test ? $test->wife_iuid_harvest_count_2 : old('wife_iuid_harvest_count_2') }}" />
                                                @error('wife_iuid_harvest_count_2')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_motility2_2') has-error @enderror">
                                                <input type="text" name="wife_iuid_motility2_2" class="form-control" value="{{ $test ? $test->wife_iuid_motility2_2 : old('wife_iuid_motility2_2') }}" />
                                                @error('wife_iuid_motility2_2')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_motility3_2') has-error @enderror">
                                                <input type="text" name="wife_iuid_motility3_2" class="form-control" value="{{ $test ? $test->wife_iuid_motility3_2 : old('wife_iuid_motility3_2') }}" />
                                                @error('wife_iuid_motility3_2')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_remark_2') has-error @enderror">
                                                <input type="text" name="wife_iuid_remark_2" class="form-control" value="{{ $test ? $test->wife_iuid_remark_2 : old('wife_iuid_remark_2') }}" />
                                                @error('wife_iuid_remark_2')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_day_3') has-error @enderror">
                                                <input type="text" name="wife_iuid_day_3" class="form-control" value="{{ $test ? $test->wife_iuid_day_3 : old('wife_iuid_day_3') }}" />
                                                @error('wife_iuid_day_3')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_volume_3') has-error @enderror">
                                                <input type="text" name="wife_iuid_volume_3" class="form-control" value="{{ $test ? $test->wife_iuid_volume_3 : old('wife_iuid_volume_3') }}" />
                                                @error('wife_iuid_volume_3')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_native_couint_3') has-error @enderror">
                                                <input type="text" name="wife_iuid_native_couint_3" class="form-control" value="{{ $test ? $test->wife_iuid_native_couint_3 : old('wife_iuid_native_couint_3') }}" />
                                                @error('wife_iuid_native_couint_3')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_motility1_3') has-error @enderror">
                                                <input type="text" name="wife_iuid_motility1_3" class="form-control" value="{{ $test ? $test->wife_iuid_motility1_3 : old('wife_iuid_motility1_3') }}" />
                                                @error('wife_iuid_motility1_3')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_harvest_count_3') has-error @enderror">
                                                <input type="text" name="wife_iuid_harvest_count_3" class="form-control" value="{{ $test ? $test->wife_iuid_harvest_count_3 : old('wife_iuid_harvest_count_3') }}" />
                                                @error('wife_iuid_harvest_count_3')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_motility2_3') has-error @enderror">
                                                <input type="text" name="wife_iuid_motility2_3" class="form-control" value="{{ $test ? $test->wife_iuid_motility2_3 : old('wife_iuid_motility2_3') }}" />
                                                @error('wife_iuid_motility2_3')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_motility3_3') has-error @enderror">
                                                <input type="text" name="wife_iuid_motility3_3" class="form-control" value="{{ $test ? $test->wife_iuid_motility3_3 : old('wife_iuid_motility3_3') }}" />
                                                @error('wife_iuid_motility3_3')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_remark_3') has-error @enderror">
                                                <input type="text" name="wife_iuid_remark_3" class="form-control" value="{{ $test ? $test->wife_iuid_remark_3 : old('wife_iuid_remark_3') }}" />
                                                @error('wife_iuid_remark_3')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_day_4') has-error @enderror">
                                                <input type="text" name="wife_iuid_day_4" class="form-control" value="{{ $test ? $test->wife_iuid_day_4 : old('wife_iuid_day_4') }}" />
                                                @error('wife_iuid_day_4')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_volume_4') has-error @enderror">
                                                <input type="text" name="wife_iuid_volume_4" class="form-control" value="{{ $test ? $test->wife_iuid_volume_4 : old('wife_iuid_volume_4') }}" />
                                                @error('wife_iuid_volume_4')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_native_couint_4') has-error @enderror">
                                                <input type="text" name="wife_iuid_native_couint_4" class="form-control" value="{{ $test ? $test->wife_iuid_native_couint_4 : old('wife_iuid_native_couint_4') }}" />
                                                @error('wife_iuid_native_couint_4')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_motility1_4') has-error @enderror">
                                                <input type="text" name="wife_iuid_motility1_4" class="form-control" value="{{ $test ? $test->wife_iuid_motility1_4 : old('wife_iuid_motility1_4') }}" />
                                                @error('wife_iuid_motility1_4')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_harvest_count_4') has-error @enderror">
                                                <input type="text" name="wife_iuid_harvest_count_4" class="form-control" value="{{ $test ? $test->wife_iuid_harvest_count_4 : old('wife_iuid_harvest_count_4') }}" />
                                                @error('wife_iuid_harvest_count_4')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_motility2_4') has-error @enderror">
                                                <input type="text" name="wife_iuid_motility2_4" class="form-control" value="{{ $test ? $test->wife_iuid_motility2_4 : old('wife_iuid_motility2_4') }}" />
                                                @error('wife_iuid_motility2_4')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_motility3_4') has-error @enderror">
                                                <input type="text" name="wife_iuid_motility3_4" class="form-control" value="{{ $test ? $test->wife_iuid_motility3_4 : old('wife_iuid_motility3_4') }}" />
                                                @error('wife_iuid_motility3_4')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_remark_4') has-error @enderror">
                                                <input type="text" name="wife_iuid_remark_4" class="form-control" value="{{ $test ? $test->wife_iuid_remark_4 : old('wife_iuid_remark_4') }}" />
                                                @error('wife_iuid_remark_4')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_day_5') has-error @enderror">
                                                <input type="text" name="wife_iuid_day_5" class="form-control" value="{{ $test ? $test->wife_iuid_day_5 : old('wife_iuid_day_5') }}" />
                                                @error('wife_iuid_day_5')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_volume_5') has-error @enderror">
                                                <input type="text" name="wife_iuid_volume_5" class="form-control" value="{{ $test ? $test->wife_iuid_volume_5 : old('wife_iuid_volume_5') }}" />
                                                @error('wife_iuid_volume_5')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_native_couint_5') has-error @enderror">
                                                <input type="text" name="wife_iuid_native_couint_5" class="form-control" value="{{ $test ? $test->wife_iuid_native_couint_5 : old('wife_iuid_native_couint_5') }}" />
                                                @error('wife_iuid_native_couint_5')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_motility1_5') has-error @enderror">
                                                <input type="text" name="wife_iuid_motility1_5" class="form-control" value="{{ $test ? $test->wife_iuid_motility1_5 : old('wife_iuid_motility1_5') }}" />
                                                @error('wife_iuid_motility1_5')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_harvest_count_5') has-error @enderror">
                                                <input type="text" name="wife_iuid_harvest_count_5" class="form-control" value="{{ $test ? $test->wife_iuid_harvest_count_5 : old('wife_iuid_harvest_count_5') }}" />
                                                @error('wife_iuid_harvest_count_5')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_motility2_5') has-error @enderror">
                                                <input type="text" name="wife_iuid_motility2_5" class="form-control" value="{{ $test ? $test->wife_iuid_motility2_5 : old('wife_iuid_motility2_5') }}" />
                                                @error('wife_iuid_motility2_5')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_motility3_5') has-error @enderror">
                                                <input type="text" name="wife_iuid_motility3_5" class="form-control" value="{{ $test ? $test->wife_iuid_motility3_5 : old('wife_iuid_motility3_5') }}" />
                                                @error('wife_iuid_motility3_5')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_remark_5') has-error @enderror">
                                                <input type="text" name="wife_iuid_remark_5" class="form-control" value="{{ $test ? $test->wife_iuid_remark_5 : old('wife_iuid_remark_5') }}" />
                                                @error('wife_iuid_remark_5')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_day_6') has-error @enderror">
                                                <input type="text" name="wife_iuid_day_6" class="form-control" value="{{ $test ? $test->wife_iuid_day_6 : old('wife_iuid_day_6') }}" />
                                                @error('wife_iuid_day_6')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_volume_6') has-error @enderror">
                                                <input type="text" name="wife_iuid_volume_6" class="form-control" value="{{ $test ? $test->wife_iuid_volume_6 : old('wife_iuid_volume_6') }}" />
                                                @error('wife_iuid_volume_6')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_native_couint_6') has-error @enderror">
                                                <input type="text" name="wife_iuid_native_couint_6" class="form-control" value="{{ $test ? $test->wife_iuid_native_couint_6 : old('wife_iuid_native_couint_6') }}" />
                                                @error('wife_iuid_native_couint_6')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_motility1_6') has-error @enderror">
                                                <input type="text" name="wife_iuid_motility1_6" class="form-control" value="{{ $test ? $test->wife_iuid_motility1_6 : old('wife_iuid_motility1_6') }}" />
                                                @error('wife_iuid_motility1_6')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_harvest_count_6') has-error @enderror">
                                                <input type="text" name="wife_iuid_harvest_count_6" class="form-control" value="{{ $test ? $test->wife_iuid_harvest_count_6 : old('wife_iuid_harvest_count_6') }}" />
                                                @error('wife_iuid_harvest_count_6')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_motility2_6') has-error @enderror">
                                                <input type="text" name="wife_iuid_motility2_6" class="form-control" value="{{ $test ? $test->wife_iuid_motility2_6 : old('wife_iuid_motility2_6') }}" />
                                                @error('wife_iuid_motility2_6')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_motility3_6') has-error @enderror">
                                                <input type="text" name="wife_iuid_motility3_6" class="form-control" value="{{ $test ? $test->wife_iuid_motility3_6 : old('wife_iuid_motility3_6') }}" />
                                                @error('wife_iuid_motility3_6')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_iuid_remark_6') has-error @enderror">
                                                <input type="text" name="wife_iuid_remark_6" class="form-control" value="{{ $test ? $test->wife_iuid_remark_6 : old('wife_iuid_remark_6') }}" />
                                                @error('wife_iuid_remark_6')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel box" id="iVFTreatmentPanelOne">
        <div class="box-header">
            <h4 class="box-title">
                <a class="text-muted" data-toggle="collapse" data-parent="#iVFTreatmentPanelOne" href="#iVFTreatmentCollapseOne">
                    <strong>{{ __('IVF Treatment Plan') }}</strong>
                </a>
            </h4>
        </div>
        <div id="iVFTreatmentCollapseOne" class="panel-collapse collapse">
            <div class="box-body">
                <legend>{{ __("Wife's LMP.") }}</legend>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group @error('result_description') has-error @enderror">
                            <textarea name="result_description" class="form-control">{{ $test ? $test->result_description : old('result_description') }}</textarea>
                            @error('result_description')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group @error('result_tton') has-error @enderror">
                            <label for="result_tton">{{ __('Trial Transfer on') }}</label>
                            <input type="date" name="result_tton" class="form-control" value="{{ $test ? $test->result_tton : old('result_tton') }}" />
                            @error('result_tton')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group @error('result_remarks') has-error @enderror">
                            <label for="result_remarks">{{ __('Remarks') }}</label>
                            <input type="text" name="result_remarks" class="form-control" value="{{ $test ? $test->result_remarks : old('result_remarks') }}" />
                            @error('result_remarks')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group @error('result_by') has-error @enderror">
                            <label for="result_by">{{ __('By Dr.') }}</label>
                            <input type="text" name="result_by" class="form-control" value="{{ $test ? $test->result_by : old('result_by') }}" />
                            @error('result_by')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>{{ __('Begin on') }}</th>
                                        <th>{{ __('Stopped on') }}</th>
                                        <th>{{ __('To Come on') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="O.C." readonly />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_lmp_oc_begin') has-error @enderror">
                                                <input type="text" name="wife_lmp_oc_begin" class="form-control" value="{{ $test ? $test->wife_lmp_oc_begin : old('wife_lmp_oc_begin') }}" />
                                                @error('wife_lmp_oc_begin')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_lmp_oc_stopped') has-error @enderror">
                                                <input type="text" name="wife_lmp_oc_stopped" class="form-control" value="{{ $test ? $test->wife_lmp_oc_stopped : old('wife_lmp_oc_stopped') }}" />
                                                @error('wife_lmp_oc_stopped')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_lmp_oc_tco') has-error @enderror">
                                                <input type="text" name="wife_lmp_oc_tco" class="form-control" value="{{ $test ? $test->wife_lmp_oc_tco : old('wife_lmp_oc_tco') }}" />
                                                @error('wife_lmp_oc_tco')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="Telephone Talk" readonly />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_lmp_telephone_begin') has-error @enderror">
                                                <input type="text" name="wife_lmp_telephone_begin" class="form-control" value="{{ $test ? $test->wife_lmp_telephone_begin : old('wife_lmp_telephone_begin') }}" />
                                                @error('wife_lmp_telephone_begin')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_lmp_telephone_stopped') has-error @enderror">
                                                <input type="text" name="wife_lmp_telephone_stopped" class="form-control" value="{{ $test ? $test->wife_lmp_telephone_stopped : old('wife_lmp_telephone_stopped') }}" />
                                                @error('wife_lmp_telephone_stopped')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_lmp_telephone_tco') has-error @enderror">
                                                <input type="text" name="wife_lmp_telephone_tco" class="form-control" value="{{ $test ? $test->wife_lmp_telephone_tco : old('wife_lmp_telephone_tco') }}" />
                                                @error('wife_lmp_telephone_tco')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="Discussion" readonly />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_lmp_discussion_begin') has-error @enderror">
                                                <input type="text" name="wife_lmp_discussion_begin" class="form-control" value="{{ $test ? $test->wife_lmp_discussion_begin : old('wife_lmp_discussion_begin') }}" />
                                                @error('wife_lmp_discussion_begin')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_lmp_discussion_stopped') has-error @enderror">
                                                <input type="text" name="wife_lmp_discussion_stopped" class="form-control" value="{{ $test ? $test->wife_lmp_discussion_stopped : old('wife_lmp_discussion_stopped') }}" />
                                                @error('wife_lmp_discussion_stopped')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('wife_lmp_discussion_tco') has-error @enderror">
                                                <input type="text" name="wife_lmp_discussion_tco" class="form-control" value="{{ $test ? $test->wife_lmp_discussion_tco : old('wife_lmp_discussion_tco') }}" />
                                                @error('wife_lmp_discussion_tco')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('wife_lmp_lupride') has-error @enderror">
                            <label for="wife_lmp_lupride">{{ __('Lupride') }}</label>
                            <input type="text" name="wife_lmp_lupride" class="form-control" value="{{ $test ? $test->wife_lmp_lupride : old('wife_lmp_lupride') }}" />
                            @error('wife_lmp_lupride')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('wife_lmp_stared') has-error @enderror">
                            <label for="wife_lmp_stared">{{ __('Stared') }}</label>
                            <input type="text" name="wife_lmp_stared" class="form-control" value="{{ $test ? $test->wife_lmp_stared : old('wife_lmp_stared') }}" />
                            @error('wife_lmp_stared')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('wife_lmp_tocome') has-error @enderror">
                            <label for="wife_lmp_tocome">{{ __('To Come On') }}</label>
                            <input type="text" name="wife_lmp_tocome" class="form-control" value="{{ $test ? $test->wife_lmp_tocome : old('wife_lmp_tocome') }}" />
                            @error('wife_lmp_tocome')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('wife_lmp_protocol') has-error @enderror">
                            <label for="wife_lmp_protocol">{{ __('Protocol') }}</label>
                            <input type="text" name="wife_lmp_protocol" class="form-control" value="{{ $test ? $test->wife_lmp_protocol : old('wife_lmp_protocol') }}" />
                            @error('wife_lmp_protocol')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group @error('result_lmp') has-error @enderror">
                            <label for="result_lmp">{{ __('LMP') }}</label>
                            <input type="text" name="result_lmp" class="form-control" value="{{ $test ? $test->result_lmp : old('result_lmp') }}" />
                            @error('result_lmp')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group @error('result_stm_start') has-error @enderror">
                            <label for="result_stm_start">{{ __('Stm Start') }}</label>
                            <input type="text" name="result_stm_start" class="form-control" value="{{ $test ? $test->result_stm_start : old('result_stm_start') }}" />
                            @error('result_stm_start')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>{{ __('#') }}</th>
                                        <th>{{ __('Date') }}</th>
                                        <th>{{ __('Cyc Day') }}</th>
                                        <th>{{ __('Sym Day') }}</th>
                                        <th>{{ __('End') }}</th>
                                        <th>{{ __('R Ovary AFC') }}</th>
                                        <th>{{ __('L Ovary AFC') }}</th>
                                        <th>{{ __('Stimulation Inj. Name') }}</th>
                                        <th>{{ __('Dose.') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_date_1') has-error @enderror">
                                                <input type="date" name="result_date_1" class="form-control" value="{{ $test ? $test->result_date_1 : old('result_date_1') }}" />
                                                @error('result_date_1')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_cyc_day_1') has-error @enderror">
                                                <input type="text" name="result_cyc_day_1" class="form-control" value="{{ $test ? $test->result_cyc_day_1 : old('result_cyc_day_1') }}" />
                                                @error('result_cyc_day_1')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_stm_day_1') has-error @enderror">
                                                <input type="text" name="result_stm_day_1" class="form-control" value="{{ $test ? $test->result_stm_day_1 : old('result_stm_day_1') }}" />
                                                @error('result_stm_day_1')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_end_1') has-error @enderror">
                                                <input type="text" name="result_end_1" class="form-control" value="{{ $test ? $test->result_end_1 : old('result_end_1') }}" />
                                                @error('result_end_1')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_rafc_1') has-error @enderror">
                                                <input type="text" name="result_rafc_1" class="form-control" value="{{ $test ? $test->result_rafc_1 : old('result_rafc_1') }}" />
                                                @error('result_rafc_1')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_lafc_1') has-error @enderror">
                                                <input type="text" name="result_lafc_1" class="form-control" value="{{ $test ? $test->result_lafc_1 : old('result_lafc_1') }}" />
                                                @error('result_lafc_1')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_stimulation_1') has-error @enderror">
                                                <input type="text" name="result_stimulation_1" class="form-control" value="{{ $test ? $test->result_stimulation_1 : old('result_stimulation_1') }}" />
                                                @error('result_stimulation_1')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_misc_1') has-error @enderror">
                                                <input type="text" name="result_misc_1" class="form-control" value="{{ $test ? $test->result_misc_1 : old('result_misc_1') }}" />
                                                @error('result_misc_1')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_date_2') has-error @enderror">
                                                <input type="date" name="result_date_2" class="form-control" value="{{ $test ? $test->result_date_2 : old('result_date_2') }}" />
                                                @error('result_date_2')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_cyc_day_2') has-error @enderror">
                                                <input type="text" name="result_cyc_day_2" class="form-control" value="{{ $test ? $test->result_cyc_day_2 : old('result_cyc_day_2') }}" />
                                                @error('result_cyc_day_2')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_stm_day_2') has-error @enderror">
                                                <input type="text" name="result_stm_day_2" class="form-control" value="{{ $test ? $test->result_stm_day_2 : old('result_stm_day_2') }}" />
                                                @error('result_stm_day_2')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_end_2') has-error @enderror">
                                                <input type="text" name="result_end_2" class="form-control" value="{{ $test ? $test->result_end_2 : old('result_end_2') }}" />
                                                @error('result_end_2')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_rafc_2') has-error @enderror">
                                                <input type="text" name="result_rafc_2" class="form-control" value="{{ $test ? $test->result_rafc_2 : old('result_rafc_2') }}" />
                                                @error('result_rafc_2')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_lafc_2') has-error @enderror">
                                                <input type="text" name="result_lafc_2" class="form-control" value="{{ $test ? $test->result_lafc_2 : old('result_lafc_2') }}" />
                                                @error('result_lafc_2')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_stimulation_2') has-error @enderror">
                                                <input type="text" name="result_stimulation_2" class="form-control" value="{{ $test ? $test->result_stimulation_2 : old('result_stimulation_2') }}" />
                                                @error('result_stimulation_2')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_misc_2') has-error @enderror">
                                                <input type="text" name="result_misc_2" class="form-control" value="{{ $test ? $test->result_misc_2 : old('result_misc_2') }}" />
                                                @error('result_misc_2')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            3
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_date_3') has-error @enderror">
                                                <input type="date" name="result_date_3" class="form-control" value="{{ $test ? $test->result_date_3 : old('result_date_3') }}" />
                                                @error('result_date_3')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_cyc_day_3') has-error @enderror">
                                                <input type="text" name="result_cyc_day_3" class="form-control" value="{{ $test ? $test->result_cyc_day_3 : old('result_cyc_day_3') }}" />
                                                @error('result_cyc_day_3')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_stm_day_3') has-error @enderror">
                                                <input type="text" name="result_stm_day_3" class="form-control" value="{{ $test ? $test->result_stm_day_3 : old('result_stm_day_3') }}" />
                                                @error('result_stm_day_3')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_end_3') has-error @enderror">
                                                <input type="text" name="result_end_3" class="form-control" value="{{ $test ? $test->result_end_3 : old('result_end_3') }}" />
                                                @error('result_end_3')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_rafc_3') has-error @enderror">
                                                <input type="text" name="result_rafc_3" class="form-control" value="{{ $test ? $test->result_rafc_3 : old('result_rafc_3') }}" />
                                                @error('result_rafc_3')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_lafc_3') has-error @enderror">
                                                <input type="text" name="result_lafc_3" class="form-control" value="{{ $test ? $test->result_lafc_3 : old('result_lafc_3') }}" />
                                                @error('result_lafc_3')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_stimulation_3') has-error @enderror">
                                                <input type="text" name="result_stimulation_3" class="form-control" value="{{ $test ? $test->result_stimulation_3 : old('result_stimulation_3') }}" />
                                                @error('result_stimulation_3')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_misc_3') has-error @enderror">
                                                <input type="text" name="result_misc_3" class="form-control" value="{{ $test ? $test->result_misc_3 : old('result_misc_3') }}" />
                                                @error('result_misc_3')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            4
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_date_4') has-error @enderror">
                                                <input type="date" name="result_date_4" class="form-control" value="{{ $test ? $test->result_date_4 : old('result_date_4') }}" />
                                                @error('result_date_4')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_cyc_day_4') has-error @enderror">
                                                <input type="text" name="result_cyc_day_4" class="form-control" value="{{ $test ? $test->result_cyc_day_4 : old('result_cyc_day_4') }}" />
                                                @error('result_cyc_day_4')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_stm_day_4') has-error @enderror">
                                                <input type="text" name="result_stm_day_4" class="form-control" value="{{ $test ? $test->result_stm_day_4 : old('result_stm_day_4') }}" />
                                                @error('result_stm_day_4')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_end_4') has-error @enderror">
                                                <input type="text" name="result_end_4" class="form-control" value="{{ $test ? $test->result_end_4 : old('result_end_4') }}" />
                                                @error('result_end_4')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_rafc_4') has-error @enderror">
                                                <input type="text" name="result_rafc_4" class="form-control" value="{{ $test ? $test->result_rafc_4 : old('result_rafc_4') }}" />
                                                @error('result_rafc_4')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_lafc_4') has-error @enderror">
                                                <input type="text" name="result_lafc_4" class="form-control" value="{{ $test ? $test->result_lafc_4 : old('result_lafc_4') }}" />
                                                @error('result_lafc_4')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_stimulation_4') has-error @enderror">
                                                <input type="text" name="result_stimulation_4" class="form-control" value="{{ $test ? $test->result_stimulation_4 : old('result_stimulation_4') }}" />
                                                @error('result_stimulation_4')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_misc_4') has-error @enderror">
                                                <input type="text" name="result_misc_4" class="form-control" value="{{ $test ? $test->result_misc_4 : old('result_misc_4') }}" />
                                                @error('result_misc_4')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            5
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_date_5') has-error @enderror">
                                                <input type="date" name="result_date_5" class="form-control" value="{{ $test ? $test->result_date_5 : old('result_date_5') }}" />
                                                @error('result_date_5')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_cyc_day_5') has-error @enderror">
                                                <input type="text" name="result_cyc_day_5" class="form-control" value="{{ $test ? $test->result_cyc_day_5 : old('result_cyc_day_5') }}" />
                                                @error('result_cyc_day_5')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_stm_day_5') has-error @enderror">
                                                <input type="text" name="result_stm_day_5" class="form-control" value="{{ $test ? $test->result_stm_day_5 : old('result_stm_day_5') }}" />
                                                @error('result_stm_day_5')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_end_5') has-error @enderror">
                                                <input type="text" name="result_end_5" class="form-control" value="{{ $test ? $test->result_end_5 : old('result_end_5') }}" />
                                                @error('result_end_5')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_rafc_5') has-error @enderror">
                                                <input type="text" name="result_rafc_5" class="form-control" value="{{ $test ? $test->result_rafc_5 : old('result_rafc_5') }}" />
                                                @error('result_rafc_5')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_lafc_5') has-error @enderror">
                                                <input type="text" name="result_lafc_5" class="form-control" value="{{ $test ? $test->result_lafc_5 : old('result_lafc_5') }}" />
                                                @error('result_lafc_5')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_stimulation_5') has-error @enderror">
                                                <input type="text" name="result_stimulation_5" class="form-control" value="{{ $test ? $test->result_stimulation_5 : old('result_stimulation_5') }}" />
                                                @error('result_stimulation_5')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_misc_5') has-error @enderror">
                                                <input type="text" name="result_misc_5" class="form-control" value="{{ $test ? $test->result_misc_5 : old('result_misc_5') }}" />
                                                @error('result_misc_5')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            6
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_date_6') has-error @enderror">
                                                <input type="date" name="result_date_6" class="form-control" value="{{ $test ? $test->result_date_6 : old('result_date_6') }}" />
                                                @error('result_date_6')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_cyc_day_6') has-error @enderror">
                                                <input type="text" name="result_cyc_day_6" class="form-control" value="{{ $test ? $test->result_cyc_day_6 : old('result_cyc_day_6') }}" />
                                                @error('result_cyc_day_6')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_stm_day_6') has-error @enderror">
                                                <input type="text" name="result_stm_day_6" class="form-control" value="{{ $test ? $test->result_stm_day_6 : old('result_stm_day_6') }}" />
                                                @error('result_stm_day_6')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_end_6') has-error @enderror">
                                                <input type="text" name="result_end_6" class="form-control" value="{{ $test ? $test->result_end_6 : old('result_end_6') }}" />
                                                @error('result_end_6')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_rafc_6') has-error @enderror">
                                                <input type="text" name="result_rafc_6" class="form-control" value="{{ $test ? $test->result_rafc_6 : old('result_rafc_6') }}" />
                                                @error('result_rafc_6')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_lafc_6') has-error @enderror">
                                                <input type="text" name="result_lafc_6" class="form-control" value="{{ $test ? $test->result_lafc_6 : old('result_lafc_6') }}" />
                                                @error('result_lafc_6')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_stimulation_6') has-error @enderror">
                                                <input type="text" name="result_stimulation_6" class="form-control" value="{{ $test ? $test->result_stimulation_6 : old('result_stimulation_6') }}" />
                                                @error('result_stimulation_6')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_misc_6') has-error @enderror">
                                                <input type="text" name="result_misc_6" class="form-control" value="{{ $test ? $test->result_misc_6 : old('result_misc_6') }}" />
                                                @error('result_misc_6')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            7
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_date_7') has-error @enderror">
                                                <input type="date" name="result_date_7" class="form-control" value="{{ $test ? $test->result_date_7 : old('result_date_7') }}" />
                                                @error('result_date_7')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_cyc_day_7') has-error @enderror">
                                                <input type="text" name="result_cyc_day_7" class="form-control" value="{{ $test ? $test->result_cyc_day_7 : old('result_cyc_day_7') }}" />
                                                @error('result_cyc_day_7')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_stm_day_7') has-error @enderror">
                                                <input type="text" name="result_stm_day_7" class="form-control" value="{{ $test ? $test->result_stm_day_7 : old('result_stm_day_7') }}" />
                                                @error('result_stm_day_7')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_end_7') has-error @enderror">
                                                <input type="text" name="result_end_7" class="form-control" value="{{ $test ? $test->result_end_7 : old('result_end_7') }}" />
                                                @error('result_end_7')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_rafc_7') has-error @enderror">
                                                <input type="text" name="result_rafc_7" class="form-control" value="{{ $test ? $test->result_rafc_7 : old('result_rafc_7') }}" />
                                                @error('result_rafc_7')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_lafc_7') has-error @enderror">
                                                <input type="text" name="result_lafc_7" class="form-control" value="{{ $test ? $test->result_lafc_7 : old('result_lafc_7') }}" />
                                                @error('result_lafc_7')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_stimulation_7') has-error @enderror">
                                                <input type="text" name="result_stimulation_7" class="form-control" value="{{ $test ? $test->result_stimulation_7 : old('result_stimulation_7') }}" />
                                                @error('result_stimulation_7')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_misc_7') has-error @enderror">
                                                <input type="text" name="result_misc_7" class="form-control" value="{{ $test ? $test->result_misc_7 : old('result_misc_7') }}" />
                                                @error('result_misc_7')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            8
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_date_8') has-error @enderror">
                                                <input type="date" name="result_date_8" class="form-control" value="{{ $test ? $test->result_date_8 : old('result_date_8') }}" />
                                                @error('result_date_8')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_cyc_day_8') has-error @enderror">
                                                <input type="text" name="result_cyc_day_8" class="form-control" value="{{ $test ? $test->result_cyc_day_8 : old('result_cyc_day_8') }}" />
                                                @error('result_cyc_day_8')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_stm_day_8') has-error @enderror">
                                                <input type="text" name="result_stm_day_8" class="form-control" value="{{ $test ? $test->result_stm_day_8 : old('result_stm_day_8') }}" />
                                                @error('result_stm_day_8')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_end_8') has-error @enderror">
                                                <input type="text" name="result_end_8" class="form-control" value="{{ $test ? $test->result_end_8 : old('result_end_8') }}" />
                                                @error('result_end_8')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_rafc_8') has-error @enderror">
                                                <input type="text" name="result_rafc_8" class="form-control" value="{{ $test ? $test->result_rafc_8 : old('result_rafc_8') }}" />
                                                @error('result_rafc_8')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_lafc_8') has-error @enderror">
                                                <input type="text" name="result_lafc_8" class="form-control" value="{{ $test ? $test->result_lafc_8 : old('result_lafc_8') }}" />
                                                @error('result_lafc_8')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_stimulation_8') has-error @enderror">
                                                <input type="text" name="result_stimulation_8" class="form-control" value="{{ $test ? $test->result_stimulation_8 : old('result_stimulation_8') }}" />
                                                @error('result_stimulation_8')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_misc_8') has-error @enderror">
                                                <input type="text" name="result_misc_8" class="form-control" value="{{ $test ? $test->result_misc_8 : old('result_misc_8') }}" />
                                                @error('result_misc_8')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            9
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_date_9') has-error @enderror">
                                                <input type="date" name="result_date_9" class="form-control" value="{{ $test ? $test->result_date_9 : old('result_date_9') }}" />
                                                @error('result_date_9')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_cyc_day_9') has-error @enderror">
                                                <input type="text" name="result_cyc_day_9" class="form-control" value="{{ $test ? $test->result_cyc_day_9 : old('result_cyc_day_9') }}" />
                                                @error('result_cyc_day_9')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_stm_day_9') has-error @enderror">
                                                <input type="text" name="result_stm_day_9" class="form-control" value="{{ $test ? $test->result_stm_day_9 : old('result_stm_day_9') }}" />
                                                @error('result_stm_day_9')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_end_9') has-error @enderror">
                                                <input type="text" name="result_end_9" class="form-control" value="{{ $test ? $test->result_end_9 : old('result_end_9') }}" />
                                                @error('result_end_9')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_rafc_9') has-error @enderror">
                                                <input type="text" name="result_rafc_9" class="form-control" value="{{ $test ? $test->result_rafc_9 : old('result_rafc_9') }}" />
                                                @error('result_rafc_9')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_lafc_9') has-error @enderror">
                                                <input type="text" name="result_lafc_9" class="form-control" value="{{ $test ? $test->result_lafc_9 : old('result_lafc_9') }}" />
                                                @error('result_lafc_9')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_stimulation_9') has-error @enderror">
                                                <input type="text" name="result_stimulation_9" class="form-control" value="{{ $test ? $test->result_stimulation_9 : old('result_stimulation_9') }}" />
                                                @error('result_stimulation_9')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_misc_9') has-error @enderror">
                                                <input type="text" name="result_misc_9" class="form-control" value="{{ $test ? $test->result_misc_9 : old('result_misc_9') }}" />
                                                @error('result_misc_9')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            10
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_date_10') has-error @enderror">
                                                <input type="date" name="result_date_10" class="form-control" value="{{ $test ? $test->result_date_10 : old('result_date_10') }}" />
                                                @error('result_date_10')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_cyc_day_10') has-error @enderror">
                                                <input type="text" name="result_cyc_day_10" class="form-control" value="{{ $test ? $test->result_cyc_day_10 : old('result_cyc_day_10') }}" />
                                                @error('result_cyc_day_10')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_stm_day_10') has-error @enderror">
                                                <input type="text" name="result_stm_day_10" class="form-control" value="{{ $test ? $test->result_stm_day_10 : old('result_stm_day_10') }}" />
                                                @error('result_stm_day_10')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_end_10') has-error @enderror">
                                                <input type="text" name="result_end_10" class="form-control" value="{{ $test ? $test->result_end_10 : old('result_end_10') }}" />
                                                @error('result_end_10')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_rafc_10') has-error @enderror">
                                                <input type="text" name="result_rafc_10" class="form-control" value="{{ $test ? $test->result_rafc_10 : old('result_rafc_10') }}" />
                                                @error('result_rafc_10')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_lafc_10') has-error @enderror">
                                                <input type="text" name="result_lafc_10" class="form-control" value="{{ $test ? $test->result_lafc_10 : old('result_lafc_10') }}" />
                                                @error('result_lafc_10')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_stimulation_10') has-error @enderror">
                                                <input type="text" name="result_stimulation_10" class="form-control" value="{{ $test ? $test->result_stimulation_10 : old('result_stimulation_10') }}" />
                                                @error('result_stimulation_10')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_misc_10') has-error @enderror">
                                                <input type="text" name="result_misc_10" class="form-control" value="{{ $test ? $test->result_misc_10 : old('result_misc_10') }}" />
                                                @error('result_misc_10')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_date_11') has-error @enderror">
                                                <input type="date" name="result_date_11" class="form-control" value="{{ $test ? $test->result_date_11 : old('result_date_11') }}" />
                                                @error('result_date_11')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_cyc_day_11') has-error @enderror">
                                                <input type="text" name="result_cyc_day_11" class="form-control" value="{{ $test ? $test->result_cyc_day_11 : old('result_cyc_day_11') }}" />
                                                @error('result_cyc_day_11')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_stm_day_11') has-error @enderror">
                                                <input type="text" name="result_stm_day_11" class="form-control" value="{{ $test ? $test->result_stm_day_11 : old('result_stm_day_11') }}" />
                                                @error('result_stm_day_11')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_end_11') has-error @enderror">
                                                <input type="text" name="result_end_11" class="form-control" value="{{ $test ? $test->result_end_11 : old('result_end_11') }}" />
                                                @error('result_end_11')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_rafc_11') has-error @enderror">
                                                <input type="text" name="result_rafc_11" class="form-control" value="{{ $test ? $test->result_rafc_11 : old('result_rafc_11') }}" />
                                                @error('result_rafc_11')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_lafc_11') has-error @enderror">
                                                <input type="text" name="result_lafc_11" class="form-control" value="{{ $test ? $test->result_lafc_11 : old('result_lafc_11') }}" />
                                                @error('result_lafc_11')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_stimulation_11') has-error @enderror">
                                                <input type="text" name="result_stimulation_11" class="form-control" value="{{ $test ? $test->result_stimulation_11 : old('result_stimulation_11') }}" />
                                                @error('result_stimulation_11')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_misc_11') has-error @enderror">
                                                <input type="text" name="result_misc_11" class="form-control" value="{{ $test ? $test->result_misc_11 : old('result_misc_11') }}" />
                                                @error('result_misc_11')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            12
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_date_12') has-error @enderror">
                                                <input type="date" name="result_date_12" class="form-control" value="{{ $test ? $test->result_date_12 : old('result_date_12') }}" />
                                                @error('result_date_12')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_cyc_day_12') has-error @enderror">
                                                <input type="text" name="result_cyc_day_12" class="form-control" value="{{ $test ? $test->result_cyc_day_12 : old('result_cyc_day_12') }}" />
                                                @error('result_cyc_day_12')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_stm_day_12') has-error @enderror">
                                                <input type="text" name="result_stm_day_12" class="form-control" value="{{ $test ? $test->result_stm_day_12 : old('result_stm_day_12') }}" />
                                                @error('result_stm_day_12')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_end_12') has-error @enderror">
                                                <input type="text" name="result_end_12" class="form-control" value="{{ $test ? $test->result_end_12 : old('result_end_12') }}" />
                                                @error('result_end_12')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_rafc_12') has-error @enderror">
                                                <input type="text" name="result_rafc_12" class="form-control" value="{{ $test ? $test->result_rafc_12 : old('result_rafc_12') }}" />
                                                @error('result_rafc_12')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_lafc_12') has-error @enderror">
                                                <input type="text" name="result_lafc_12" class="form-control" value="{{ $test ? $test->result_lafc_12 : old('result_lafc_12') }}" />
                                                @error('result_lafc_12')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_stimulation_12') has-error @enderror">
                                                <input type="text" name="result_stimulation_12" class="form-control" value="{{ $test ? $test->result_stimulation_12 : old('result_stimulation_12') }}" />
                                                @error('result_stimulation_12')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_misc_12') has-error @enderror">
                                                <input type="text" name="result_misc_12" class="form-control" value="{{ $test ? $test->result_misc_12 : old('result_misc_12') }}" />
                                                @error('result_misc_12')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            13
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_date_13') has-error @enderror">
                                                <input type="date" name="result_date_13" class="form-control" value="{{ $test ? $test->result_date_13 : old('result_date_13') }}" />
                                                @error('result_date_13')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_cyc_day_13') has-error @enderror">
                                                <input type="text" name="result_cyc_day_13" class="form-control" value="{{ $test ? $test->result_cyc_day_13 : old('result_cyc_day_13') }}" />
                                                @error('result_cyc_day_13')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_stm_day_13') has-error @enderror">
                                                <input type="text" name="result_stm_day_13" class="form-control" value="{{ $test ? $test->result_stm_day_13 : old('result_stm_day_13') }}" />
                                                @error('result_stm_day_13')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_end_13') has-error @enderror">
                                                <input type="text" name="result_end_13" class="form-control" value="{{ $test ? $test->result_end_13 : old('result_end_13') }}" />
                                                @error('result_end_13')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_rafc_13') has-error @enderror">
                                                <input type="text" name="result_rafc_13" class="form-control" value="{{ $test ? $test->result_rafc_13 : old('result_rafc_13') }}" />
                                                @error('result_rafc_13')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_lafc_13') has-error @enderror">
                                                <input type="text" name="result_lafc_13" class="form-control" value="{{ $test ? $test->result_lafc_13 : old('result_lafc_13') }}" />
                                                @error('result_lafc_13')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_stimulation_13') has-error @enderror">
                                                <input type="text" name="result_stimulation_13" class="form-control" value="{{ $test ? $test->result_stimulation_13 : old('result_stimulation_13') }}" />
                                                @error('result_stimulation_13')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_misc_13') has-error @enderror">
                                                <input type="text" name="result_misc_13" class="form-control" value="{{ $test ? $test->result_misc_13 : old('result_misc_13') }}" />
                                                @error('result_misc_13')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            14
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_date_14') has-error @enderror">
                                                <input type="date" name="result_date_14" class="form-control" value="{{ $test ? $test->result_date_14 : old('result_date_14') }}" />
                                                @error('result_date_14')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_cyc_day_14') has-error @enderror">
                                                <input type="text" name="result_cyc_day_14" class="form-control" value="{{ $test ? $test->result_cyc_day_14 : old('result_cyc_day_14') }}" />
                                                @error('result_cyc_day_14')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_stm_day_14') has-error @enderror">
                                                <input type="text" name="result_stm_day_14" class="form-control" value="{{ $test ? $test->result_stm_day_14 : old('result_stm_day_14') }}" />
                                                @error('result_stm_day_14')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_end_14') has-error @enderror">
                                                <input type="text" name="result_end_14" class="form-control" value="{{ $test ? $test->result_end_14 : old('result_end_14') }}" />
                                                @error('result_end_14')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_rafc_14') has-error @enderror">
                                                <input type="text" name="result_rafc_14" class="form-control" value="{{ $test ? $test->result_rafc_14 : old('result_rafc_14') }}" />
                                                @error('result_rafc_14')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_lafc_14') has-error @enderror">
                                                <input type="text" name="result_lafc_14" class="form-control" value="{{ $test ? $test->result_lafc_14 : old('result_lafc_14') }}" />
                                                @error('result_lafc_14')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_stimulation_14') has-error @enderror">
                                                <input type="text" name="result_stimulation_14" class="form-control" value="{{ $test ? $test->result_stimulation_14 : old('result_stimulation_14') }}" />
                                                @error('result_stimulation_14')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_misc_14') has-error @enderror">
                                                <input type="text" name="result_misc_14" class="form-control" value="{{ $test ? $test->result_misc_14 : old('result_misc_14') }}" />
                                                @error('result_misc_14')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            15
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_date_15') has-error @enderror">
                                                <input type="date" name="result_date_15" class="form-control" value="{{ $test ? $test->result_date_15 : old('result_date_15') }}" />
                                                @error('result_date_15')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_cyc_day_15') has-error @enderror">
                                                <input type="text" name="result_cyc_day_15" class="form-control" value="{{ $test ? $test->result_cyc_day_15 : old('result_cyc_day_15') }}" />
                                                @error('result_cyc_day_15')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_stm_day_15') has-error @enderror">
                                                <input type="text" name="result_stm_day_15" class="form-control" value="{{ $test ? $test->result_stm_day_15 : old('result_stm_day_15') }}" />
                                                @error('result_stm_day_15')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_end_15') has-error @enderror">
                                                <input type="text" name="result_end_15" class="form-control" value="{{ $test ? $test->result_end_15 : old('result_end_15') }}" />
                                                @error('result_end_15')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_rafc_15') has-error @enderror">
                                                <input type="text" name="result_rafc_15" class="form-control" value="{{ $test ? $test->result_rafc_15 : old('result_rafc_15') }}" />
                                                @error('result_rafc_15')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_lafc_15') has-error @enderror">
                                                <input type="text" name="result_lafc_15" class="form-control" value="{{ $test ? $test->result_lafc_15 : old('result_lafc_15') }}" />
                                                @error('result_lafc_15')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_stimulation_15') has-error @enderror">
                                                <input type="text" name="result_stimulation_15" class="form-control" value="{{ $test ? $test->result_stimulation_15 : old('result_stimulation_15') }}" />
                                                @error('result_stimulation_15')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_misc_15') has-error @enderror">
                                                <input type="text" name="result_misc_15" class="form-control" value="{{ $test ? $test->result_misc_15 : old('result_misc_15') }}" />
                                                @error('result_misc_15')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            16
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_date_16') has-error @enderror">
                                                <input type="date" name="result_date_16" class="form-control" value="{{ $test ? $test->result_date_16 : old('result_date_16') }}" />
                                                @error('result_date_16')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_cyc_day_16') has-error @enderror">
                                                <input type="text" name="result_cyc_day_16" class="form-control" value="{{ $test ? $test->result_cyc_day_16 : old('result_cyc_day_16') }}" />
                                                @error('result_cyc_day_16')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_stm_day_16') has-error @enderror">
                                                <input type="text" name="result_stm_day_16" class="form-control" value="{{ $test ? $test->result_stm_day_16 : old('result_stm_day_16') }}" />
                                                @error('result_stm_day_16')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_end_16') has-error @enderror">
                                                <input type="text" name="result_end_16" class="form-control" value="{{ $test ? $test->result_end_16 : old('result_end_16') }}" />
                                                @error('result_end_16')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_rafc_16') has-error @enderror">
                                                <input type="text" name="result_rafc_16" class="form-control" value="{{ $test ? $test->result_rafc_16 : old('result_rafc_16') }}" />
                                                @error('result_rafc_16')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_lafc_16') has-error @enderror">
                                                <input type="text" name="result_lafc_16" class="form-control" value="{{ $test ? $test->result_lafc_16 : old('result_lafc_16') }}" />
                                                @error('result_lafc_16')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_stimulation_16') has-error @enderror">
                                                <input type="text" name="result_stimulation_16" class="form-control" value="{{ $test ? $test->result_stimulation_16 : old('result_stimulation_16') }}" />
                                                @error('result_stimulation_16')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_misc_16') has-error @enderror">
                                                <input type="text" name="result_misc_16" class="form-control" value="{{ $test ? $test->result_misc_16 : old('result_misc_16') }}" />
                                                @error('result_misc_16')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group @error('wife_lmp_lh') has-error @enderror">
                            <label for="wife_lmp_lh">{{ __('LH') }}</label>
                            <input type="text" name="wife_lmp_lh" class="form-control" value="{{ $test ? $test->wife_lmp_lh : old('wife_lmp_lh') }}" />
                            @error('wife_lmp_lh')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group @error('wife_lmp_e2') has-error @enderror">
                            <label for="wife_lmp_e2">{{ __('E2') }}</label>
                            <input type="text" name="wife_lmp_e2" class="form-control" value="{{ $test ? $test->wife_lmp_e2 : old('wife_lmp_e2') }}" />
                            @error('wife_lmp_e2')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('wife_lmp_inj') has-error @enderror">
                            <label for="wife_lmp_inj">{{ __('Inj./ HCG / Trigger ') }}</label>
                            <input type="text" name="wife_lmp_inj" class="form-control" value="{{ $test ? $test->wife_lmp_inj : old('wife_lmp_inj') }}" />
                            @error('wife_lmp_inj')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('wife_lmp_dose') has-error @enderror">
                            <label for="wife_lmp_dose">{{ __('Dose') }}</label>
                            <input type="text" name="wife_lmp_dose" class="form-control" value="{{ $test ? $test->wife_lmp_dose : old('wife_lmp_dose') }}" />
                            @error('wife_lmp_dose')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('wife_lmp_hcg') has-error @enderror">
                            <label for="wife_lmp_hcg">{{ __('Date/ Time AM/PM') }}</label>
                            <input type="text" name="wife_lmp_hcg" class="form-control" value="{{ $test ? $test->wife_lmp_hcg : old('wife_lmp_hcg') }}" />
                            @error('wife_lmp_hcg')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('wife_lmp_hcg_day') has-error @enderror">
                            <label for="wife_lmp_hcg_day">{{ __('Day Of HCG') }}</label>
                            <input type="text" name="wife_lmp_hcg_day" class="form-control" value="{{ $test ? $test->wife_lmp_hcg_day : old('wife_lmp_hcg_day') }}" />
                            @error('wife_lmp_hcg_day')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group @error('wife_lmp_opu') has-error @enderror">
                            <label for="wife_lmp_opu">{{ __('OPU') }}</label>
                            <input type="text" name="wife_lmp_opu" class="form-control" value="{{ $test ? $test->wife_lmp_opu : old('wife_lmp_opu') }}" />
                            @error('wife_lmp_opu')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group @error('wife_lmp_ampm') has-error @enderror">
                            <label for="wife_lmp_ampm">{{ __('Time AM/PM') }}</label>
                            <input type="text" name="wife_lmp_ampm" class="form-control" value="{{ $test ? $test->wife_lmp_ampm : old('wife_lmp_ampm') }}" />
                            @error('wife_lmp_ampm')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group @error('sperm_source_folliciles_right') has-error @enderror">
                            <label for="sperm_source_folliciles_right">{{ __('Total No. of Follicles (Right)') }}</label>
                            <input type="text" name="sperm_source_folliciles_right" class="form-control" value="{{ $test ? $test->sperm_source_folliciles_right : old('sperm_source_folliciles_right') }}" />
                            @error('sperm_source_folliciles_right')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group @error('sperm_source_folliciles_left') has-error @enderror">
                            <label for="sperm_source_folliciles_left">{{ __('Total No. of Follicles (Left)') }}</label>
                            <input type="text" name="sperm_source_folliciles_left" class="form-control" value="{{ $test ? $test->sperm_source_folliciles_left : old('sperm_source_folliciles_left') }}" />
                            @error('sperm_source_folliciles_left')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group @error('sperm_source_folliciles_total') has-error @enderror">
                            <label for="sperm_source_folliciles_total">{{ __('Total No. of Follicles') }}</label>
                            <input type="text" name="sperm_source_folliciles_total" class="form-control" value="{{ $test ? $test->sperm_source_folliciles_total : old('sperm_source_folliciles_total') }}" />
                            @error('sperm_source_folliciles_total')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('sperm_source_ovum_right') has-error @enderror">
                            <label for="sperm_source_ovum_right">{{ __('Total No. of Ovum Retrieve (Right)') }}</label>
                            <input type="text" name="sperm_source_ovum_right" class="form-control" value="{{ $test ? $test->sperm_source_ovum_right : old('sperm_source_ovum_right') }}" />
                            @error('sperm_source_ovum_right')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('sperm_source_ovum_left') has-error @enderror">
                            <label for="sperm_source_ovum_left">{{ __('Total No. of Ovum Retrieve (Left)') }}</label>
                            <input type="text" name="sperm_source_ovum_left" class="form-control" value="{{ $test ? $test->sperm_source_ovum_left : old('sperm_source_ovum_left') }}" />
                            @error('sperm_source_ovum_left')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('sperm_source_ovum_pod') has-error @enderror">
                            <label for="sperm_source_ovum_pod">{{ __('Total No. of Ovum Retrieve (POD)') }}</label>
                            <input type="text" name="sperm_source_ovum_pod" class="form-control" value="{{ $test ? $test->sperm_source_ovum_pod : old('sperm_source_ovum_pod') }}" />
                            @error('sperm_source_ovum_pod')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('sperm_source_ovum_total') has-error @enderror">
                            <label for="sperm_source_ovum_total">{{ __('Total No. of Ovum Retrieve') }}</label>
                            <input type="text" name="sperm_source_ovum_total" class="form-control" value="{{ $test ? $test->sperm_source_ovum_total : old('sperm_source_ovum_total') }}" />
                            @error('sperm_source_ovum_total')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel box" id="oOCYTEQUALITYPanelOne">
        <div class="box-header">
            <h4 class="box-title">
                <a class="text-muted" data-toggle="collapse" data-parent="#oOCYTEQUALITYPanelOne" href="#oOCYTEQUALITYCollapseOne">
                    {{ __('OOCYTE QUALITY') }}
                </a>
            </h4>
        </div>
        <div id="oOCYTEQUALITYCollapseOne" class="panel-collapse collapse">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>{{ __('Maturation Stage.') }}</th>
                                        <th>{{ __('No. of Oocyte') }}</th>
                                        <th>{{ __('Remark any other') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="M2" readonly />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('oocyte_quality_1_no') has-error @enderror">
                                                <input type="text" name="oocyte_quality_1_no" class="form-control" value="{{ $test ? $test->oocyte_quality_1_no : old('oocyte_quality_1_no') }}" />
                                                @error('oocyte_quality_1_no')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('oocyte_quality_1_stage') has-error @enderror">
                                                <input type="text" name="oocyte_quality_1_stage" class="form-control" value="{{ $test ? $test->oocyte_quality_1_stage : old('oocyte_quality_1_stage') }}" />
                                                @error('oocyte_quality_1_stage')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="M1" readonly />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('oocyte_quality_2_no') has-error @enderror">
                                                <input type="text" name="oocyte_quality_2_no" class="form-control" value="{{ $test ? $test->oocyte_quality_2_no : old('oocyte_quality_2_no') }}" />
                                                @error('oocyte_quality_2_no')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('oocyte_quality_2_stage') has-error @enderror">
                                                <input type="text" name="oocyte_quality_2_stage" class="form-control" value="{{ $test ? $test->oocyte_quality_2_stage : old('oocyte_quality_2_stage') }}" />
                                                @error('oocyte_quality_2_stage')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="GV" readonly />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('oocyte_quality_3_no') has-error @enderror">
                                                <input type="text" name="oocyte_quality_3_no" class="form-control" value="{{ $test ? $test->oocyte_quality_3_no : old('oocyte_quality_3_no') }}" />
                                                @error('oocyte_quality_3_no')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('oocyte_quality_3_stage') has-error @enderror">
                                                <input type="text" name="oocyte_quality_3_stage" class="form-control" value="{{ $test ? $test->oocyte_quality_3_stage : old('oocyte_quality_3_stage') }}" />
                                                @error('oocyte_quality_3_stage')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="Other" readonly />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('oocyte_quality_4_no') has-error @enderror">
                                                <input type="text" name="oocyte_quality_4_no" class="form-control" value="{{ $test ? $test->oocyte_quality_4_no : old('oocyte_quality_4_no') }}" />
                                                @error('oocyte_quality_4_no')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('oocyte_quality_4_stage') has-error @enderror">
                                                <input type="text" name="oocyte_quality_4_stage" class="form-control" value="{{ $test ? $test->oocyte_quality_4_stage : old('oocyte_quality_4_stage') }}" />
                                                @error('oocyte_quality_4_stage')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="Total" readonly />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('oocyte_quality_5_no') has-error @enderror">
                                                <input type="text" name="oocyte_quality_5_no" class="form-control" value="{{ $test ? $test->oocyte_quality_5_no : old('oocyte_quality_5_no') }}" />
                                                @error('oocyte_quality_5_no')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('oocyte_quality_5_stage') has-error @enderror">
                                                <input type="text" name="oocyte_quality_5_stage" class="form-control" value="{{ $test ? $test->oocyte_quality_5_stage : old('oocyte_quality_5_stage') }}" />
                                                @error('oocyte_quality_5_stage')
                                                <span class="help-block">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel box" id="spermSourcePanelOne">
        <div class="box-header">
            <h4 class="box-title">
                <a class="text-muted" data-toggle="collapse" data-parent="#spermSourcePanelOne" href="#spermSourceCollapseOne">
                    {{ __('Sperm Source') }}
                </a>
            </h4>
        </div>
        <div id="spermSourceCollapseOne" class="panel-collapse collapse">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group @error('sperm_source_ejaculated') has-error @enderror">
                            <label for="sperm_source_ejaculated">{{ __('Ejaculated') }}</label>
                            <input type="text" name="sperm_source_ejaculated" class="form-control" value="{{ $test ? $test->sperm_source_ejaculated : old('sperm_source_ejaculated') }}" />
                            @error('sperm_source_ejaculated')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('sperm_source_donor') has-error @enderror">
                            <label for="sperm_source_donor">{{ __('Donor') }}</label>
                            <input type="text" name="sperm_source_donor" class="form-control" value="{{ $test ? $test->sperm_source_donor : old('sperm_source_donor') }}" />
                            @error('sperm_source_donor')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('sperm_source_pesa') has-error @enderror">
                            <label for="sperm_source_pesa">{{ __('PESA') }}</label>
                            <input type="text" name="sperm_source_pesa" class="form-control" value="{{ $test ? $test->sperm_source_pesa : old('sperm_source_pesa') }}" />
                            @error('sperm_source_pesa')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('sperm_source_cryo') has-error @enderror">
                            <label for="sperm_source_cryo">{{ __('Cryo') }}</label>
                            <input type="text" name="sperm_source_cryo" class="form-control" value="{{ $test ? $test->sperm_source_cryo : old('sperm_source_cryo') }}" />
                            @error('sperm_source_cryo')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('sperm_source_test') has-error @enderror">
                            <label for="sperm_source_test">{{ __('TESA') }}</label>
                            <input type="text" name="sperm_source_test" class="form-control" value="{{ $test ? $test->sperm_source_test : old('sperm_source_test') }}" />
                            @error('sperm_source_test')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('sperm_source_recovery') has-error @enderror">
                            <label for="sperm_source_recovery">{{ __('Recovery Checked') }}</label>
                            <input type="text" name="sperm_source_recovery" class="form-control" value="{{ $test ? $test->sperm_source_recovery : old('sperm_source_recovery') }}" />
                            @error('sperm_source_recovery')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('sperm_source_whom') has-error @enderror">
                            <label for="sperm_source_whom">{{ __('Whom') }}</label>
                            <input type="text" name="sperm_source_whom" class="form-control" value="{{ $test ? $test->sperm_source_whom : old('sperm_source_whom') }}" />
                            @error('sperm_source_whom')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('sperm_source_when') has-error @enderror">
                            <label for="sperm_source_when">{{ __('When') }}</label>
                            <input type="text" name="sperm_source_when" class="form-control" value="{{ $test ? $test->sperm_source_when : old('sperm_source_when') }}" />
                            @error('sperm_source_when')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>{{ __('Semen Analysis') }}</th>
                                <th>{{ __('Native') }}</th>
                                <th>{{ __('After Harvest') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="Volume" readonly>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('sa_volume_native') has-error @enderror">
                                        <input type="text" name="sa_volume_native" class="form-control" value="{{ $test ? $test->sa_volume_native : old('sa_volume_native') }}" />
                                        @error('sa_volume_native')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('sa_volume_ah') has-error @enderror">
                                        <input type="text" name="sa_volume_ah" class="form-control" value="{{ $test ? $test->sa_volume_ah : old('sa_volume_ah') }}" />
                                        @error('sa_volume_ah')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="Mucoid" readonly>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('sa_mucoid_native') has-error @enderror">
                                        <input type="text" name="sa_mucoid_native" class="form-control" value="{{ $test ? $test->sa_mucoid_native : old('sa_mucoid_native') }}" />
                                        @error('sa_mucoid_native')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('sa_mucoid_ah') has-error @enderror">
                                        <input type="text" name="sa_mucoid_ah" class="form-control" value="{{ $test ? $test->sa_mucoid_ah : old('sa_mucoid_ah') }}" />
                                        @error('sa_mucoid_ah')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="Sperm Count/ml" readonly>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('sa_sperm_count_native') has-error @enderror">
                                        <input type="text" name="sa_sperm_count_native" class="form-control" value="{{ $test ? $test->sa_sperm_count_native : old('sa_sperm_count_native') }}" />
                                        @error('sa_sperm_count_native')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('sa_sperm_count_ah') has-error @enderror">
                                        <input type="text" name="sa_sperm_count_ah" class="form-control" value="{{ $test ? $test->sa_sperm_count_ah : old('sa_sperm_count_ah') }}" />
                                        @error('sa_sperm_count_ah')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="Motility" readonly>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('sa_motility_native') has-error @enderror">
                                        <input type="text" name="sa_motility_native" class="form-control" value="{{ $test ? $test->sa_motility_native : old('sa_motility_native') }}" />
                                        @error('sa_motility_native')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('sa_motility_ah') has-error @enderror">
                                        <input type="text" name="sa_motility_ah" class="form-control" value="{{ $test ? $test->sa_motility_ah : old('sa_motility_ah') }}" />
                                        @error('sa_motility_ah')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="Grade" readonly>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('sa_grade_native') has-error @enderror">
                                        <select name="sa_grade_native" class="form-control">
                                            <option value="I" @if(($test && $test->sa_grade_native == "I") || (old('sa_grade_native') == "I")) selected @endif>I</option>
                                            <option value="II" @if(($test && $test->sa_grade_native == "II") || (old('sa_grade_native') == "II")) selected @endif>II</option>
                                            <option value="III" @if(($test && $test->sa_grade_native == "III") || (old('sa_grade_native') == "III")) selected @endif>III</option>
                                            <option value="IV" @if(($test && $test->sa_grade_native == "IV") || (old('sa_grade_native') == "IV")) selected @endif>IV</option>
                                        </select>
                                        @error('sa_grade_native')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('sa_grade_ah') has-error @enderror">
                                        <select name="sa_grade_ah" class="form-control">
                                            <option value="I" @if(($test && $test->sa_grade_ah == "I") || (old('sa_grade_ah') == "I")) selected @endif>I</option>
                                            <option value="II" @if(($test && $test->sa_grade_ah == "II") || (old('sa_grade_ah') == "II")) selected @endif>II</option>
                                            <option value="III" @if(($test && $test->sa_grade_ah == "III") || (old('sa_grade_ah') == "III")) selected @endif>III</option>
                                            <option value="IV" @if(($test && $test->sa_grade_ah == "IV") || (old('sa_grade_ah') == "IV")) selected @endif>IV</option>
                                        </select>
                                        @error('sa_grade_ah')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="Pus cells" readonly>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('sa_pus_cells_native') has-error @enderror">
                                        <input type="text" name="sa_pus_cells_native" class="form-control" value="{{ $test ? $test->sa_pus_cells_native : old('sa_pus_cells_native') }}" />
                                        @error('sa_pus_cells_native')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('sa_pus_cells_ah') has-error @enderror">
                                        <input type="text" name="sa_pus_cells_ah" class="form-control" value="{{ $test ? $test->sa_pus_cells_ah : old('sa_pus_cells_ah') }}" />
                                        @error('sa_pus_cells_ah')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="Immature cells" readonly>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('sa_immature_cells_native') has-error @enderror">
                                        <input type="text" name="sa_immature_cells_native" class="form-control" value="{{ $test ? $test->sa_immature_cells_native : old('sa_immature_cells_native') }}" />
                                        @error('sa_immature_cells_native')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('sa_immature_cells_ah') has-error @enderror">
                                        <input type="text" name="sa_immature_cells_ah" class="form-control" value="{{ $test ? $test->sa_immature_cells_ah : old('sa_immature_cells_ah') }}" />
                                        @error('sa_immature_cells_ah')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="Agglutination" readonly>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('sa_agglutination_native') has-error @enderror">
                                        <input type="text" name="sa_agglutination_native" class="form-control" value="{{ $test ? $test->sa_agglutination_native : old('sa_agglutination_native') }}" />
                                        @error('sa_agglutination_native')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('sa_agglutination_ah') has-error @enderror">
                                        <input type="text" name="sa_agglutination_ah" class="form-control" value="{{ $test ? $test->sa_agglutination_ah : old('sa_agglutination_ah') }}" />
                                        @error('sa_agglutination_ah')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="Granular Debris" readonly>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('sa_granular_debris_native') has-error @enderror">
                                        <input type="text" name="sa_granular_debris_native" class="form-control" value="{{ $test ? $test->sa_granular_debris_native : old('sa_granular_debris_native') }}" />
                                        @error('sa_granular_debris_native')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('sa_granular_debris_ah') has-error @enderror">
                                        <input type="text" name="sa_granular_debris_ah" class="form-control" value="{{ $test ? $test->sa_granular_debris_ah : old('sa_granular_debris_ah') }}" />
                                        @error('sa_granular_debris_ah')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="Insemination Time" readonly>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('sa_insemination_time_native') has-error @enderror">
                                        <input type="text" name="sa_insemination_time_native" class="form-control" value="{{ $test ? $test->sa_insemination_time_native : old('sa_insemination_time_native') }}" />
                                        @error('sa_insemination_time_native')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group @error('sa_insemination_time_ah') has-error @enderror">
                                        <input type="text" name="sa_insemination_time_ah" class="form-control" value="{{ $test ? $test->sa_insemination_time_ah : old('sa_insemination_time_ah') }}" />
                                        @error('sa_insemination_time_ah')
                                        <span class="help-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group @error('result_ivf') has-error @enderror">
                            <label for="result_ivf">{{ __('IVF') }}</label>
                            <input type="text" name="result_ivf" class="form-control" value="{{ $test ? $test->result_ivf : old('result_ivf') }}" />
                            @error('result_ivf')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group @error('result_icsi') has-error @enderror">
                            <label for="result_icsi">{{ __('ICSI') }}</label>
                            <input type="text" name="result_icsi" class="form-control" value="{{ $test ? $test->result_icsi : old('result_icsi') }}" />
                            @error('result_icsi')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-2 ivf-div">
                        <div class="form-group">
                            <label for="sa_no2pn_1">&nbsp;</label>
                            <input type="text" class="form-control" value="IVF Day 1" readonly>
                        </div>
                    </div>
                    <div class="col-md-3 ivf-div">
                        <div class="form-group @error('sa_no2pn_1') has-error @enderror">
                            <label for="sa_no2pn_1">{{ __('No.2 PN') }}</label>
                            <input type="text" name="sa_no2pn_1" class="form-control" value="{{ $test ? $test->sa_no2pn_1 : old('sa_no2pn_1') }}" />
                            @error('sa_no2pn_1')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3 ivf-div">
                        <div class="form-group @error('sa_2pn_1') has-error @enderror">
                            <label for="sa_2pn_1">{{ __('2PN') }}</label>
                            <input type="text" name="sa_2pn_1" class="form-control" value="{{ $test ? $test->sa_2pn_1 : old('sa_2pn_1') }}" />
                            @error('sa_2pn_1')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 ivf-div">
                        <div class="form-group @error('sa_max2pn_1') has-error @enderror">
                            <label for="sa_max2pn_1">{{ __('Discard') }}</label>
                            <input type="text" name="sa_max2pn_1" class="form-control" value="{{ $test ? $test->sa_max2pn_1 : old('sa_max2pn_1') }}" />
                            @error('sa_max2pn_1')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-2 icsi-div">
                        <div class="form-group">
                            <label for="sa_no2pn_1">&nbsp;</label>
                            <input type="text" class="form-control" value="ICSI Day 1" readonly>
                        </div>
                    </div>
                    <div class="col-md-3 icsi-div">
                        <div class="form-group @error('sa_no2pn_2') has-error @enderror">
                            <label for="sa_no2pn_2">{{ __('No.2 PN') }}</label>
                            <input type="text" name="sa_no2pn_2" class="form-control" value="{{ $test ? $test->sa_no2pn_2 : old('sa_no2pn_2') }}" />
                            @error('sa_no2pn_2')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3 icsi-div">
                        <div class="form-group @error('sa_2pn_2') has-error @enderror">
                            <label for="sa_2pn_2">{{ __('2PN') }}</label>
                            <input type="text" name="sa_2pn_2" class="form-control" value="{{ $test ? $test->sa_2pn_2 : old('sa_2pn_2') }}" />
                            @error('sa_2pn_2')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 icsi-div">
                        <div class="form-group @error('sa_max2pn_2') has-error @enderror">
                            <label for="sa_max2pn_2">{{ __('Discard') }}</label>
                            <input type="text" name="sa_max2pn_2" class="form-control" value="{{ $test ? $test->sa_max2pn_2 : old('sa_max2pn_2') }}" />
                            @error('sa_max2pn_2')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-2 ivf-div">
                        <div class="form-group">
                            <label for="sa_no2pn_1">&nbsp;</label>
                            <input type="text" class="form-control" value="IVF Day 2" readonly>
                        </div>
                    </div>
                    <div class="col-md-3 ivf-div">
                        <div class="form-group @error('sa_no2pn_1') has-error @enderror">
                            <label for="sa_no2pn_1">{{ __('No.2 PN ') }}</label>
                            <input type="text" name="sa_no2pn_1" class="form-control" value="{{ $test ? $test->sa_no2pn_1 : old('sa_no2pn_1') }}" />
                            @error('sa_no2pn_1')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3 ivf-div">
                        <div class="form-group @error('sa_2pn_1') has-error @enderror">
                            <label for="sa_2pn_1">{{ __('2PN') }}</label>
                            <input type="text" name="sa_2pn_1" class="form-control" value="{{ $test ? $test->sa_2pn_1 : old('sa_2pn_1') }}" />
                            @error('sa_2pn_1')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 ivf-div">
                        <div class="form-group @error('sa_max2pn_1') has-error @enderror">
                            <label for="sa_max2pn_1">{{ __('Discard') }}</label>
                            <input type="text" name="sa_max2pn_1" class="form-control" value="{{ $test ? $test->sa_max2pn_1 : old('sa_max2pn_1') }}" />
                            @error('sa_max2pn_1')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2 icsi-div">
                        <div class="form-group">
                            <label for="sa_no2pn_1">&nbsp;</label>
                            <input type="text" class="form-control" value="ICSI Day 2" readonly>
                        </div>
                    </div>
                    <div class="col-md-3 icsi-div">
                        <div class="form-group @error('sa_no2pn_2') has-error @enderror">
                            <label for="sa_no2pn_2">{{ __('No.2 PN') }}</label>
                            <input type="text" name="sa_no2pn_2" class="form-control" value="{{ $test ? $test->sa_no2pn_2 : old('sa_no2pn_2') }}" />
                            @error('sa_no2pn_2')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3 icsi-div">
                        <div class="form-group @error('sa_2pn_2') has-error @enderror">
                            <label for="sa_2pn_2">{{ __('2PN') }}</label>
                            <input type="text" name="sa_2pn_2" class="form-control" value="{{ $test ? $test->sa_2pn_2 : old('sa_2pn_2') }}" />
                            @error('sa_2pn_2')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 icsi-div">
                        <div class="form-group @error('sa_max2pn_2') has-error @enderror">
                            <label for="sa_max2pn_2">{{ __('Discard') }}</label>
                            <input type="text" name="sa_max2pn_2" class="form-control" value="{{ $test ? $test->sa_max2pn_2 : old('sa_max2pn_2') }}" />
                            @error('sa_max2pn_2')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-2 ivf-div">
                        <div class="form-group">
                            <label for="sa_no2pn_1">&nbsp;</label>
                            <input type="text" class="form-control" value="IVF Day 3" readonly>
                        </div>
                    </div>
                    <div class="col-md-3 ivf-div">
                        <div class="form-group @error('sa_no2pn_1') has-error @enderror">
                            <label for="sa_no2pn_1">{{ __('No.2 PN') }}</label>
                            <input type="text" name="sa_no2pn_1" class="form-control" value="{{ $test ? $test->sa_no2pn_1 : old('sa_no2pn_1') }}" />
                            @error('sa_no2pn_1')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3 ivf-div">
                        <div class="form-group @error('sa_2pn_1') has-error @enderror">
                            <label for="sa_2pn_1">{{ __('2PN') }}</label>
                            <input type="text" name="sa_2pn_1" class="form-control" value="{{ $test ? $test->sa_2pn_1 : old('sa_2pn_1') }}" />
                            @error('sa_2pn_1')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 ivf-div">
                        <div class="form-group @error('sa_max2pn_1') has-error @enderror">
                            <label for="sa_max2pn_1">{{ __('Discard') }}</label>
                            <input type="text" name="sa_max2pn_1" class="form-control" value="{{ $test ? $test->sa_max2pn_1 : old('sa_max2pn_1') }}" />
                            @error('sa_max2pn_1')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-2 icsi-div">
                        <div class="form-group">
                            <label for="sa_no2pn_1">&nbsp;</label>
                            <input type="text" class="form-control" value="ICSI Day 3" readonly>
                        </div>
                    </div>
                    <div class="col-md-3 icsi-div">
                        <div class="form-group @error('sa_no2pn_2') has-error @enderror">
                            <label for="sa_no2pn_2">{{ __('No.2 PN') }}</label>
                            <input type="text" name="sa_no2pn_2" class="form-control" value="{{ $test ? $test->sa_no2pn_2 : old('sa_no2pn_2') }}" />
                            @error('sa_no2pn_2')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3 icsi-div">
                        <div class="form-group @error('sa_2pn_2') has-error @enderror">
                            <label for="sa_2pn_2">{{ __('2PN') }}</label>
                            <input type="text" name="sa_2pn_2" class="form-control" value="{{ $test ? $test->sa_2pn_2 : old('sa_2pn_2') }}" />
                            @error('sa_2pn_2')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 icsi-div">
                        <div class="form-group @error('sa_max2pn_2') has-error @enderror">
                            <label for="sa_max2pn_2">{{ __('Discard') }}</label>
                            <input type="text" name="sa_max2pn_2" class="form-control" value="{{ $test ? $test->sa_max2pn_2 : old('sa_max2pn_2') }}" />
                            @error('sa_max2pn_2')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-2 ivf-div">
                        <div class="form-group">
                            <label for="sa_no2pn_1">&nbsp;</label>
                            <input type="text" class="form-control" value="IVF Day 4" readonly>
                        </div>
                    </div>
                    <div class="col-md-3 ivf-div">
                        <div class="form-group @error('sa_no2pn_1') has-error @enderror">
                            <label for="sa_no2pn_1">{{ __('No.2 PN') }}</label>
                            <input type="text" name="sa_no2pn_1" class="form-control" value="{{ $test ? $test->sa_no2pn_1 : old('sa_no2pn_1') }}" />
                            @error('sa_no2pn_1')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3 ivf-div">
                        <div class="form-group @error('sa_2pn_1') has-error @enderror">
                            <label for="sa_2pn_1">{{ __('2PN') }}</label>
                            <input type="text" name="sa_2pn_1" class="form-control" value="{{ $test ? $test->sa_2pn_1 : old('sa_2pn_1') }}" />
                            @error('sa_2pn_1')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 ivf-div">
                        <div class="form-group @error('sa_max2pn_1') has-error @enderror">
                            <label for="sa_max2pn_1">{{ __('Discard') }}</label>
                            <input type="text" name="sa_max2pn_1" class="form-control" value="{{ $test ? $test->sa_max2pn_1 : old('sa_max2pn_1') }}" />
                            @error('sa_max2pn_1')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-2 icsi-div">
                        <div class="form-group">
                            <label for="sa_no2pn_1">&nbsp;</label>
                            <input type="text" class="form-control" value="ICSI Day 4" readonly>
                        </div>
                    </div>
                    <div class="col-md-3 icsi-div">
                        <div class="form-group @error('sa_no2pn_2') has-error @enderror">
                            <label for="sa_no2pn_2">{{ __('No.2 PN') }}</label>
                            <input type="text" name="sa_no2pn_2" class="form-control" value="{{ $test ? $test->sa_no2pn_2 : old('sa_no2pn_2') }}" />
                            @error('sa_no2pn_2')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3 icsi-div">
                        <div class="form-group @error('sa_2pn_2') has-error @enderror">
                            <label for="sa_2pn_2">{{ __('2PN') }}</label>
                            <input type="text" name="sa_2pn_2" class="form-control" value="{{ $test ? $test->sa_2pn_2 : old('sa_2pn_2') }}" />
                            @error('sa_2pn_2')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 icsi-div">
                        <div class="form-group @error('sa_max2pn_2') has-error @enderror">
                            <label for="sa_max2pn_2">{{ __('Discard') }}</label>
                            <input type="text" name="sa_max2pn_2" class="form-control" value="{{ $test ? $test->sa_max2pn_2 : old('sa_max2pn_2') }}" />
                            @error('sa_max2pn_2')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-2 ivf-div">
                        <div class="form-group">
                            <label for="sa_no2pn_1">&nbsp;</label>
                            <input type="text" class="form-control" value="IVF Day 5" readonly>
                        </div>
                    </div>
                    <div class="col-md-3 ivf-div">
                        <div class="form-group @error('sa_no2pn_1') has-error @enderror">
                            <label for="sa_no2pn_1">{{ __('No.2 PN') }}</label>
                            <input type="text" name="sa_no2pn_1" class="form-control" value="{{ $test ? $test->sa_no2pn_1 : old('sa_no2pn_1') }}" />
                            @error('sa_no2pn_1')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3 ivf-div">
                        <div class="form-group @error('sa_2pn_1') has-error @enderror">
                            <label for="sa_2pn_1">{{ __('2PN') }}</label>
                            <input type="text" name="sa_2pn_1" class="form-control" value="{{ $test ? $test->sa_2pn_1 : old('sa_2pn_1') }}" />
                            @error('sa_2pn_1')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 ivf-div">
                        <div class="form-group @error('sa_max2pn_1') has-error @enderror">
                            <label for="sa_max2pn_1">{{ __('Discard') }}</label>
                            <input type="text" name="sa_max2pn_1" class="form-control" value="{{ $test ? $test->sa_max2pn_1 : old('sa_max2pn_1') }}" />
                            @error('sa_max2pn_1')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2 icsi-div">
                        <div class="form-group">
                            <label for="sa_no2pn_1">&nbsp;</label>
                            <input type="text" class="form-control" value="ICSI Day 5" readonly>
                        </div>
                    </div>
                    <div class="col-md-3 icsi-div">
                        <div class="form-group @error('sa_no2pn_2') has-error @enderror">
                            <label for="sa_no2pn_2">{{ __('No.2 PN') }}</label>
                            <input type="text" name="sa_no2pn_2" class="form-control" value="{{ $test ? $test->sa_no2pn_2 : old('sa_no2pn_2') }}" />
                            @error('sa_no2pn_2')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3 icsi-div">
                        <div class="form-group @error('sa_2pn_2') has-error @enderror">
                            <label for="sa_2pn_2">{{ __('2PN') }}</label>
                            <input type="text" name="sa_2pn_2" class="form-control" value="{{ $test ? $test->sa_2pn_2 : old('sa_2pn_2') }}" />
                            @error('sa_2pn_2')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 icsi-div">
                        <div class="form-group @error('sa_max2pn_2') has-error @enderror">
                            <label for="sa_max2pn_2">{{ __('Discard') }}</label>
                            <input type="text" name="sa_max2pn_2" class="form-control" value="{{ $test ? $test->sa_max2pn_2 : old('sa_max2pn_2') }}" />
                            @error('sa_max2pn_2')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel box" id="embryoTransferPanelOne">
        <div class="box-header">
            <h4 class="box-title">
                <a class="text-muted" data-toggle="collapse" data-parent="#embryoTransferPanelOne" href="#embryoTransferCollapseOne">
                    {{ __('Embryo Transfer') }}
                </a>
            </h4>
        </div>
        <div id="embryoTransferCollapseOne" class="panel-collapse collapse">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group @error('et_date_of_et') has-error @enderror">
                            <label for="et_date_of_et">{{ __('Date of ET') }}</label>
                            <input type="date" name="et_date_of_et" class="form-control" value="{{ $test ? $test->et_date_of_et : old('et_date_of_et') }}" />
                            @error('et_date_of_et')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group @error('et_time_of_et') has-error @enderror">
                            <label for="et_time_of_et">{{ __('Time of ET') }}</label>
                            <input type="time" name="et_time_of_et" class="form-control" value="{{ $test ? $test->et_time_of_et : old('et_time_of_et') }}" />
                            @error('et_time_of_et')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group @error('et_endometrium_t') has-error @enderror">
                            <label for="et_endometrium_t">{{ __('Endometrium Thickness') }}</label>
                            <input type="text" name="et_endometrium_t" class="form-control" value="{{ $test ? $test->et_endometrium_t : old('et_endometrium_t') }}" />
                            @error('et_endometrium_t')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group @error('et_cathetar') has-error @enderror">
                            <label for="et_cathetar">{{ __('ET Cathetar used') }}</label>
                            <input type="text" name="et_cathetar" class="form-control" value="{{ $test ? $test->et_cathetar : old('et_cathetar') }}" />
                            @error('et_cathetar')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group @error('et_transfer_stage') has-error @enderror">
                            <label for="et_transfer_stage">{{ __('Total No. of Embryo Transfer & Stage') }}</label>
                            <input type="text" name="et_transfer_stage" class="form-control" value="{{ $test ? $test->et_transfer_stage : old('et_transfer_stage') }}" />
                            @error('et_transfer_stage')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group @error('et_embryo_transfer') has-error @enderror">
                            <label for="et_embryo_transfer">{{ __('Embryo Transfer') }}</label>
                            <select name="et_embryo_transfer" class="form-control">
                                <option value="good" @if(($test && $test->et_embryo_transfer == "good") || (old('et_embryo_transfer') == "good")) selected @endif>{{ __('Good') }}</option>
                                <option value="difficult" @if(($test && $test->et_embryo_transfer == "difficult") || (old('et_embryo_transfer') == "difficult")) selected @endif>{{ __('Difficult') }}</option>
                                <option value="no_satisfactory" @if(($test && $test->et_embryo_transfer == "no_satisfactory") || (old('et_embryo_transfer') == "no_satisfactory")) selected @endif>{{ __('No Satisfactory') }}</option>
                            </select>
                            @error('et_embryo_transfer')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel box" id="blastocystTransferPanelOne">
        <div class="box-header">
            <h4 class="box-title">
                <a class="text-muted" data-toggle="collapse" data-parent="#blastocystTransferPanelOne" href="#blastocystTransferCollapseOne">
                    {{ __('Blastocyst Transfer') }}
                </a>
            </h4>
        </div>
        <div id="blastocystTransferCollapseOne" class="panel-collapse collapse">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group @error('bt_date_of_et') has-error @enderror">
                            <label for="bt_date_of_et">{{ __('Date of ET') }}</label>
                            <input type="date" name="bt_date_of_et" class="form-control" value="{{ $test ? $test->bt_date_of_et : old('bt_date_of_et') }}" />
                            @error('bt_date_of_et')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group @error('bt_time_of_et') has-error @enderror">
                            <label for="bt_time_of_et">{{ __('Time of ET') }}</label>
                            <input type="time" name="bt_time_of_et" class="form-control" value="{{ $test ? $test->bt_time_of_et : old('bt_time_of_et') }}" />
                            @error('bt_time_of_et')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group @error('bt_endometrium_t') has-error @enderror">
                            <label for="bt_endometrium_t">{{ __('Endometrium Thickness') }}</label>
                            <input type="text" name="bt_endometrium_t" class="form-control" value="{{ $test ? $test->bt_endometrium_t : old('bt_endometrium_t') }}" />
                            @error('bt_endometrium_t')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group @error('bt_cathetar') has-error @enderror">
                            <label for="bt_cathetar">{{ __('BT Cathetar used') }}</label>
                            <input type="text" name="bt_cathetar" class="form-control" value="{{ $test ? $test->bt_cathetar : old('bt_cathetar') }}" />
                            @error('bt_cathetar')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group @error('bt_transfer_stage') has-error @enderror">
                            <label for="bt_transfer_stage">{{ __('Total No. of Blastocyst Transfer & Stage') }}</label>
                            <input type="text" name="bt_transfer_stage" class="form-control" value="{{ $test ? $test->bt_transfer_stage : old('bt_transfer_stage') }}" />
                            @error('bt_transfer_stage')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group @error('bt_embryo_transfer') has-error @enderror">
                            <label for="bt_embryo_transfer">{{ __('Blastocyst Transfer') }}</label>
                            <select name="bt_embryo_transfer" class="form-control">
                                <option value="good" @if(($test && $test->bt_embryo_transfer == "good") || (old('bt_embryo_transfer') == "good")) selected @endif>{{ __('Good') }}</option>
                                <option value="difficult" @if(($test && $test->bt_embryo_transfer == "difficult") || (old('bt_embryo_transfer') == "difficult")) selected @endif>{{ __('Difficult') }}</option>
                                <option value="no_satisfactory" @if(($test && $test->bt_embryo_transfer == "no_satisfactory") || (old('bt_embryo_transfer') == "no_satisfactory")) selected @endif>{{ __('No Satisfactory') }}</option>
                            </select>
                            @error('bt_embryo_transfer')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel box" id="frozenPanelOne">
        <div class="box-header">
            <h4 class="box-title">
                <a class="text-muted" data-toggle="collapse" data-parent="#frozenPanelOne" href="#frozenCollapseOne">
                    {{ __('Frozen') }}
                </a>
            </h4>
        </div>
        <div id="frozenCollapseOne" class="panel-collapse collapse">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group @error('frozen_stage') has-error @enderror">
                            <label for="frozen_stage">{{ __('No. of Embryo frozen & stage') }}</label>
                            <input type="text" name="frozen_stage" class="form-control" value="{{ $test ? $test->frozen_stage : old('frozen_stage') }}" />
                            @error('frozen_stage')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('frozen_blastocyst') has-error @enderror">
                            <label for="frozen_blastocyst">{{ __('No. of Blastocyst frozen') }}</label>
                            <input type="text" name="frozen_blastocyst" class="form-control" value="{{ $test ? $test->frozen_blastocyst : old('frozen_blastocyst') }}" />
                            @error('frozen_blastocyst')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('frozen_embryo_datetime') has-error @enderror">
                            <label for="frozen_embryo_datetime">{{ __('Date & Time of Embryo freezing') }}</label>
                            <input type="text" name="frozen_embryo_datetime" class="form-control" value="{{ $test ? $test->frozen_embryo_datetime : old('frozen_embryo_datetime') }}" />
                            @error('frozen_embryo_datetime')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('frozen_blastocyst_datetime') has-error @enderror">
                            <label for="frozen_blastocyst_datetime">{{ __('Date & Time of Blastocyst freezing') }}</label>
                            <input type="text" name="frozen_blastocyst_datetime" class="form-control" value="{{ $test ? $test->frozen_blastocyst_datetime : old('frozen_blastocyst_datetime') }}" />
                            @error('frozen_blastocyst_datetime')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('frozen_straws') has-error @enderror">
                            <label for="frozen_straws">{{ __('No. of Straws used') }}</label>
                            <input type="text" name="frozen_straws" class="form-control" value="{{ $test ? $test->frozen_straws : old('frozen_straws') }}" />
                            @error('frozen_straws')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('frozen_mark') has-error @enderror">
                            <label for="frozen_mark">{{ __('Colour Code & Mark') }}</label>
                            <input type="text" name="frozen_mark" class="form-control" value="{{ $test ? $test->frozen_mark : old('frozen_mark') }}" />
                            @error('frozen_mark')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('frozen_plastic_colour') has-error @enderror">
                            <label for="frozen_plastic_colour">{{ __('Globlet Colour') }}</label>
                            <input type="text" name="frozen_plastic_colour" class="form-control" value="{{ $test ? $test->frozen_plastic_colour : old('frozen_plastic_colour') }}" />
                            @error('frozen_plastic_colour')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('frozen_ln2') has-error @enderror">
                            <label for="frozen_ln2">Con. No. in L.N2</label>
                            <input type="text" name="frozen_ln2" class="form-control" value="{{ $test ? $test->frozen_ln2 : old('frozen_ln2') }}" />
                            @error('frozen_ln2')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <!-- Cylinder No Add input type -->
                </div>
            </div>
        </div>
    </div>
    <div class="panel box" id="thawingPanelOne">
        <div class="box-header">
            <h4 class="box-title">
                <a class="text-muted" data-toggle="collapse" data-parent="#thawingPanelOne" href="#thawingCollapseOne">
                    {{ __('Thawing') }}
                </a>
            </h4>
        </div>
        <div id="thawingCollapseOne" class="panel-collapse collapse">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group @error('thawing_date_of_et') has-error @enderror">
                            <label for="thawing_date_of_et">{{ __('Date of thow') }}</label>
                            <input type="date" name="thawing_date_of_et" class="form-control" value="{{ $test ? $test->thawing_date_of_et : old('thawing_date_of_et') }}" />
                            @error('thawing_date_of_et')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group @error('thawing_time_of_et') has-error @enderror">
                            <label for="thawing_time_of_et">{{ __('Time of ET') }}</label>
                            <input type="time" name="thawing_time_of_et" class="form-control" value="{{ $test ? $test->thawing_time_of_et : old('thawing_time_of_et') }}" />
                            @error('thawing_time_of_et')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group @error('thawing_endometrium_t') has-error @enderror">
                            <label for="thawing_endometrium_t">{{ __('Endometrium Thickness') }}</label>
                            <input type="text" name="thawing_endometrium_t" class="form-control" value="{{ $test ? $test->thawing_endometrium_t : old('thawing_endometrium_t') }}" />
                            @error('thawing_endometrium_t')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group @error('thawing_cathetar') has-error @enderror">
                            <label for="thawing_cathetar">{{ __('ET Cathetar used') }}</label>
                            <input type="text" name="thawing_cathetar" class="form-control" value="{{ $test ? $test->thawing_cathetar : old('thawing_cathetar') }}" />
                            @error('thawing_cathetar')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group @error('thawing_transfer_stage') has-error @enderror">
                            <label for="thawing_transfer_stage">{{ __('Total No. of Embryo Transfer & Stage') }}</label>
                            <input type="text" name="thawing_transfer_stage" class="form-control" value="{{ $test ? $test->thawing_transfer_stage : old('thawing_transfer_stage') }}" />
                            @error('thawing_transfer_stage')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group @error('thawing_embryo_transfer') has-error @enderror">
                            <label for="thawing_embryo_transfer">{{ __('Embryo Transfer') }}</label>
                            <select name="thawing_embryo_transfer" class="form-control">
                                <option value="good" @if(($test && $test->thawing_embryo_transfer == "good") || (old('thawing_embryo_transfer') == "good")) selected @endif>{{ __('Good') }}</option>
                                <option value="difficult" @if(($test && $test->thawing_embryo_transfer == "difficult") || (old('thawing_embryo_transfer') == "difficult")) selected @endif>{{ __('Difficult') }}</option>
                                <option value="no_satisfactory" @if(($test && $test->thawing_embryo_transfer == "no_satisfactory") || (old('thawing_embryo_transfer') == "no_satisfactory")) selected @endif>{{ __('No Satisfactory') }}</option>
                            </select>
                            @error('thawing_embryo_transfer')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group @error('result_eudate') has-error @enderror">
                            <label for="result_eudate">{{ __('F/U Date') }}</label>
                            <input type="text" name="result_eudate" class="form-control" value="{{ $test ? $test->result_eudate : old('result_eudate') }}" />
                            @error('result_eudate')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group @error('result_bhcg') has-error @enderror">
                            <label for="result_bhcg">{{ __('B-HCG Value') }}</label>
                            <input type="text" name="result_bhcg" class="form-control" value="{{ $test ? $test->result_bhcg : old('result_bhcg') }}" />
                            @error('result_bhcg')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group @error('result_semen_cryo') has-error @enderror">
                            <label for="result_semen_cryo">{{ __('Result') }}</label>
                            <input type="text" name="result_semen_cryo" class="form-control" value="{{ $test ? $test->result_semen_cryo : old('result_semen_cryo') }}" />
                            @error('result_semen_cryo')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">{{ $test ? __('Update') : __('Submit') }}</button>
    </div>
</form>

@if ($test && $history)
<x-history-model :histories="$history" test="Infertility" />
@endif