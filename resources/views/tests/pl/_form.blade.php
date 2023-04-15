<form method="POST" action="{{ $test ? route('pl.update', $test) : route('pl.store') }}">
    @if ($test)
        @method('PUT')
    @endif
    @csrf
    <div class="row">
        <div class="col-md-6">
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
        @if ($test && count($history) > 0)
        <div class="col-md-6">
            <a href="#" class="btn btn-app pull-right" data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-history"></i> History
            </a>
        </div>
        @endif
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group @error('description') has-error @enderror">
                <label for="description">{{ __('Description') }}</label>
                <textarea class="form-control" id="editor" name="description" rows="10" cols="80">
                    {{ $test ? $test->description : old('description') }}
                </textarea>
                @error('description')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">{{ $test ? __('Update') : __('Submit') }}</button>
    </div>
</form>

@if ($test && $history)
    <x-history-model :histories="$history" test="Gynae" />
@endif