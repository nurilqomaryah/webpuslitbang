@extends('layouts.crud')

@section('main')

    <div class="row">
        <div>
            <a style="margin: 20px;" href="{{ route('categories.create')}}" class="btn btn-primary">Kategori Baru</a>
        </div>
        <div class="col-sm-12">
            <h3 class="display-3">List Kategori</h3>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>ID Kategori</td>
                    <td>Nama Kategori</td>
                    <td colspan = 2>Actions</td>
                </tr>
                </thead>
                <tbody>
                @foreach($category as $c)
                    <tr>
                        <td>{{$c->id_kategori}}</td>
                        <td>{{$c->nama_kategori}}</td>
                        <td>
                            <a href="{{ route('categories.edit',$c->id_kategori)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('categories.destroy', $c->id_kategori)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Delete"></input>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-sm-12">
            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
        </div>
    </div>
@endsection
