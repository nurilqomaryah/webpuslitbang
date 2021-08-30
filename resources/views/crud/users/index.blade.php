@extends('layoutcrud')

@section('main')

    <div class="row">
        <div>
            <a style="margin: 20px;" href="{{ route('users.create')}}" class="btn btn-primary">New User</a>
        </div>
        <div class="col-sm-12">
            <h3 class="display-3">List User</h3>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Role</td>
                    <td>Nama</td>
                    <td>Username</td>
                    <td>Password</td>
                    <td>Status</td>
                    <td colspan = 2>Actions</td>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->nama_role}}</td>
                        <td>{{$user->nama_user}}</td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->password}}</td>
                        <td>{{$user->status}}</td>
                        <td>
                            <a href="{{ route('users.edit',$user->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('users.destroy', $user->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Delete"></input>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-sm-12">
            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
        </div>
    </div>
@endsection
