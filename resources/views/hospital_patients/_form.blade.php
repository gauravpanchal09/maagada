<form method="POST" action="{{ $patient ? route('hospital-patients.update', ['hospital_patient' => $patient]) : route('hospital-patients.store') }}">
    @if ($patient)
        @method('PUT')
    @endif
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group @error('first_name') has-error @enderror">
                <label for="first_name">{{ __('First Name') }}</label>
                <input type="text" name="first_name" class="form-control" value="{{ $patient ? $patient->first_name : old('first_name') }}" required autofocus>
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
                <input type="text" name="last_name" class="form-control" value="{{ $patient ? $patient->last_name : old('last_name') }}" required>
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
            <div class="form-group @error('discharge_date') has-error @enderror">
                <label for="discharge_date">{{ __('Discharge date') }}</label>
                <input type="date" name="discharge_date" class="form-control" value="{{ $patient ? $patient->discharge_date : old('adischarge_date') }}">
                @error('discharge_date')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group @error('price') has-error @enderror">
                <label for="price">{{ __('Price') }}</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-inr"></i>
                    </div>
                    <input type="number" name="price" class="form-control" value="{{ $patient ? $patient->price : old('price') }}">
                </div>
                @error('price')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group @error('procedure') has-error @enderror">
                <label for="procedure">{{ __('Procedure') }}</label>
                <input type="text" name="procedure" class="form-control" value="{{ $patient ? $patient->procedure : old('procedure') }}">
                @error('procedure')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group @error('hospital_id') has-error @enderror">
                <label for="hospital_id">{{ __('Hospital') }}</label>
                <select name="hospital_id" class="form-control select2">
                    @foreach ($hospitals as $hospital)
                        <option value="{{ $hospital->id }}" @if($patient ? $patient->hospital->id == $hospital->id : old('hospital_id') == $hospital->id) selected @endif>
                            {{ $hospital->name }}
                        </option>
                    @endforeach
                </select>
    
                @error('hospital_id')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">{{ $patient ? __('Update') : __('Submit') }}</button>
    </div>
</form>
