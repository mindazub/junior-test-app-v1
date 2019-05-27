@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Update Employee Info</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('employee.update', [$employee->id]) }}" method="post" enctype="multipart/form-data">

                            {{ method_field('put') }}

                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="firstName">{{ __('First Name') }}:</label>
                                <input id="firstName" class="form-control" type="text" name="firstName"
                                       value="{{ old('firstName', $employee->firstName ) }}">
                                @if($errors->has('firstName'))
                                    <div class="alert-danger">{{ $errors->first('firstName') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="lastName">{{ __('Last Name') }}:</label>
                                <input id="lastName" class="form-control" type="text" name="lastName"
                                       value="{{ old('lastName', $employee->lastName ) }}">
                                @if($errors->has('lastName'))
                                    <div class="alert-danger">{{ $errors->first('lastName') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="website">{{ __('Website') }}:</label>
                                <input id="website" class="form-control" type="text" name="website"
                                       value="{{ old('website', $employee->website ) }}">
                                @if($errors->has('website'))
                                    <div class="alert-danger">{{ $errors->first('website') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="phone">{{ __('Phone') }}:</label>
                                <input id="phone" class="form-control" type="text" name="phone"
                                       value="{{ old('phone', $employee->phone ) }}">
                                @if($errors->has('phone'))
                                    <div class="alert-danger">{{ $errors->first('phone') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="email">{{ __('Email') }}:</label>
                                <input id="email" class="form-control" type="email" name="email"
                                       value="{{ old('email', $employee->email ) }}">
                                @if($errors->has('email'))
                                    <div class="alert-danger">{{ $errors->first('email') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="company">{{ __('Company') }}:</label>
                                <select class="form-control @error('company') is-invalid @enderror" id="company" name="company_id">
                                    <option value="">{{ __('Select company') }}</option>
                                    @foreach($companies as $company)
                                        <option name="companies[]" value="{{ $company['id'] }}" {{ ($company['id'] == old('company'))? 'selected' : '' }}>{{ $company['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <input class="btn btn-success" type="submit" value="{{ __('Update') }}">
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
