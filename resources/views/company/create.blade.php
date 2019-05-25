@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Create New Company</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            Logo  	 Employee




                            <form action="{{ route('company.store') }}" method="post" enctype="multipart/form-data">

                                {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name">{{ __('Name') }}:</label>
                                <input id="name" class="form-control" type="text" name="name" value="">
                                @if($errors->has('name'))
                                    <div class="alert-danger">{{ $errors->first('name') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="website">{{ __('Website') }}:</label>
                                <input id="website" class="form-control" type="text" name="website" value="">
                                @if($errors->has('website'))
                                    <div class="alert-danger">{{ $errors->first('website') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="email">{{ __('Email') }}:</label>
                                <input id="email" class="form-control" type="text" name="email" value="">
                                @if($errors->has('email'))
                                    <div class="alert-danger">{{ $errors->first('email') }}</div>
                                @endif
                            </div>

                                <div class="form-group">
                                    <label for="logo">{{ __('Logo') }}</label>
                                    <input id="logo" class="form-control" type="file" name="logo" accept=".jpg, .jpeg, .png">
                                    @if($errors->has('logo'))
                                        <div class="alert-danger">{{ $errors->first('logo') }}</div>
                                    @endif
                                </div>


                                <div class="form-group">
                                    <label for="employee_id">{{ __('Employees') }}:</label>
                                    <br>
                                    <select name="employees[]" size="5" multiple>
                                    @foreach($employees as $employee)
                                        <option value="{{ $employee->id }}"
                                            {{ ($employee->id == old('employee_id')) ? 'selected="selected"' : '' }}
                                        >
                                            {{ $employee->name }}
                                        </option>
                                    @endforeach
                                        <option value="audi">Audi</option>
                                    </select>

                                    @if($errors->has('employee_id'))
                                        <div class="alert-danger">{{ $errors->first('employee_id') }}</div>
                                    @endif
                                </div>


                                <div class="form-group">
                                    <label for="employee_id">{{ __('Employees 2') }}:</label>
                                    <br>

                                    @foreach($employees as $employee)
                                        <input name="employees[]" type="checkbox" value="{{ $employee->id }}" {{ ($employee->id == old('employee_id')) ? 'selected' : '' }}>
                                            {{ $employee->title }}
                                        </input>
                                    @endforeach


                                    @if($errors->has('employee_id'))
                                        <div class="alert-danger">{{ $errors->first('employee_id') }}</div>
                                    @endif
                                </div>



                        <div class="form-group">
                            <a class="btn btn-sm btn-success" href="{{ route('company.create') }}">{{ __('Create') }}</a>
                        </div>

                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
