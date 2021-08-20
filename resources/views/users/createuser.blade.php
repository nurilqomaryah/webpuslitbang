@extends('layoutcrud')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Tambah User</h1>
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
                        <label for="id_role">Role:</label>
                        <input type="text" class="form-control" name="id_role"/>
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
                        <input type="text" class="form-control" name="password"/>
                    </div>
                    <div class="form-group">
                        <label for="status">Status:</label>
                        <input type="text" class="form-control" name="status"/>
                    </div>
                    <button type="submit" class="btn btn-primary-outline">Tambah User</button>
                </form>
            </div>
        </div>
    </div>
@endsection