@extends('layouts.crud')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Tambah Role</h1>
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
                <form method="post" action="{{route('roles.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="nama_role">Nama Role*:</label>
                        <input type="text" class="form-control" name="nama_role"/>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi:</label>
                        <input type="text" class="form-control" name="deskripsi"/>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Role</button>
                </form>
            </div>
        </div>
    </div>
@endsection
