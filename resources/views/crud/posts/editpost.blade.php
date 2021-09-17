@extends('layouts.crud')

@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Post') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{  route('posts.update', $edit_post->id_post) }}">
                            @method('PATCH')
                            @csrf
                            <div class="form-group row">
                                <label for="judul_post" class="col-md-4 col-form-label text-md-right">{{ __('Judul Post*') }}</label>
                                <div class="col-md-6">
                                    <input id="judul_post" type="text" class="form-control @error('judul_post') is-invalid @enderror" name="judul_post" value="{{$edit_post->judul_post}}" autocomplete="judul_post" autofocus>
                                    @error('judul_post')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="isi_post" class="col-md-4 col-form-label text-md-right">{{ __('Isi Post') }}</label>
                                <div class="col-md-6">
                                    <textarea id="isi_post" type="text" class="form-control @error('isi_post') is-invalid @enderror" name="isi_post" value="{{$edit_post->isi_post}}" autocomplete="isi_post" autofocus></textarea>
                                    @error('isi_post')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="file_existing" class="col-md-4 col-form-label text-md-right">{{ __('File Existing')}}</label>
                                <div class="col-md-6">
                                    <img src="{{ asset('storage/'.$edit_post->link_gambar) }}" class="img-responsive" width="50%"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="img_post" class="col-md-4 col-form-label text-md-right">{{ __('File Gambar Baru') }}</label>
                                <div class="col-md-6">
                                    <input id="img_post" type="file" class="form-control @error('img_post') is-invalid @enderror" name="img_post" value="{{$edit_post->img_post}}" autocomplete="img_post" autofocus>
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
                                    <input id="link_post" type="text" class="form-control @error('link_post') is-invalid @enderror" name="link_post" value="{{$edit_post->link_post}}" autocomplete="link_post" autofocus>
                                    @error('link_post')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama_tag" class="col-md-4 col-form-label text-md-right">{{ __('Tag') }}</label>
                                <div class="col-md-6">
                                    <select name="id_tag" class="form-control" id="id_tag" autofocus>
                                        @foreach($tag as $key)
                                            <option value="{{$key->id_tag}}" {{$edit_post->id_tag == $key->id_tag ? 'selected' : ''}}>{{$key->nama_tag}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update Post') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
