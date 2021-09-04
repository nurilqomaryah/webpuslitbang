@extends('layouts.crud')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Update a Category</h1>
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
            <form method="post" action="{{ route('categories.update', $edit_category->id_category) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="nama_kategori">Nama Kategori*:</label>
                    <input type="text" class="form-control" name="nama_kategori" value={{ $edit_category->nama_kategori}} />
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
