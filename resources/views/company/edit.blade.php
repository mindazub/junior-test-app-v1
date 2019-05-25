@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">SDSFSF</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="form-group">
                            <a class="btn btn-sm btn-success" href="{{ route('company.create') }}">{{ __('Create New Company') }}</a>
                        </div>

                        <table class="table" style="">
                            <tr>
                                <th>Logo</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Website</th>
                                <th>Options</th>
                            </tr>






                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
