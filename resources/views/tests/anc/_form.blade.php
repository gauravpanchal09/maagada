<form method="POST" action="{{ $test ? route('anc.update', $test) : route('anc.store') }}">
    @if ($test)
        @method('PUT')
    @endif
    @csrf
    <div class="row">
        <div class="col-md-4">
            <div class="form-group @error('patient_id') has-error @enderror">
                <label for="patient_id">{{ __('Patient') }}</label>
                <select name="patient_id" class="form-control select2">
                    @foreach ($patients as $patient)
                        <option value="{{ $patient->id }}" @if($test ? $test->patient->id == $patient->id : old('patient_id') == $patient->id) selected @endif>
                            #{{ $patient->registration_number }} {{ $patient->first_name }} {{ $patient->last_name }}
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
    <fieldset>
        <legend>{{ __('Menstrual History') }}</legend>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group @error('menstrual_history_lmp') has-error @enderror">
                    <label for="menstrual_history_lmp">{{ __('LMP') }}</label>
                    <input type="date" name="menstrual_history_lmp" class="form-control" value="{{ $test ? $test->menstrual_history_lmp : old('menstrual_history_lmp') }}">
                    @error('menstrual_history_lmp')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group @error('menstrual_history_edd') has-error @enderror">
                    <label for="menstrual_history_edd">{{ __('EDD') }}</label>
                    <input type="date" name="menstrual_history_edd" class="form-control" value="{{ $test ? $test->menstrual_history_edd : old('menstrual_history_edd') }}">
                    @error('menstrual_history_edd')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
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
                        <div class="form-group @error('obstetric_history_g') has-error @enderror">
                            <label for="obstetric_history_g">{{ __('G') }}</label>
                            <input type="text" name="obstetric_history_g" class="form-control" value="{{ $test ? $test->obstetric_history_g : old('obstetric_history_g') }}">
                            @error('obstetric_history_g')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('obstetric_history_p') has-error @enderror">
                            <label for="obstetric_history_p">{{ __('P') }}</label>
                            <input type="text" name="obstetric_history_p" class="form-control" value="{{ $test ? $test->obstetric_history_p : old('obstetric_history_p') }}">
                            @error('obstetric_history_p')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('obstetric_history_a') has-error @enderror">
                            <label for="obstetric_history_a">{{ __('A') }}</label>
                            <input type="text" name="obstetric_history_a" class="form-control" value="{{ $test ? $test->obstetric_history_a : old('obstetric_history_a') }}">
                            @error('obstetric_history_a')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group @error('obstetric_history_l') has-error @enderror">
                            <label for="obstetric_history_l">{{ __('L') }}</label>
                            <input type="text" name="obstetric_history_l" class="form-control" value="{{ $test ? $test->obstetric_history_l : old('obstetric_history_l') }}">
                            @error('obstetric_history_l')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group @error('obstetric_history_first') has-error @enderror">
                            <label for="obstetric_history_first">{{ __('I') }}</label>
                            <input type="text" name="obstetric_history_first" class="form-control" value="{{ $test ? $test->obstetric_history_first : old('obstetric_history_first') }}">
                            @error('obstetric_history_first')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group @error('obstetric_history_second') has-error @enderror">
                            <label for="obstetric_history_second">{{ __('II') }}</label>
                            <input type="text" name="obstetric_history_second" class="form-control" value="{{ $test ? $test->obstetric_history_second : old('obstetric_history_second') }}">
                            @error('obstetric_history_second')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group @error('obstetric_history_third') has-error @enderror">
                            <label for="obstetric_history_third">{{ __('III') }}</label>
                            <input type="text" name="obstetric_history_third" class="form-control" value="{{ $test ? $test->obstetric_history_third : old('obstetric_history_third') }}">
                            @error('obstetric_history_third')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="form-group @error('marital_life') has-error @enderror">
                    <label for="marital_life">{{ __('Marital Life') }}</label>
                    <input type="text" name="marital_life" class="form-control" value="{{ $test ? $test->marital_life : old('marital_life') }}">
                    @error('marital_life')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group @error('infertility_treatment') has-error @enderror">
                    <label for="infertility_treatment">{{ __('Infertility Treatment') }}</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="infertility_treatment" value="Yes" @if(($test ? $test->infertility_treatment == 'Yes' : old('infertility_treatment')  == 'Yes') || !$test) checked @endif>
                            Yes
                        </label>
                        &nbsp; &nbsp; &nbsp;
                        <label>
                            <input type="radio" name="infertility_treatment" value="No" @if($test ? $test->infertility_treatment == 'No' : old('infertility_treatment')  == 'No') checked @endif>
                            No
                        </label>
                    </div>

                    @error('infertility_treatment')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group @error('previous_surgeries') has-error @enderror">
                    <label for="previous_surgeries">{{ __('Previous Surgeries') }}</label>
                    <input type="text" name="previous_surgeries" class="form-control" value="{{ $test ? $test->previous_surgeries : old('previous_surgeries') }}">
                    @error('previous_surgeries')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group @error('past_history') has-error @enderror">
                    <label for="past_history">{{ __('Past History') }}</label>
                    <input type="text" name="past_history" class="form-control" value="{{ $test ? $test->past_history : old('past_history') }}">
                    @error('past_history')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group @error('family_history') has-error @enderror">
                    <label for="family_history">{{ __('Family History') }}</label>
                    <input type="text" name="family_history" class="form-control" value="{{ $test ? $test->family_history : old('family_history') }}">
                    @error('family_history')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </fieldset>
    <fieldset>
        <legend>{{ __('Investigation') }}</legend>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group @error('blood_group') has-error @enderror">
                    <label for="blood_group">{{ __('Blood Group') }}</label>
                    <select name="blood_group" class="form-control select2">
                        @foreach ($bloodGroups as $bloodGroup)
                            <option value="{{ $bloodGroup }}" @if($test ? $test->blood_group == $bloodGroup : old('blood_group') == $bloodGroup) selected @endif>
                                {{ $bloodGroup }}
                            </option>
                        @endforeach
                    </select>
                    @error('blood_group')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group @error('hb') has-error @enderror">
                    <label for="hb">{{ __('HB') }}</label>
                    <input type="text" name="hb" class="form-control" value="{{ $test ? $test->hb : old('hb') }}">
                    @error('hb')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group @error('platelets') has-error @enderror">
                    <label for="platelets">{{ __('Platelets') }}</label>
                    <input type="text" name="platelets" class="form-control" value="{{ $test ? $test->platelets : old('platelets') }}">
                    @error('platelets')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group @error('hiv') has-error @enderror">
                    <label for="hiv">{{ __('HIV') }}</label>
                    <input type="text" name="hiv" class="form-control" value="{{ $test ? $test->hiv : old('hiv') }}">
                    @error('hiv')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group @error('hbsag') has-error @enderror">
                    <label for="hbsag">{{ __('HBSAG') }}</label>
                    <input type="text" name="hbsag" class="form-control" value="{{ $test ? $test->hbsag : old('hbsag') }}">
                    @error('hbsag')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group @error('udrl') has-error @enderror">
                    <label for="udrl">{{ __('UDRL') }}</label>
                    <input type="text" name="udrl" class="form-control" value="{{ $test ? $test->udrl : old('udrl') }}">
                    @error('udrl')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group @error('urine_randm') has-error @enderror">
                    <label for="urine_randm">{{ __('Urine R&M') }}</label>
                    <input type="text" name="urine_randm" class="form-control" value="{{ $test ? $test->urine_randm : old('urine_randm') }}">
                    @error('urine_randm')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group @error('tsh') has-error @enderror">
                    <label for="tsh">{{ __('TSH') }}</label>
                    <input type="text" name="tsh" class="form-control" value="{{ $test ? $test->tsh : old('tsh') }}">
                    @error('tsh')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group @error('bl_suger') has-error @enderror">
                    <label for="bl_suger">{{ __('BL Suger') }}</label>
                    <input type="text" name="bl_suger" class="form-control" value="{{ $test ? $test->bl_suger : old('bl_suger') }}">
                    @error('bl_suger')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group @error('ogtt') has-error @enderror">
                    <label for="ogtt">{{ __('OGTT') }}</label>
                    <input type="text" name="ogtt" class="form-control" value="{{ $test ? $test->ogtt : old('ogtt') }}">
                    @error('ogtt')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group @error('hb_electro') has-error @enderror">
                    <label for="hb_electro">{{ __('HB Electro') }}</label>
                    <input type="text" name="hb_electro" class="form-control" value="{{ $test ? $test->hb_electro : old('hb_electro') }}">
                    @error('hb_electro')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group @error('dual_markar') has-error @enderror">
                    <label for="dual_markar">{{ __('DUAL Markar') }}</label>
                    <input type="text" name="dual_markar" class="form-control" value="{{ $test ? $test->dual_markar : old('dual_markar') }}">
                    @error('dual_markar')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group @error('quadraple_markar') has-error @enderror">
                    <label for="quadraple_markar">{{ __('QUADRAPLE Markar') }}</label>
                    <input type="text" name="quadraple_markar" class="form-control" value="{{ $test ? $test->quadraple_markar : old('quadraple_markar') }}">
                    @error('quadraple_markar')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </fieldset>
    <fieldset>
        <legend>{{ __('General Examination') }}</legend>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group @error('general_examination') has-error @enderror">
                    <textarea name="general_examination" cols="30" rows="10" class="form-control">
                        {{ $test ? $test->general_examination : old('general_examination') }}
                    </textarea>    
                    @error('general_examination')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group @error('vaccination') has-error @enderror">
                    <label for="vaccination">{{ __('Vaccination') }}</label>
                    <select name="vaccination" class="form-control select2">
                        @foreach ($vaccinations as $vaccination)
                            <option value="{{ $vaccination }}" @if($test ? $test->vaccination == $vaccination : old('vaccination') == $vaccination) selected @endif>
                                {{ $vaccination }}
                            </option>
                        @endforeach
                    </select>
                    @error('vaccination')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </fieldset>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">{{ $test ? __('Update') : __('Submit') }}</button>
    </div>
</form>

@if ($test && $history)
    <x-history-model :histories="$history" test="ANC" />
@endif