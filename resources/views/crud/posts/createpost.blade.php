@extends('layouts.crud')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Post') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{route('posts.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="judul_post" class="col-md-4 col-form-label text-md-right">{{ __('Judul Post*') }}</label>
                            <div class="col-md-6">
                                <input id="judul_post" type="text" class="form-control @error('judul_post') is-invalid @enderror" name="judul_post" value="{{ old('judul_post') }}" autocomplete="judul_post" autofocus>
                                @error('judul_post')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="isi_post" class="col-md-4 col-form-label text-md-right">{{ __('Isi Post*') }}</label>
                            <div class="col-md-6">
                                <textarea id="isi_post" type="text" class="form-control @error('isi_post') is-invalid @enderror" name="isi_post" value="{{ old('isi_post') }}" autocomplete="isi_post" autofocus></textarea>
                                @error('isi_post')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="img_post" class="col-md-4 col-form-label text-md-right">{{ __('File Gambar') }}</label>
                            <div class="col-md-6">
                                <input id="img_post" type="file" class="form-control @error('img_post') is-invalid @enderror" name="img_post" value="{{ old('img_post') }}" autocomplete="img_post" autofocus>
                                @error('img_post')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="link_post" class="col-md-4 col-form-label text-md-right">{{ __('Link Post') }}</label>
                            <div class="col-md-6">
                                <input id="link_post" type="text" class="form-control @error('link_post') is-invalid @enderror" name="link_post" value="{{ old('link_post') }}" autocomplete="link_post" autofocus>
                                @error('link_post')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="link_file" class="col-md-4 col-form-label text-md-right">{{ __('Link File') }}</label>
                            <div class="col-md-6">
                                <input id="link_file" type="file" class="form-control @error('link_file') is-invalid @enderror" name="link_file" value="{{ old('link_file') }}" autocomplete="link_file" autofocus>
                                @error('link_file')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="id_tag" class="col-md-4 col-form-label text-md-right">{{ __('Tag*') }}</label>
                            <div class="col-md-6">
                                <select name="id_tag" class="form-control @error('id_tag') is-invalid @enderror" id="id_tag" autocomplete="id_tag" autofocus>
                                    <option value="">{{'--Pilih Tag--'}}</option>
                                    @foreach($id_tag as $key)
                                        <option value="{{$key->id_tag}}">{{$key->nama_tag}}</option>
                                    @endforeach
                                </select>
                                @error('id_tag')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Tambah Post') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace("isi_post");
</script>
@endsection

