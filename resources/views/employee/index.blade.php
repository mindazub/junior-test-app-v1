@extends('layouts.admin')

@section('content')

    <div class="col-xs-12">
        @if($employees->count())
            <div class="box my-box" style="background-color: #ecf0f5;">
                <div class="box-header">
                    <h2 class="box-title">{{ __('Employee Table') }}</h2><span>&nbsp&nbsp<a class="btn btn-sm btn-success" href="{{ route('employee.create', app()->getLocale()) }}">{{ __('Add Employee') }}</a></span>

                    @if(isset($q))
                        <h3>Search results for: <span>"{{ $q }}"</span></h3> Go <span><a href="{{ route('employee.index', app()->getLocale()) }}">back</a></span>
                    @endif

                    <div class="box-tools">
                        <form class="input-group-btn input-group-sm" style="width: 250px;" action="{{ route('search.employee', app()->getLocale()) }}" method="POST" role="search">
                            {{ csrf_field() }}
                            <div class="input-group">
                                <input type="text" class="form-control pull-right" name="q"
                                       placeholder="{{ __('Search for employees') }}">
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
                    <table class="table table-hover" >
                        <tbody><tr>
                            <th>ID</th>
                            <th>{{ __('First Name') }}</th>
                            <th>{{ __('Last Name') }}</th>
                            <th>{{ __('Website') }}</th>
                            <th>{{ __('Phone') }}</th>
                            <th>{{ __('Email') }}</th>
                            <th>{{ __('Company ID') }}</th>
                            <th>{{ __('Options') }}</th>
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
                                    <div class="btn-group" role="group" aria-label="all buttons">
                                        <a type="button"
                                           class="btn btn-sm btn-success"
                                           href="{{ route('employee.show', [app()->getLocale(), $employee]) }}"
                                        >Show</a>
                                        <a type="button"
                                           class="btn btn-sm btn-info btn-secondary"
                                           href="{{ route('employee.edit', [app()->getLocale(), $employee]) }}"
                                        >Edit</a>
                                        <form style="display: flex;" action="{{ route('employee.destroy', [app()->getLocale(), $employee]) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <input class="btn btn-sm btn-danger btn-secondary" type="submit"
                                                   value="{{ __('Delete') }}">
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix" style="background-color: #ecf0f5;">

                    {{ $employees->links() }}

                </div>
                <!-- /. box-footer -->
            </div>
            <!-- /.box -->
        @else
            <div class="box my-box" style="background-color: #ecf0f5;">
                <div class="box-header">
                    <h2 class="box-title">{{ __('Employee Table') }}</h2><span>&nbsp&nbsp<a class="btn btn-sm btn-success" href="{{ route('employee.create', app()->getLocale()) }}">{{ __('Add Employee') }}</a></span>

                    @if(isset($q))
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tbody>

                                <tr>
                                    <th>
                                        <h3>Search results for: <span>"{{ $q }}"</span></h3>
                                    </th>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    @endif

                    <div class="box-tools">
                        <form class="input-group-btn input-group-sm" style="width: 250px;" action="{{ route('search.employee', app()->getLocale()) }}" method="POST" role="search">
                            {{ csrf_field() }}
                            <div class="input-group">
                                <input type="text" class="form-control pull-right" name="q"
                                       placeholder="{{ __('Search for employees') }}"
                                       value="{{ old('q') }}">
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
                        <tbody>

                        <tr>
                            <th>
                                <h3>No items found, please go <a href="{{ Route('employee.index', app()->getLocale()) }}">Back</a> or <a href="{{ route('employee.create', app()->getLocale()) }}">Create an Employee</a></h3>
                            </th>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        @endif
    </div>



    </div>

@endsection
