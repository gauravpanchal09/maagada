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
        <div class="box-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="p_married_year">{{ __('Married Year') }}</label>
                        <span class="form-control">{{ $report->p_married_year ?: 'N/A' }}</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="p_ttc">{{ __('Trying to conceive') }}</label>
                        <span class="form-control">{{ $report->p_ttc ?: 'N/A' }}</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="p_ttc_year">{{ __('Year') }}</label>
                        <span class="form-control">{{ $report->p_ttc_year ?: 'N/A' }}</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="p_toi">{{ __('Type of infertility') }}</label>
                        <span class="form-control">{{ $report->p_toi ?: 'N/A' }}</span>
                    </div>
                </div>
            </div>
            <fieldset>
                <legend>{{ __('Previous Contraception') }}</legend>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="pc_method">{{ __('Method') }}</label>
                            <span class="form-control">{{ $report->pc_method ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="pc_duration_year">{{ __('Duration year') }}</label>
                            <span class="form-control">{{ $report->pc_duration_year ?: 'N/A' }}</span>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{{ __('Method History') }}</legend>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="mh_menarchat">{{ __('Menarch at') }}</label>
                            <span class="form-control">{{ $report->mh_menarchat ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="mh_year">{{ __('Year') }}</label>
                            <span class="form-control">{{ $report->mh_year ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="mh_previous_cycle">{{ __('Previous cycle') }}</label>
                            <span class="form-control">{{ $report->mh_previous_cycle ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="mh_present_cycle">{{ __('Present cycle') }}</label>
                            <span class="form-control">{{ $report->mh_present_cycle ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="mh_lmp">{{ __('L.M.P') }}</label>
                            <span class="form-control">{{ $report->mh_lmp ?: 'N/A' }}</span>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{{ __('Obsteric History') }}</legend>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="oh_delivery">{{ __('Delivery') }}</label>
                            <span class="form-control">{{ $report->oh_delivery ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="oh_miscarriage">{{ __('Miscarriage') }}</label>
                            <span class="form-control">{{ $report->oh_miscarriage ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="oh_termination">{{ __('Termination') }}</label>
                            <span class="form-control">{{ $report->oh_termination ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="oh_pgti">{{ __('Previous genital tract infection') }}</label>
                            <span class="form-control">{{ $report->oh_pgti ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="oh_pa">{{ __('Previous abdominal / Gynaecological surgery') }}</label>
                            <span class="form-control">{{ $report->oh_pa ?: 'N/A' }}</span>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{{ __('Previous Medical History') }}</legend>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="pmh_thyroid">{{ __('Thyroid') }}</label>
                            <span class="form-control">{{ $report->pmh_thyroid ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="pmh_tuberculosis">{{ __('Tuberculosis') }}</label>
                            <span class="form-control">{{ $report->pmh_tuberculosis ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="pmh_hypertension">{{ __('Hypertension') }}</label>
                            <span class="form-control">{{ $report->pmh_hypertension ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="pmh_diabetes">{{ __('Diabetes') }}</label>
                            <span class="form-control">{{ $report->pmh_diabetes ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="pmh_other">{{ __('Other') }}</label>
                            <span class="form-control">{{ $report->pmh_other ?: 'N/A' }}</span>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{{ __('Significant Family History') }}</legend>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="sfh_wife">{{ __('Wife') }}</label>
                            <span class="form-control">{{ $report->sfh_wife ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="sfh_husband">{{ __('Husband') }}</label>
                            <span class="form-control">{{ $report->sfh_husband ?: 'N/A' }}</span>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{{ __('Examination') }}</legend>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="eve_stature">{{ __('Stature') }}</label>
                            <span class="form-control">{{ $report->eve_stature ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="eve_pulse">{{ __('Pulse') }}</label>
                            <span class="form-control">{{ $report->eve_pulse ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="eve_height">{{ __('Height') }}</label>
                            <span class="form-control">{{ $report->eve_height ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="eve_weight">{{ __('Weight') }}</label>
                            <span class="form-control">{{ $report->eve_weight ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="eve_bp">{{ __('B.P') }}</label>
                            <span class="form-control">{{ $report->eve_bp ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="eve_bmi">{{ __('BMI') }}</label>
                            <span class="form-control">{{ $report->eve_bmi ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="eve_anaemia">{{ __('Anaemia') }}</label>
                            <span class="form-control">{{ $report->eve_anaemia ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="eve_hyriod">{{ __('Thyriod') }}</label>
                            <span class="form-control">{{ $report->eve_hyriod ?: 'N/A' }}</span>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="eve_hirsutism">{{ __('Hirsutism') }}</label>
                            <span class="form-control">{{ $report->eve_hirsutism ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="eve_face">{{ __('Face') }}</label>
                            <span class="form-control">{{ $report->eve_face ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="eve_breast">{{ __('Breast') }}</label>
                            <span class="form-control">{{ $report->eve_breast ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="eve_other">{{ __('Other') }}</label>
                            <span class="form-control">{{ $report->eve_other ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="eve_cvs">{{ __('C.V.S') }}</label>
                            <span class="form-control">{{ $report->eve_cvs ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="eve_rs">{{ __('R.S') }}</label>
                            <span class="form-control">{{ $report->eve_rs ?: 'N/A' }}</span>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="eve_sec_sex_character">{{ __('Sec. Sex Character') }}</label>
                            <span class="form-control">{{ $report->eve_sec_sex_character ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="eve_breast2">{{ __('Breast') }}</label>
                            <span class="form-control">{{ $report->eve_breast2 ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="eve_public_hair">{{ __('Public hair') }}</label>
                            <span class="form-control">{{ $report->eve_public_hair ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="eve_axillary_hairs">{{ __('Axillary hairs') }}</label>
                            <span class="form-control">{{ $report->eve_axillary_hairs ?: 'N/A' }}</span>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{{ __('Abdomainal Examination') }}</legend>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="ea_stature"></label>
                            <span class="form-control">{{ $report->ea_stature ?: 'N/A' }}</span>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{{ __('Pelvic Examination') }}</legend>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="ep_ps">{{ __('PS') }}</label>
                            <span class="form-control">{{ $report->ep_ps ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="ep_vulva">{{ __('Vulva') }}</label>
                            <span class="form-control">{{ $report->ep_vulva ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="ep_pv">{{ __('PV') }}</label>
                            <span class="form-control">{{ $report->ep_pv ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="ep_veg">{{ __('Vagina') }}</label>
                            <span class="form-control">{{ $report->ep_veg ?: 'N/A' }}</span>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{{ __('Treatment Received') }}</legend>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="tr_year">{{ __('Year') }}</label>
                            <span class="form-control">{{ $report->tr_year ?: 'N/A' }}</span>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend><strong>{{ __('Husband') }}</strong></legend>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="husband_dob">{{ __('Date of birth') }}</label>
                            <span class="form-control">{{ $report->husband_dob ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="husband_occupation">{{ __('Occupation') }}</label>
                            <span class="form-control">{{ $report->husband_occupation ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="husband_married_previously">{{ __('Married Previously') }}</label>
                            <span class="form-control">{{ $report->husband_married_previously ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="husband_age">{{ __('Age') }}</label>
                            <span class="form-control">{{ $report->husband_age ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="husband_children">{{ __('Children') }}</label>
                            <span class="form-control">{{ $report->husband_children ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="husband_coitus_frequency">{{ __('Coitus frequency') }}</label>
                            <span class="form-control">{{ $report->husband_coitus_frequency ?: 'N/A' }}</span>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="husband_exection">{{ __('Exection') }}</label>
                            <span class="form-control">{{ $report->husband_exection ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="husband_ejaculation">{{ __('Ejaculation') }}</label>
                            <span class="form-control">{{ $report->husband_ejaculation ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="husband_orgasm">{{ __('Orgasm') }}</label>
                            <span class="form-control">{{ $report->husband_orgasm ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="husband_drugs">{{ __('Drugs') }}</label>
                            <span class="form-control">{{ $report->husband_drugs ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="husband_smoking">{{ __('Smoking') }}</label>
                            <span class="form-control">{{ $report->husband_smoking ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="husband_alcohol">{{ __('Alcohol') }}</label>
                            <span class="form-control">{{ $report->husband_alcohol ?: 'N/A' }}</span>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{{ __('Previous Medical History') }}</legend>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="husband_pmh_mumps">{{ __('Mumps') }}</label>
                            <span class="form-control">{{ $report->husband_pmh_mumps ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="husband_pmh_kochs">{{ __("Koch's") }}</label>
                            <span class="form-control">{{ $report->husband_pmh_kochs ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="husband_pmh_diabetes">{{ __('Diabetes') }}</label>
                            <span class="form-control">{{ $report->husband_pmh_diabetes ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="husband_pmh_hypertension">{{ __('Hypertension') }}</label>
                            <span class="form-control">{{ $report->husband_pmh_hypertension ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="husband_pmh_previous_sergery">{{ __('Previous Sergery') }}</label>
                            <span class="form-control">{{ $report->husband_pmh_previous_sergery ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="husband_pmh_examination">{{ __('Examination') }}</label>
                            <span class="form-control">{{ $report->husband_pmh_examination ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="husband_pmh_stature">{{ __('Stature') }}</label>
                            <span class="form-control">{{ $report->husband_pmh_stature ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="husband_pmh_bp">{{ __('B.P') }}</label>
                            <span class="form-control">{{ $report->husband_pmh_bp ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="husband_pmh_sec_sex">{{ __('Sec. Sex Character') }}</label>
                            <span class="form-control">{{ $report->husband_pmh_sec_sex ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="husband_pmh_genital_examination">{{ __('Genital Examination') }}</label>
                            <span class="form-control">{{ $report->husband_pmh_genital_examination ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="husband_semon_analysic">{{ __('Semen analysis') }}</label>
                            <span class="form-control">{{ $report->husband_semon_analysic ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="husband_testicular_biospy">{{ __('Testicular Biospy') }}</label>
                            <span class="form-control">{{ $report->husband_testicular_biospy ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group @error('husband_other_investigationq') has-error @enderror">
                            <label for="husband_other_investigationq">{{ __('Other Investigation') }}</label>
                            <span class="form-control">{{ $report->husband_other_investigationq ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group @error('husband_te_advised') has-error @enderror">
                            <label for="husband_te_advised">{{ __('Treatment Advised') }}</label>
                            <span class="form-control">{{ $report->husband_te_advised ?: 'N/A' }}</span>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{{ __('Investigations') }}</legend>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="husband_i_cbc">{{ __('CBC') }}</label>
                            <span class="form-control">{{ $report->husband_i_cbc ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="husband_i_hb">{{ __('HB') }}</label>
                            <span class="form-control">{{ $report->husband_i_hb ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="husband_i_td">{{ __('T & D') }}</label>
                            <span class="form-control">{{ $report->husband_i_td ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="husband_i_esr">{{ __('ESR') }}</label>
                            <span class="form-control">{{ $report->husband_i_esr ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="husband_i_abo">{{ __('ABO-RH') }}</label>
                            <span class="form-control">{{ $report->husband_i_abo ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="husband_i_hiv">{{ __('HIV I & II') }}</label>
                            <span class="form-control">{{ $report->husband_i_hiv ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="husband_i_blood_sugar">{{ __('Blood Sugar') }}</label>
                            <span class="form-control">{{ $report->husband_i_blood_sugar ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="husband_i_hbsag">{{ __('HbsAg') }}</label>
                            <span class="form-control">{{ $report->husband_i_hbsag ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="husband_i_urine">{{ __('Urine') }}</label>
                            <span class="form-control">{{ $report->husband_i_urine ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="husband_i_hcv">{{ __('HCV') }}</label>
                            <span class="form-control">{{ $report->husband_i_hcv ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="husband_i_semen_culture">{{ __('Semen Culture') }}</label>
                            <span class="form-control">{{ $report->husband_i_semen_culture ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="husband_i_vdrl">{{ __('VDRL') }}</label>
                            <span class="form-control">{{ $report->husband_i_vdrl ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('husband_i_sperm') has-error @enderror">
                            <label for="husband_i_sperm">{{ __('Sperm Antibodies') }}</label>
                            <span class="form-control">{{ $report->husband_i_sperm ?: 'N/A' }}</span>
                        </div>
                    </div>
                </div>
                <legend>{{ __('Wife') }}</legend>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inv_hysteroscopy">{{ __('Hysteroscopy') }}</label>
                            <span class="form-control">{{ $report->inv_hysteroscopy ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inv_laparoscopy">{{ __('Laparoscopy') }}</label>
                            <span class="form-control">{{ $report->inv_laparoscopy ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inv_images">{{ __('Images') }}</label>
                            @if ($report->inv_images)
                                <div class="row">
                                    @foreach($report->inv_images as $index => $file)
                                        <div class="col-md-6">
                                            <button data-href="{{ route('in.deleteImage', ['id' => $report->id, 'index' => $index]) }}" class="btn btn-remove pull-right">
                                                <i class="fa fa-times"></i>
                                            </button>
                                            <img src="{{ route('in.displayImage', ['id' => $report->id, 'index' => $index]) }}" class="img-thumbnail" />
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <span class="form-control">{{ __('N/A') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inv_pcr_for_tb">{{ __('PCR for TB') }}</label>
                            <span class="form-control">{{ $report->inv_pcr_for_tb ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="inv_hysterosalpingography">{{ __('HSG (Hysterosalpingography)') }}</label>
                            <span class="form-control">{{ $report->inv_hysterosalpingography ?: 'N/A' }}</span>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{{ __('Hormonal Estimation') }}</legend>
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
                                        <input type="text" class="form-control" value="AMH" readonly/>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_anh_date ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_anh_day_of_cycle ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_anh_result ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_anh_normal_range ?: 'N/A' }}</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="Prolaction" readonly/>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_prolaction_date ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_prolaction_day_of_cycle ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_prolaction_result ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_prolaction_normal_range ?: 'N/A' }}</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="L.H" readonly/>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_lh_date ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_lh_day_of_cycle ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_lh_result ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_lh_normal_range ?: 'N/A' }}</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="F.S.H" readonly/>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_fsh_date ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_fsh_day_of_cycle ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_fsh_result ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_fsh_normal_range ?: 'N/A' }}</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="Testosterone" readonly/>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_testosterone_date ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_testosterone_day_of_cycle ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_testosterone_result ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_testosterone_normal_range ?: 'N/A' }}</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="Oestrogen" readonly/>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_oestrogen_date ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_oestrogen_day_of_cycle ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_oestrogen_result ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_oestrogen_normal_range ?: 'N/A' }}</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="Progesterone" readonly/>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_progesterone_date ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_progesterone_day_of_cycle ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_progesterone_result ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_progesterone_normal_range ?: 'N/A' }}</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="DHEAS" readonly/>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_dheas_date ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_dheas_day_of_cycle ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_dheas_result ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_dheas_normal_range ?: 'N/A' }}</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="Cortisol" readonly/>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_cortisol_date ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_cortisol_day_of_cycle ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_cortisol_result ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_cortisol_normal_range ?: 'N/A' }}</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="T3" readonly/>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_t3_date ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_t3_day_of_cycle ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_t3_result ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_t3_normal_range ?: 'N/A' }}</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="T4" readonly/>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_t4_date ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_t4_day_of_cycle ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_t4_result ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_t4_normal_range ?: 'N/A' }}</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="TSH" readonly/>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_tsh_date ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_tsh_day_of_cycle ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_tsh_result ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_tsh_normal_range ?: 'N/A' }}</span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>Antibodies against husband's sperms:</p>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="wife_hea_date">{{ __('Date') }}</label>
                            <span class="form-control">{{ $report->wife_hea_date ?: 'N/A' }}</span>
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
                                                <input type="text" name="wife_hea_toxoplasma" class="form-control" value="Toxoplasma" readonly />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_hea_toxoplasma_g ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_hea_toxoplasma_m ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="wife_hea_rubella" class="form-control" value="Rubella" readonly />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_hea_rubella_g ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_hea_rubella_m ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="wife_hea_cmv" class="form-control" value="C.M.V" readonly />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_hea_cmv_g ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_hea_cmv_m ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="wife_hea_herpes" class="form-control" value="Herpes" readonly />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_hea_herpes_g ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_hea_herpes_m ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="wife_hea_aca" class="form-control" value="ACA" readonly />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_hea_aca_g ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_hea_aca_m ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="wife_hea_apa" class="form-control" value="APA" readonly />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_hea_apa_g ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_hea_apa_m ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="wife_hea_ana" class="form-control" value="ANA" readonly />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_hea_ana_g ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_hea_ana_m ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="wife_hea_la" class="form-control" value="LA" readonly />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_hea_la_g ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_hea_la_m ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="sa_hrs_1">{{ __('Chromosomal Analysis') }}</label>
                            <span class="form-control">{{ $report->sa_hrs_1 ?: 'N/A' }}</span>
                        </div>
                    </div>
                </div>   
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table">
                                <legend><b>{{ __('IUI Cycle') }}</b></legend>
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
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_day_1 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_date_1 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_endo_1 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_rtov_1 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_ltov_1 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_remark_1 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_day_2 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_date_2 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_endo_2 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_rtov_2 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_ltov_2 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_remark_2 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_day_3 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_date_3 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_endo_3 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_rtov_3 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_ltov_3 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_remark_3 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_day_4 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_date_4 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_endo_4 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_rtov_4 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_ltov_4 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_remark_4 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_day_5 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_date_5 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_endo_5 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_rtov_5 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_ltov_5 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_remark_5 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_day_6 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_date_6 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_endo_6 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_rtov_6 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_ltov_6 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_ici_remark_6 ?: 'N/A' }}</span>
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
                                <caption>{{ __('Intra-Uterine Insemination Details') }}</caption>
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
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_day_1 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_volume_1 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_native_couint_1 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_motility1_1 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_harvest_count_1 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_motility2_1 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_motility3_1 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_remark_1 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_day_2 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_volume_2 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_native_couint_2 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_motility1_2 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_harvest_count_2 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_motility2_2 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_motility3_2 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_remark_2 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_day_3 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_volume_3 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_native_couint_3 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_motility1_3 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_harvest_count_3 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_motility2_3 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_motility3_3 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_remark_3 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_day_4 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_volume_4 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_native_couint_4 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_motility1_4 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_harvest_count_4 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_motility2_4 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_motility3_4 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_remark_4 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_day_5 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_volume_5 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_native_couint_5 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_motility1_5 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_harvest_count_5 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_motility2_5 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_motility3_5 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_remark_5 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_day_6 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_volume_6 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_native_couint_6 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_motility1_6 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_harvest_count_6 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_motility2_6 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_motility3_6 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_iuid_remark_6 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend><b>{{ __("IVF Treatment Plan") }}</b></legend>
                <legend>{{ __("Wife's LMP.") }}</legend>
                <div class="row">
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
                                                <input type="text" name="wife_lmp_oc" class="form-control" value="O.C." readonly />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_lmp_oc_begin ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_lmp_oc_stopped ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_lmp_oc_tco ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group ">
                                                <label for="result_tton">{{ __('Trial Transfer on') }}</label>
                                                <span class="form-control">{{ $report->result_tton ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_remarks') has-error @enderror">
                                                <label for="result_remarks">{{ __('Remarks') }}</label>
                                                <span class="form-control">{{ $report->result_remarks ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group @error('result_by') has-error @enderror">
                                                <label for="result_by">{{ __('By Dr.') }}</label>
                                                <span class="form-control">{{ $report->result_by ?: 'N/A' }}</span>
                                            </div>
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="wife_lmp_telephone" class="form-control" value="Telephone Talk" readonly />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_lmp_telephone_begin ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_lmp_telephone_stopped ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_lmp_telephone_tco ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="wife_lmp_discussion" class="form-control" value="Discussion" readonly />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_lmp_discussion_begin ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_lmp_discussion_stopped ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->wife_lmp_discussion_tco ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="wife_lmp_lupride">{{ __('Lupride') }}</label>
                            <span class="form-control">{{ $report->wife_lmp_lupride ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="wife_lmp_stared">{{ __('Stared') }}</label>
                            <span class="form-control">{{ $report->wife_lmp_stared ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="wife_lmp_tocome">{{ __('To Come On') }}</label>
                            <span class="form-control">{{ $report->wife_lmp_tocome ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="wife_lmp_protocol">{{ __('Protocol') }}</label>
                            <span class="form-control">{{ $report->wife_lmp_protocol ?: 'N/A' }}</span>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="wife_lmp_inj">{{ __('LMP') }}</label>
                            <span class="form-control">{{ $report->result_lmp ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="wife_lmp_inj">{{ __('Stm Start') }}</label>
                            <span class="form-control">{{ $report->result_stm_start ?: 'N/A' }}</span>
                        </div>
                    </div>

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
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_date_1 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_cyc_day_1 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_stm_day_1 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_end_1 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_rafc_1 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_lafc_1 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_stimulation_1 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_misc_1 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_date_2 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_cyc_day_2 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_stm_day_2 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_end_2 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_rafc_2 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_lafc_2 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_stimulation_2 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_misc_2 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            3
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_date_3 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_cyc_day_3 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_stm_day_3 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_end_3 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_rafc_3 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_lafc_3 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_stimulation_3 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_misc_3 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            4
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_date_4 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_cyc_day_4 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_stm_day_4 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_end_4 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_rafc_4 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_lafc_4 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_stimulation_4 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_misc_4 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            5
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_date_5 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_cyc_day_5 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_stm_day_5 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_end_5 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_rafc_5 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_lafc_5 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_stimulation_5 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_misc_5 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            6
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_date_6 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_cyc_day_6 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_stm_day_6 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_end_6 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_rafc_6 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_lafc_6 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_stimulation_6 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_misc_6 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            7
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_date_7 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_cyc_day_7 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_stm_day_7 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_end_7 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_rafc_7 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_lafc_7 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_stimulation_7 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_misc_7 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            8
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_date_8 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_cyc_day_8 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_stm_day_8 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_end_8 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_rafc_8 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_lafc_8 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_stimulation_8 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_misc_8 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            9
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_date_9 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_cyc_day_9 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_stm_day_9 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_end_9 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_rafc_9 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_lafc_9 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_stimulation_9 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_misc_9 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            10
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_date_10 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_cyc_day_10 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_stm_day_10 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_end_10 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_rafc_10 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_lafc_10 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_stimulation_10 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_misc_10 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_date_11 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_cyc_day_11 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_stm_day_11 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_end_11 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_rafc_11 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_lafc_11 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_stimulation_11 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_misc_11 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            12
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_date_12 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_cyc_day_12 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_stm_day_12 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_end_12 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_rafc_12 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_lafc_12 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_stimulation_12 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_misc_12 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            13
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_date_13 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_cyc_day_13 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_stm_day_13 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_end_13 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_rafc_13 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_lafc_13 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_stimulation_13 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_misc_13 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            14
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_date_14 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_cyc_day_14 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_stm_day_14 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_end_14 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_rafc_14 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_lafc_14 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_stimulation_14 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_misc_14 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            15
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_date_15 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_cyc_day_15 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_stm_day_15 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_end_15 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_rafc_15 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_lafc_15 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_stimulation_15 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_misc_15 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            16
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_date_16 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_cyc_day_16 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_stm_day_16 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_end_16 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_rafc_16 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_lafc_16 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_stimulation_16 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->result_misc_16 ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="wife_lmp_lh">{{ __('LH') }}</label>
                            <span class="form-control">{{ $report->wife_lmp_lh ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="wife_lmp_e2">{{ __('E2') }}</label>
                            <span class="form-control">{{ $report->wife_lmp_e2 ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="wife_lmp_inj">{{ __('Inj./ HCG / Trigger ') }}</label>
                            <span class="form-control">{{ $report->wife_lmp_inj ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="wife_lmp_dose">{{ __('Dose') }}</label>
                            <span class="form-control">{{ $report->wife_lmp_dose ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="wife_lmp_hcg">{{ __('Date/ Time AM/PM') }}</label>
                            <span class="form-control">{{ $report->wife_lmp_hcg ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="wife_lmp_hcg_day">{{ __('Day Of HCG') }}</label>
                            <span class="form-control">{{ $report->wife_lmp_hcg_day ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="wife_lmp_opu">{{ __('OPU') }}</label>
                            <span class="form-control">{{ $report->wife_lmp_opu ?: 'N/A' }}</span>                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="wife_lmp_ampm">{{ __('Time AM/PM') }}</label>
                            <span class="form-control">{{ $report->wife_lmp_ampm ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="sperm_source_folliciles_right">{{ __('Total No. of Follicles (Right)') }}</label>
                            <span class="form-control">{{ $report->sperm_source_folliciles_right ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="sperm_source_folliciles_left">{{ __('Total No. of Follicles (Left)') }}</label>
                            <span class="form-control">{{ $report->sperm_source_folliciles_left ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="sperm_source_folliciles_total">{{ __('Total No. of Follicles') }}</label>
                            <span class="form-control">{{ $report->sperm_source_folliciles_total ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="sperm_source_ovum_right">{{ __('Total No. of Ovum Retrieve (Right)') }}</label>
                            <span class="form-control">{{ $report->sperm_source_ovum_right ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="sperm_source_ovum_left">{{ __('Total No. of Ovum Retrieve (Left)') }}</label>
                            <span class="form-control">{{ $report->sperm_source_ovum_left ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="sperm_source_ovum_pod">{{ __('Total No. of Ovum Retrieve (POD)') }}</label>
                            <span class="form-control">{{ $report->sperm_source_ovum_pod ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('sperm_source_ovum_total') has-error @enderror">
                            <label for="sperm_source_ovum_total">{{ __('Total No. of Ovum Retrieve') }}</label>
                            <span class="form-control">{{ $report->sperm_source_ovum_total ?: 'N/A' }}</span>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
            <legend>{{ __('OOCYTE QUALITY') }}</legend>
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
                                        <input type="text" name="oocyte_quality_1" class="form-control" value="M2" readonly />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->oocyte_quality_1_no ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->oocyte_quality_1_stage ?: 'N/A' }}</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" name="oocyte_quality_2" class="form-control" value="M1" readonly />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->oocyte_quality_2_no ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->oocyte_quality_2_stage ?: 'N/A' }}</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" name="oocyte_quality_3" class="form-control" value="GV" readonly />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->oocyte_quality_3_no ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->oocyte_quality_3_stage ?: 'N/A' }}</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" name="oocyte_quality_4" class="form-control" value="Other" readonly />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->oocyte_quality_4_no ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->oocyte_quality_4_stage ?: 'N/A' }}</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" name="oocyte_quality_5" class="form-control" value="Total" readonly />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->oocyte_quality_5_no ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->oocyte_quality_5_stage ?: 'N/A' }}</span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <legend>{{ __("Sperm Source") }}</legend>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="sperm_source_ejaculated">{{ __('Ejaculated') }}</label>
                            <span class="form-control">{{ $report->sperm_source_ejaculated ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="sperm_source_donor">{{ __('Donor') }}</label>
                            <span class="form-control">{{ $report->sperm_source_donor ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="sperm_source_pesa">{{ __('Pesa') }}</label>
                            <span class="form-control">{{ $report->sperm_source_pesa ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="sperm_source_cryo">{{ __('Cryo') }}</label>
                            <span class="form-control">{{ $report->sperm_source_cryo ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="sperm_source_test">{{ __('TESA') }}</label>
                            <span class="form-control">{{ $report->sperm_source_test ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="sperm_source_recovery">{{ __('Recovery Checked') }}</label>
                            <span class="form-control">{{ $report->sperm_source_recovery ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="sperm_source_whom">{{ __('Whom') }}</label>
                            <span class="form-control">{{ $report->sperm_source_whom ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="sperm_source_when">{{ __('When') }}</label>
                            <span class="form-control">{{ $report->sperm_source_when ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
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
                                                <input type="text" class="form-control" name="sa_volume" value="Volume" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->sa_volume_native ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->sa_volume_ah ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="sa_mucoid" value="Mucoid" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->sa_mucoid_native ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->sa_mucoid_ah ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="sa_sperm_count" value="Sperm Count/ml" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->sa_sperm_count_native ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->sa_sperm_count_ah ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="sa_motility" value="Motility" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->sa_motility_native ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->sa_motility_ah ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="sa_grade" value="Grade" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->sa_grade_native ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->sa_grade_ah ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="sa_pus_cells" value="Pus cells" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->sa_pus_cells_native ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->sa_pus_cells_ah ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="sa_immature_cells" value="Immature cells" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->sa_immature_cells_native ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->sa_immature_cells_ah ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="sa_agglutination" value="Agglutination" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->sa_agglutination_native ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->sa_agglutination_ah ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="sa_granular_debris" value="Granular Debris" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->sa_granular_debris_native ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->sa_granular_debris_ah ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="sa_insemination_time" value="Insemination Time" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->sa_insemination_time_native ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <span class="form-control">{{ $report->sa_insemination_time_ah ?: 'N/A' }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="result_ivf">{{ __('IVF') }}</label>
                            <span class="form-control">{{ $report->result_ivf ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="result_icsi">{{ __('ICSI') }}</label>
                            <span class="form-control">{{ $report->result_icsi ?: 'N/A' }}</span>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="sa_no2pn_1">&nbsp;</label>
                            <input type="text" class="form-control" name="Day1" value="IVF Day 1" readonly>
                        </div>    
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="sa_no2pn_1">{{ __('No.2 PN') }}</label>
                            <span class="form-control">{{ $report->sa_no2pn_1 ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="sa_2pn_1">{{ __('2PN') }}</label>
                            <span class="form-control">{{ $report->sa_2pn_1 ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="sa_max2pn_1">{{ __('Discard') }}</label>
                            <span class="form-control">{{ $report->sa_max2pn_1 ?: 'N/A' }}</span>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="sa_no2pn_1">&nbsp;</label>
                            <input type="text" class="form-control" name="Day1" value="ICSI Day 1" readonly>
                        </div>    
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="sa_no2pn_2">{{ __('No.2 PN') }}</label>
                            <span class="form-control">{{ $report->sa_no2pn_2 ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="sa_2pn_2">{{ __('2PN') }}</label>
                            <span class="form-control">{{ $report->sa_2pn_2 ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group @error('sa_max2pn_2') has-error @enderror">
                            <label for="sa_max2pn_2">{{ __('Discard') }}</label>
                            <span class="form-control">{{ $report->sa_max2pn_2 ?: 'N/A' }}</span>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="sa_no2pn_1">&nbsp;</label>
                            <input type="text" class="form-control" name="Day1" value="IVF Day 2" readonly>
                        </div>    
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="sa_no2pn_1">{{ __('Cell stage ') }}</label>
                            <span class="form-control">{{ $report->sa_no2pn_1 ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('sa_2pn_1') has-error @enderror">
                            <label for="sa_2pn_1">{{ __('Cell stage') }}</label>
                            <span class="form-control">{{ $report->sa_2pn_1 ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="sa_max2pn_1">{{ __('Discard') }}</label>
                            <span class="form-control">{{ $report->sa_max2pn_1 ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="sa_no2pn_1">&nbsp;</label>
                            <input type="text" class="form-control" name="Day1" value="ICSI Day 2" readonly>
                        </div>    
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="sa_no2pn_2">{{ __('No.2 PN') }}</label>
                            <span class="form-control">{{ $report->sa_no2pn_2 ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="sa_2pn_2">{{ __('2PN') }}</label>
                            <span class="form-control">{{ $report->sa_2pn_2 ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="sa_max2pn_2">{{ __('Discard') }}</label>
                            <span class="form-control">{{ $report->sa_max2pn_2 ?: 'N/A' }}</span>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="sa_no2pn_1">&nbsp;</label>
                            <input type="text" class="form-control" name="Day1" value="IVF Day 3" readonly>
                        </div>    
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('sa_no2pn_1') has-error @enderror">
                            <label for="sa_no2pn_1">{{ __('No.2 PN') }}</label>
                            <span class="form-control">{{ $report->sa_max2pn_2 ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('sa_2pn_1') has-error @enderror">
                            <label for="sa_2pn_1">{{ __('2PN') }}</label>
                            <span class="form-control">{{ $report->sa_max2pn_2 ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group @error('sa_max2pn_1') has-error @enderror">
                            <label for="sa_max2pn_1">{{ __('Discard') }}</label>
                            <span class="form-control">{{ $report->sa_max2pn_2 ?: 'N/A' }}</span>
                        </div>
                    </div>
                    
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="sa_no2pn_1">&nbsp;</label>
                            <input type="text" class="form-control" name="Day1" value="ICSI Day 3" readonly>
                        </div>    
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('sa_no2pn_2') has-error @enderror">
                            <label for="sa_no2pn_2">{{ __('No.2 PN') }}</label>
                            <span class="form-control">{{ $report->sa_max2pn_2 ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('sa_2pn_2') has-error @enderror">
                            <label for="sa_2pn_2">{{ __('2PN') }}</label>
                            <span class="form-control">{{ $report->sa_max2pn_2 ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group @error('sa_max2pn_2') has-error @enderror">
                            <label for="sa_max2pn_2">{{ __('Discard') }}</label>
                            <span class="form-control">{{ $report->sa_max2pn_2 ?: 'N/A' }}</span>
                        </div>
                    </div>
                    
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="sa_no2pn_1">&nbsp;</label>
                            <input type="text" class="form-control" name="Day1" value="IVF Day 4" readonly>
                        </div>    
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('sa_no2pn_1') has-error @enderror">
                            <label for="sa_no2pn_1">{{ __('No.2 PN') }}</label>
                            <span class="form-control">{{ $report->sa_max2pn_2 ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('sa_2pn_1') has-error @enderror">
                            <label for="sa_2pn_1">{{ __('2PN') }}</label>
                            <span class="form-control">{{ $report->sa_max2pn_2 ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group @error('sa_max2pn_1') has-error @enderror">
                            <label for="sa_max2pn_1">{{ __('Discard') }}</label>
                            <span class="form-control">{{ $report->sa_max2pn_2 ?: 'N/A' }}</span>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="sa_no2pn_1">&nbsp;</label>
                            <input type="text" class="form-control" name="Day1" value="ICSI Day 4" readonly>
                        </div>    
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('sa_no2pn_2') has-error @enderror">
                            <label for="sa_no2pn_2">{{ __('No.2 PN') }}</label>
                            <span class="form-control">{{ $report->sa_max2pn_2 ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('sa_2pn_2') has-error @enderror">
                            <label for="sa_2pn_2">{{ __('2PN') }}</label>
                            <span class="form-control">{{ $report->sa_max2pn_2 ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group @error('sa_max2pn_2') has-error @enderror">
                            <label for="sa_max2pn_2">{{ __('Discard') }}</label>
                            <span class="form-control">{{ $report->sa_max2pn_2 ?: 'N/A' }}</span>
                        </div>
                    </div>
                    
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="sa_no2pn_1">&nbsp;</label>
                            <input type="text" class="form-control" name="Day1" value="IVF Day 5" readonly>
                        </div>    
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('sa_no2pn_1') has-error @enderror">
                            <label for="sa_no2pn_1">{{ __('No.2 PN') }}</label>
                            <span class="form-control">{{ $report->sa_max2pn_2 ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('sa_2pn_1') has-error @enderror">
                            <label for="sa_2pn_1">{{ __('2PN') }}</label>
                            <span class="form-control">{{ $report->sa_max2pn_2 ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group @error('sa_max2pn_1') has-error @enderror">
                            <label for="sa_max2pn_1">{{ __('Discard') }}</label>
                            <span class="form-control">{{ $report->sa_max2pn_2 ?: 'N/A' }}</span>
                        </div>
                    </div>


                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="sa_no2pn_1">&nbsp;</label>
                            <input type="text" class="form-control" name="Day1" value="ICSI Day 5" readonly>
                        </div>    
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('sa_no2pn_2') has-error @enderror">
                            <label for="sa_no2pn_2">{{ __('No.2 PN') }}</label>
                            <span class="form-control">{{ $report->sa_max2pn_2 ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('sa_2pn_2') has-error @enderror">
                            <label for="sa_2pn_2">{{ __('2PN') }}</label>
                            <span class="form-control">{{ $report->sa_max2pn_2 ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group @error('sa_max2pn_2') has-error @enderror">
                            <label for="sa_max2pn_2">{{ __('Discard') }}</label>
                            <span class="form-control">{{ $report->sa_max2pn_2 ?: 'N/A' }}</span>
                        </div>
                    </div>            
            </fieldset>
            <fieldset>
                <legend>{{ __('Embryo Transfer') }}</legend>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="et_date_of_et">{{ __('Date of ET') }}</label>
                            <span class="form-control">{{ $report->et_date_of_et ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="et_time_of_et">{{ __('Time of ET') }}</label>
                            <span class="form-control">{{ $report->et_time_of_et ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="et_endometrium_t">{{ __('Endometrium Thickness') }}</label>
                            <span class="form-control">{{ $report->et_endometrium_t ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="et_cathetar">{{ __('ET Cathetar used') }}</label>
                            <span class="form-control">{{ $report->et_cathetar ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="et_transfer_stage">{{ __('Total No. of Embryo Transfer & Stage') }}</label>
                            <span class="form-control">{{ $report->et_transfer_stage ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="et_embryo_transfer">{{ __('Embryo Transfer') }}</label>
                            <span class="form-control">{{ ucfirst(str_replace('_', ' ', $report->et_embryo_transfer)) ?: 'N/A' }}</span>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{{ __('Blastocyst Transfer') }}</legend>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="bt_date_of_et">{{ __('Date of ET') }}</label>
                            <span class="form-control">{{ $report->bt_date_of_et ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="bt_time_of_et">{{ __('Time of ET') }}</label>
                            <span class="form-control">{{ $report->bt_time_of_et ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="bt_endometrium_t">{{ __('Endometrium Thickness') }}</label>
                            <span class="form-control">{{ $report->bt_endometrium_t ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="bt_cathetar">{{ __('BT Cathetar used') }}</label>
                            <span class="form-control">{{ $report->bt_cathetar ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="bt_transfer_stage">{{ __('Total No. of Blastocyst Transfer & Stage') }}</label>
                            <span class="form-control">{{ $report->bt_transfer_stage ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="bt_embryo_transfer">{{ __('Blastocyst Transfer') }}</label>
                            <span class="form-control">{{ ucfirst(str_replace('_', ' ', $report->bt_embryo_transfer)) ?: 'N/A' }}</span>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{{ __('Frozen') }}</legend>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="frozen_stage">{{ __('No. of Embryo frozen & stage') }}</label>
                            <span class="form-control">{{ $report->frozen_stage ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="frozen_blastocyst">{{ __('No. of Blastocyst frozen') }}</label>
                            <span class="form-control">{{ $report->frozen_blastocyst ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="frozen_embryo_datetime">{{ __('Date & Time of Embryo freezing') }}</label>
                            <span class="form-control">{{ $report->frozen_embryo_datetime ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="frozen_blastocyst_datetime">{{ __('Date & Time of Blastocyst freezing') }}</label>
                            <span class="form-control">{{ $report->frozen_blastocyst_datetime ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="frozen_straws">{{ __('No. of Straws used') }}</label>
                            <span class="form-control">{{ $report->frozen_straws ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="frozen_mark">{{ __('Colour Code & Mark') }}</label>
                            <span class="form-control">{{ $report->frozen_mark ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="frozen_plastic_colour">{{ __('Globlet Colour') }}</label>
                            <span class="form-control">{{ $report->frozen_plastic_colour ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="frozen_ln2">Con. No. in L.N2</label>
                            <span class="form-control">{{ $report->frozen_ln2 ?: 'N/A' }}</span>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{{ __('Thawing') }}</legend>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="thawing_date_of_et">{{ __('Date of ET of thow Embryo') }}</label>
                            <span class="form-control">{{ $report->thawing_date_of_et ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="thawing_time_of_et">{{ __('Time of ET') }}</label>
                            <span class="form-control">{{ $report->thawing_time_of_et ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="thawing_endometrium_t">{{ __('Endometrium Thickness') }}</label>
                            <span class="form-control">{{ $report->thawing_endometrium_t ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="thawing_cathetar">{{ __('ET Cathetar used') }}</label>
                            <span class="form-control">{{ $report->thawing_cathetar ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="thawing_transfer_stage">{{ __('Total No. of Embryo Transfer & Stage') }}</label>
                            <span class="form-control">{{ $report->thawing_transfer_stage ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="thawing_embryo_transfer">{{ __('Embryo Transfer') }}</label>
                            <span class="form-control">{{ ucfirst(str_replace('_', ' ', $report->thawing_embryo_transfer)) ?: 'N/A' }}</span>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="result_eudate">{{ __('F/U Date') }}</label>
                            <span class="form-control">{{ $report->result_eudate ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="result_bhcg">{{ __('B-HCG Value') }}</label>
                            <span class="form-control">{{ $report->result_bhcg ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="result_semen_cryo">{{ __('Result') }}</label>
                            <span class="form-control">{{ $report->result_semen_cryo ?: 'N/A' }}</span>
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
        <div class="box-body">{{ __('Infertility Report not found for this patient.') }}</div>
    </div>
</div>
@endif
