@extends('layouts.crud')

@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Tambah Tag') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('tags.store')}}">
                            @csrf
                            <div class="form-group row">
                                <label for="nama_tag" class="col-md-4 col-form-label text-md-right">{{ __('Nama Tag*') }}</label>
                                <div class="col-md-6">
                                    <input id="nama_tag" type="text" class="form-control @error('nama_tag') is-invalid @enderror" name="nama_tag" value="{{ old('nama_tag')}}" autocomplete="nama_tag" autofocus>
                                    @error('nama_tag')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Tambah Tag') }}
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
