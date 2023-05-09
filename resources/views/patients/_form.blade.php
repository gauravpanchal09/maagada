<form method="POST" action="{{ $patient ? route('patients.update', $patient) : route('patients.store') }}">
    @if ($patient)
        @method('PUT')
    @endif
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group @error('first_name') has-error @enderror">
                <label for="first_name">{{ __('First Name') }}</label>
                <input type="text" name="first_name" class="form-control" value="{{ $patient ? $patient->first_name : old('first_name') }}" autofocus>
                @error('first_name')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group @error('last_name') has-error @enderror">
                <label for="last_name">{{ __('Last Name') }}</label>
                <input type="text" name="last_name" class="form-control" value="{{ $patient ? $patient->last_name : old('last_name') }}">
                @error('last_name')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group @error('husband_name') has-error @enderror">
                <label for="husband_name">{{ __('Husband Name') }}</label>
                <input type="text" name="husband_name" class="form-control" value="{{ $patient ? $patient->husband_name : old('husband_name') }}">
                @error('husband_name')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group @error('mobile') has-error @enderror">
                <label for="mobile">{{ __('Mobile') }}</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-mobile"></i>
                    </div>
                    <input type="text" name="mobile" class="form-control" value="{{ $patient ? $patient->mobile : old('mobile') }}" data-inputmask='"mask": "999-999-9999"' data-mask>
                </div>
                @error('mobile')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group @error('husband_dob') has-error @enderror">
                <label for="husband_dob">{{ __('Husband Date Of Birth') }}</label>
                <input type="date" name="husband_dob" class="form-control" value="{{ $patient ? $patient->husband_dob : old('husband_dob') }}">
                @error('husband_dob')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group @error('husband_age') has-error @enderror">
                <label for="husband_age">{{ __('Husband Age') }}</label>
                <input type="number" name="husband_age" class="form-control" value="{{ $patient ? $patient->husband_age : old('husband_age') }}">
                @error('husband_age')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group @error('dob') has-error @enderror">
                <label for="dob">{{ __('Wife Date Of Birth') }}</label>
                <input type="date" name="dob" class="form-control" value="{{ $patient ? $patient->dob : old('dob') }}">
                @error('dob')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group @error('age') has-error @enderror">
                <label for="age">{{ __('Wife Age') }}</label>
                <input type="number" name="age" class="form-control" value="{{ $patient ? $patient->age : old('age') }}">
                @error('age')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group @error('address') has-error @enderror">
                <label for="address">{{ __('Address') }}</label>
                <input type="text" name="address" class="form-control" value="{{ $patient ? $patient->address : old('address') }}">
                @error('address')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group @error('aadhar_card') has-error @enderror">
                <label for="aadhar_card">{{ __('Aadhar Card') }}</label>
                <input type="text" name="aadhar_card" class="form-control" value="{{ $patient ? $patient->aadhar_card : old('aadhar_card') }}" data-inputmask='"mask": "9999 9999 9999"' data-mask>
                @error('aadhar_card')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="test">Test</label>
                <select name="test" class="form-control select2">
                    <option value="infertility">Infertility IVF</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="test">Dr. Name</label>
                <select name="doctor" class="form-control select2">
                    <option value="Dr. Manju Rathi" @if(($patient && $patient->doctor == "Dr. Manju Rathi") || (old('doctor') == "Dr. Manju Rathi")) selected  @endif>{{ __('Dr. Manju Rathi') }}</option>
                    <option value="Dr. Archana Maheshwari" @if(($patient && $patient->doctor == "Dr. Archana Maheshwari") || (old('doctor') == "Dr. Archana Maheshwari")) selected  @endif>{{ __('Dr. Archana Maheshwari') }}</option>
                    <option value="Dr. Mona Gupta" @if(($patient && $patient->doctor == "Dr. Mona Gupta") || (old('doctor') == "Dr. Mona Gupta")) selected  @endif>{{ __('Dr. Mona Gupta') }}</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">{{ $patient ? __('Update') : __('Submit') }}</button>
    </div>
</form>
