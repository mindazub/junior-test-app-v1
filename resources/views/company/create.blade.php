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
                                <input id="logo" class="form-control" type="file" name="logo"
                                       accept=".jpg, .jpeg, .png">
                                @if($errors->has('logo'))
                                    <div class="alert-danger">{{ $errors->first('logo') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <input class="btn btn-success" type="submit" value="{{ __('Create') }}">
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
