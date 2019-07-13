@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Add New Employee</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('employee.store', app()->getLocale()) }}" method="post" enctype="multipart/form-data">

                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="firstName">{{ __('First Name') }}:</label>
                                <input id="firstName" class="form-control" type="text" name="firstName" value="{{ old('firstName') }}">
                                @if($errors->has('firstName'))
                                    <div class="alert-danger">{{ $errors->first('firstName') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="lastName">{{ __('Last Name') }}:</label>
                                <input id="lastName" class="form-control" type="text" name="lastName" value="{{ old('lastName') }}">
                                @if($errors->has('lastName'))
                                    <div class="alert-danger">{{ $errors->first('lastName') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="logo">{{ __('Photo') }}</label>
                                <input id="photo" class="form-control" type="file" name="photo"
                                       accept=".jpg, .jpeg, .png">
                                @if($errors->has('photo'))
                                    <div class="alert-danger">{{ $errors->first('photo') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="website">{{ __('Website') }}:</label>
                                <input id="website" class="form-control" type="text" name="website" value="{{ old('website') }}">
                                @if($errors->has('website'))
                                    <div class="alert-danger">{{ $errors->first('website') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="phone">{{ __('Phone') }}:</label>
                                <input id="phone" class="form-control" type="text" name="phone" value="{{ old('phone') }}">
                                @if($errors->has('phone'))
                                    <div class="alert-danger">{{ $errors->first('phone') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="email">{{ __('Email') }}:</label>
                                <input id="email" class="form-control" type="text" name="email" value="{{ old('email') }}">
                                @if($errors->has('email'))
                                    <div class="alert-danger">{{ $errors->first('email') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="company">{{ __('Company') }}:</label>
                                <select class="form-control @error('company') is-invalid @enderror" id="company" name="company_id" >
                                    <option value="">{{ __('Select company') }}</option>
                                    @foreach($companies as $company)
                                        <option value="{{ $company->id }}" {{ ($company->id == old('company_id'))? 'selected' : '' }}>{{ $company->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <input class="btn btn-success" type="submit" value="{{ __('Add') }}">
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
