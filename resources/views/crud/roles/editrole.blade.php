@extends('layouts.crud')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Role') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('roles.update', $edit_role->id_role) }}">
                        @method('PATCH')
                        @csrf
                        <div class="form-group row">
                            <label for="nama_role" class="col-md-4 col-form-label text-md-right">{{ __('Nama Role') }}</label>
                            <div class="col-md-6">
                                <input id="nama_role" type="text" class="form-control @error('nama_role') is-invalid @enderror" name="nama_role" value="{{$edit_role->nama_role}}" autocomplete="nama_role" autofocus>
                                @error('nama_role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="deskripsi" class="col-md-4 col-form-label text-md-right">{{ __('Deskripsi') }}</label>
                            <div class="col-md-6">
                                <input id="deskripsi" type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{$edit_role->deskripsi}}" autocomplete="deskripsi">
                                @error('deskripsi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Role') }}
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
