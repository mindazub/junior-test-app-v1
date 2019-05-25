@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Companies</div>

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


                            @foreach($companies as $company)
                            <tr>
                                <td><img width="100" src="{{ $company->logo }}" alt="logo"></td>
                                <td>{{ $company->name }}</td>
                                <td>{{ $company->email }}</td>
                                <td>{{ $company->website }}</td>
                                <td>
                                    <a href="{{ route('company.edit', [$company->id]) }}" class="btn btn-sm btn-info">{{ __('Edit') }}</a>
                                    <br>

                                    <form action="{{ route('company.destroy', [$company->id]) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <input class="btn btn-sm btn-danger" type="submit"
                                        value="{{ __('Delete') }}">
                                    </form>

                                </td>
                            </tr>
                            @endforeach

                        </table>

                    {{ $companies->links() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
