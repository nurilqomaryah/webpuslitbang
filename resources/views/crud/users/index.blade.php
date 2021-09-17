@extends('layouts.crud')

@section('main')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header align-items-center justify-content-between">
                    <center><h5 class="m-0 font-weight-bold text-primary">Daftar User</h5></center>
                </div>
                <div class="card-body" style="padding: 4rem;">
                    <div class="col-sm-12">
                        @if(session()->get('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                    </div>
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
                                    <td>
                                        @if($user->status == 1)
                                            Aktif
                                        @else
                                            Non-Aktif
                                        @endif
                                    </td>
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
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#datatab').DataTable();
        } );
    </script>
@endsection

