@extends('layouts.crud')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Update a Role</h1>
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
            <form method="post" action="{{ route('roles.update', $edit_role->id_role) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="nama_role">Nama Role*:</label>
                    <input type="text" class="form-control" name="nama_role" value={{ $edit_role->nama_role}} />
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi:</label>
                    <input type="text" class="form-control" name="deskripsi" value="{{$edit_role->deskripsi}}"/>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
