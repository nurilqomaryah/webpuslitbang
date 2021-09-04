@extends('layouts.crud')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h3 class="display-3">Tambah User</h3>
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <form method="post" action="{{ route('users.store') }}">
                    @csrf
                    <div class="form-group">
                        <select name="id_role" class="form-control" id="id_role" autofocus>
                            @foreach($id_role as $key)
                                <option value="{{$key->id_role}}">{{$key->nama_role}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_user">Nama:</label>
                        <input type="text" class="form-control" name="nama_user"/>
                    </div>
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" name="username"/>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" name="password"/>
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <label for="status">Status:</label>--}}
{{--                        <input type="text" class="form-control" name="status"/>--}}
{{--                    </div>--}}
                    <button type="submit" class="btn btn-primary-outline">Tambah User</button>
                </form>
            </div>
        </div>
    </div>
@endsection
