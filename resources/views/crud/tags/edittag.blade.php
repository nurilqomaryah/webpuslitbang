@extends('layouts.crud')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Update a Tag</h1>
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
            <form method="post" action="{{ route('tags.update', $edit_tag->id_tag) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="nama_tag">Nama Tag*:</label>
                    <input type="text" class="form-control" name="nama_tag" value={{ $edit_tag->nama_tag}} />
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
