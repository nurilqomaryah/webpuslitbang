@extends('layouts.crud')

@section('main')

    <div class="row">
        <div>
            <a style="margin: 20px;" href="{{ route('roles.create')}}" class="btn btn-primary">New Role</a>
        </div>
        <div class="col-sm-12">
            <h3 class="display-3">List Roles</h3>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>ID Role</td>
                    <td>Nama Role</td>
                    <td>Deskripsi</td>
                    <td colspan = 2>Actions</td>
                </tr>
                </thead>
                <tbody>
                @foreach($role as $r)
                    <tr>
                        <td>{{$r->id_role}}</td>
                        <td>{{$r->nama_role}}</td>
                        <td>{{$r->deskripsi}}</td>
                        <td>
                            <a href="{{ route('roles.edit',$r->id_role)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('roles.destroy', $r->id_role)}}" method="post">
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
