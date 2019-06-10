@extends('layouts.admin')

@section('content')

    <div class="col-xs-12">
        @if($users->count())
            <div class="box my-box">
                <div class="box-header">
                    <h2 class="box-title">Users Table</h2>

                    @if(isset($q))
                        <h3>Search results for: <span>"{{ $q }}"</span></h3> Go <span><a href="{{ route('user.index') }}">back</a></span>
                    @endif

                    <div class="box-tools">
                        <form class="input-group-btn input-group-sm" style="width: 250px;" action="{{ route('search.user') }}" method="POST" role="search">
                            {{ csrf_field() }}
                            <div class="input-group">
                                <input type="text" class="form-control pull-right" name="q"
                                       placeholder="Search for users">
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Options</th>
                        </tr>

                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <form action="{{ route('user.destroy', [$user->id]) }}" method="post">
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

                    {{ $users->links() }}

                </div>
                <!-- /. box-footer -->
            </div>
            <!-- /.box -->
        @else
            <div class="box">
                <div class="box-header">
                    <h1>No items found, please try again press <a href="{{ route('user.index') }}">back</a></h1>
                </div>
            </div>
        @endif
    </div>



    </div>

@endsection
