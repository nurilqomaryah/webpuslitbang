@extends('layouts.crud')

@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Kategori') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('categories.update', $edit_category->id_kategori) }}">
                            @method('PATCH')
                            @csrf
                            <div class="form-group row">
                                <label for="nama_kategori" class="col-md-4 col-form-label text-md-right">{{ __('Nama Kategori') }}</label>
                                <div class="col-md-6">
                                    <input id="nama_kategori" type="text" class="form-control @error('nama_kategori') is-invalid @enderror" name="nama_kategori" value="{{$edit_category->nama_kategori}}" autocomplete="nama_kategori" autofocus>
                                    @error('nama_kategori')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update Kategori') }}
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
