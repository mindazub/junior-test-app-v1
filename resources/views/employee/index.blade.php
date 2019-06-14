@extends('layouts.admin')

@section('content')

    <div class="col-xs-12">
        @if($employees->count())
            <div class="box my-box">
                <div class="box-header">
                    <h2 class="box-title">Employee Table</h2><span>&nbsp&nbsp<a class="btn btn-sm btn-success" href="{{ route('employee.create', app()->getLocale()) }}">{{ __('Add Employee') }}</a></span>

                    @if(isset($q))
                        <h3>Search results for: <span>"{{ $q }}"</span></h3> Go <span><a href="{{ route('employee.index', app()->getLocale()) }}">back</a></span>
                    @endif

                    <div class="box-tools">
                        <form class="input-group-btn input-group-sm" style="width: 250px;" action="{{ route('search.employee', app()->getLocale()) }}" method="POST" role="search">
                            {{ csrf_field() }}
                            <div class="input-group">
                                <input type="text" class="form-control pull-right" name="q"
                                       placeholder="Search for employees">
                                <span class="input-group-btn">
                                        <button type="submit" class="btn btn-default">
                                            <span class="glyphicon glyphicon-search"></span>
                                        </button>
                            </span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tbody><tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Website</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Company ID</th>
                            <th>Options</th>
                        </tr>

                        @foreach($employees as $employee)
                            <tr>
                                <td>{{ $employee->id }}</td>
                                <td>{{ $employee->firstName }}</td>
                                <td>{{ $employee->lastName }}</td>
                                <td>{{ $employee->website }}</td>
                                <td>{{ $employee->phone }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>{{ $employee->company_id }}</td>
                                <td>
                                    <a href="{{ route('employee.edit', [app()->getLocale(), $employee->id]) }}"
                                       class="btn btn-sm btn-info">{{ __('Edit') }}</a>
                                    <br>

                                    <form action="{{ route('employee.destroy', [app()->getLocale(), $employee->id]) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <input class="btn btn-sm btn-danger" type="submit"
                                               value="{{ __('Delete') }}">
                                    </form>

                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix" style="background-color: #d2d6de;">

                    {{ $employees->links() }}

                </div>
                <!-- /. box-footer -->
            </div>
            <!-- /.box -->
        @else
            <div class="box">
                <div class="box-header">
                    <h1>No items found, please try again press <a href="{{ route('employee.index', app()->getLocale()) }}">back</a></h1>
                </div>
            </div>
        @endif
    </div>



    </div>

@endsection
