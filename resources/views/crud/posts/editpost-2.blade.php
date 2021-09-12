@extends('layouts.crud')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Update a Post</h1>
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
            <form method="post" action="{{ route('posts.update', $edit_post->id_post) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="nama_kategori">Kategori:</label>
                    <select name="id_kategori" class="form-control" id="id_kategori" autofocus>
                        @foreach($kategori as $key)
                            <option value="{{$key->id_kategori}}" {{$edit_post->id_kategori == $key->id_kategori ? 'selected' : ''}}>{{$key->nama_kategori}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="judul_post">Judul Post:</label>
                    <input type="text" class="form-control" name="judul_post" value={{ $edit_post->judul_post }} />
                </div>
                <div class="form-group">
                    <label for="isi_post">Isi Post:</label>
                    <input type="text" class="form-control" name="isi_post" value={{ $edit_post->isi_post }} />
                </div>
                <div class="form-group">
                    <img src=""
                    <label for="img_post">File Gambar:</label>
                    <input type="file" class="form-control" name="img_post" value={{ $edit_post->img_post }} />
                </div>
                <div class="form-group">
                    <label for="link_file">Link File:</label>
                    <input type="text" class="form-control" name="link_file" value={{ $edit_post->link_file }} />
                </div>
                <div class="form-group">
                    <label for="nama_tag">Tag:</label>
                    <select name="id_tag" class="form-control" id="id_tag" autofocus>
                        @foreach($tag as $key)
                            <option value="{{$key->id_tag}}" {{$edit_post->id_tag == $key->id_tag ? 'selected' : ''}}>{{$key->nama_tag}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update Data</button>
            </form>
        </div>
    </div>
@endsection
