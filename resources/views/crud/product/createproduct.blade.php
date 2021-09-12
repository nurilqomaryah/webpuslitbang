@extends('layouts.crud')

@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h3 class="display-3">Tambah Post</h3>
        &nbsp;
        <div>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }} <br/>
                    @endforeach
                </div>
            @endif
            <form action="{{route('products.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <b>Kategori</b><br/>
                    <select name="id_kategori" class="form-control" id="id_kategori" autofocus>
                        <option value="">{{'--Pilih Kategori--'}}</option>
                        @foreach($id_kategori as $key)
                            <option value="{{$key->id_kategori}}">{{$key->nama_kategori}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <b>Judul Post*</b><br/>
                    <input type="text" class="form-control" name="judul_post"/>
                </div>
                <div class="form-group">
                    <b>Isi Post</b>
                    <textarea class="form-control" name="isi_post"></textarea>
                </div>
                <div class="form-group">
                    <b>File Gambar*</b><br/>
                    <input type="file" class="form-control" name="img_post">
                </div>
                <div class="form-group">
                    <b>Link Post</b><br/>
                    <input type="text" class="form-control" name="link_post"/>
                </div>
                <div class="form-group">
                    <b>Tag*</b><br/>
                    <select name="id_tag" class="form-control" id="id_tag" autofocus>
                        <option value="">{{'--Pilih Tag--'}}</option>
                        @foreach($id_tag as $key)
                            <option value="{{$key->id_tag}}">{{$key->nama_tag}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Post</button>
            </form>
        </div>
    </div>
</div>
@endsection

