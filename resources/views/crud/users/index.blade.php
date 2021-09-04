@extends('layouts.crud')

@section('main')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header align-items-center justify-content-between">
                    <center><h5 class="m-0 font-weight-bold text-primary">Daftar User</h5></center>
                </div>
                <div class="card-body">
                    <div class="d-flex flex-row-reverse">
                        <a style="margin-bottom: 1em;" href="{{ route('users.create')}}" class="btn btn-primary btn-sm pull-right">Tambah User</a>
                    </div>
                        <table id="datatab" class="table table-striped table-bordered" style="width: 100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Role</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Status</th>
                                <th>Actions</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->nama_role}}</td>
                                    <td>{{$user->nama_user}}</td>
                                    <td>{{$user->username}}</td>
                                    <td>{{$user->status}}</td>
                                    <td>
                                        <a href="{{ route('users.edit',$user->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('users.destroy', $user->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input class="btn btn-danger btn-sm" type="submit" value="Delete"></input>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    <div class="col-sm-12">
                        @if(session()->get('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#datatab').DataTable();
        } );
    </script>
{{--    <div class="row">--}}
{{--        <div>--}}
{{--            <a style="margin: 20px;" href="{{ route('users.create')}}" class="btn btn-primary">New User</a>--}}
{{--        </div>--}}
{{--        <div class="col-sm-12">--}}
{{--            <h3 class="display-3">List User</h3>--}}
{{--            <table class="table table-striped">--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <td>ID</td>--}}
{{--                    <td>Role</td>--}}
{{--                    <td>Nama</td>--}}
{{--                    <td>Username</td>--}}
{{--                    <td>Password</td>--}}
{{--                    <td>Status</td>--}}
{{--                    <td colspan = 2>Actions</td>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                @foreach($users as $user)--}}
{{--                    <tr>--}}
{{--                        <td>{{$user->id}}</td>--}}
{{--                        <td>{{$user->nama_role}}</td>--}}
{{--                        <td>{{$user->nama_user}}</td>--}}
{{--                        <td>{{$user->username}}</td>--}}
{{--                        <td>{{$user->password}}</td>--}}
{{--                        <td>{{$user->status}}</td>--}}
{{--                        <td>--}}
{{--                            <a href="{{ route('users.edit',$user->id)}}" class="btn btn-primary">Edit</a>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <form action="{{ route('users.destroy', $user->id)}}" method="post">--}}
{{--                                @csrf--}}
{{--                                @method('DELETE')--}}
{{--                                <input class="btn btn-danger" type="submit" value="Delete"></input>--}}
{{--                            </form>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                @endforeach--}}
{{--                </tbody>--}}
{{--            </table>--}}
{{--        </div>--}}
{{--        <div class="col-sm-12">--}}
{{--            @if(session()->get('success'))--}}
{{--                <div class="alert alert-success">--}}
{{--                    {{ session()->get('success') }}--}}
{{--                </div>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
