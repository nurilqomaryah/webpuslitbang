@extends('layoutcrud')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Update a user</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
            @endif
            <form method="post" action="{{ route('users.update', $edit_user->id_user) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <select name="id_role" class="form-control" id="id_role" autofocus>
                        @foreach($role as $key)
                            <option value="{{$key->id_role}}" {{$edit_user->id_role == $key->id_role ? 'selected' : ''}}>{{$key->nama_role}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama_user">Name:</label>
                    <input type="text" class="form-control" name="nama_user" value={{ $edit_user->nama_user }} />
                </div>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" name="username" value={{ $edit_user->username }} />
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" value={{ $edit_user->password }} />
                </div>
                <div class="form-group">
                    <label for="status">Status:</label>
                    @if($edit_user->status == 1)
                        Aktif
                    @else
                        Tidak Aktif
                    @endif
                    <input type="text" class="form-control" name="status" value={{ $edit_user->status }} />

                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
