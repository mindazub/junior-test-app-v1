@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Employees</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="form-group">
                            <a class="btn btn-sm btn-success" href="{{ route('employee.create') }}">{{ __('Add New Employee') }}</a>
                        </div>

                        <table class="table" style="">
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Company</th>
                                <th>Email</th>
                                <th>Phone</th>
                            </tr>


                            @foreach($employees as $employee)
                                <tr>
                                    <td>{{ $employee->firstName }}</td>
                                    <td>{{ $employee->lastName }}</td>
                                    <td>Company</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->phone }}</td>
                                    <td>
                                        <a href="{{ route('employee.edit', [$employee->id]) }}" class="btn btn-sm btn-info">{{ __('Edit') }}</a>
                                        <br>

                                        <form action="{{ route('employee.destroy', [$employee->id]) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <input class="btn btn-sm btn-danger" type="submit"
                                                   value="{{ __('Delete') }}">
                                        </form>

                                    </td>
                                </tr>
                            @endforeach

                        </table>

                        {{ $employees->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
