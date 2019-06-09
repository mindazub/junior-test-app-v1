@extends('layouts.admin')

@section('content')

    <div class="col-xs-12">
        @if($companies->count())
            <div class="box my-box">
                <div class="box-header">
                    <h2 class="box-title">Company Table</h2><span>&nbsp&nbsp<a class="btn btn-sm btn-success" href="{{ route('company.create') }}">{{ __('Add Company') }}</a></span>

                    @if(isset($q))
                    <h3>Search results for: <span>"{{ $q }}"</span></h3> Go <span><a href="{{ route('company.index') }}">back</a></span>
                    @endif

                    <div class="box-tools">
                        <form class="input-group-btn input-group-sm" style="width: 250px;" action="{{ route('search.company') }}" method="POST" role="search">
                            {{ csrf_field() }}
                            <div class="input-group">
                                <input type="text" class="form-control pull-right" name="q"
                                       placeholder="Search for companies">
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
                            <th>Logo</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Website</th>
                            <th>Options</th>
                        </tr>

                        @foreach($companies as $company)
                            <tr>
                                <td>{{ $company->id }}</td>
                                @if($company->logo == 'logo')
                                    <td><img width="50" src="data:image/png;base64,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" alt="Profile Image"></td>
                                @else
                                    <td><img width="50" src="{{ Storage::url($company->logo ) }}" alt="logo 2">
                                    </td>
                                @endif
                                <td>{{ $company->name }}</td>
                                <td>{{ $company->email }}</td>
                                <td>{{ $company->website }}</td>
                                <td>
                                    <a href="{{ route('company.edit', [$company->id]) }}"
                                       class="btn btn-sm btn-info">{{ __('Edit') }}</a>
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

                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                    <div class="box-footer clearfix" style="background-color: #d2d6de;">

                        {{ $companies->links() }}

                    </div>
                <!-- /. box-footer -->
            </div>
            <!-- /.box -->
        @else
            <div class="box">
                <div class="box-header">
                    <h1>No items found, please try again press <a href="{{ route('company.index') }}">back</a></h1>
                </div>
            </div>
        @endif
    </div>



</div>

@endsection
