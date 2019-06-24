<div class="form-group">
    <label for="company">{{ __('Company') }}:</label>
    <select class="form-control @error('company') is-invalid @enderror" id="company" name="company_id">
        <option value="">{{ __('Select company') }}</option>
        @foreach($companies as $company)
            <option name="companies[]" value="{{ $company['id'] }}" {{ ($company['id'] == old('company_id', $employee->company->id))? 'selected' : '' }}>{{ $company['name'] }}</option>
        @endforeach
    </select>
    @if($errors->has('company_id'))
        <div class="alert-danger">{{ $errors->first('company_id') }}</div>
    @endif
</div>
