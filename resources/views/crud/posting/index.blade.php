@extends('layouts.crud')

@section('main')
    <div class="row">
        <div>
            <a style="margin: 19px;" href="{{route('posts.create')}}" class="btn btn-primary">New Post</a>
        </div>
        <div class="col-md-12">
            <h3 class="display-3 text-center">List Posting</h3>
            &nbsp;
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Judul Post</td>
                    <td>Kategori</td>
                    <td>Tag</td>
                    <td>Tanggal Buat</td>
                    <td>Nama Pembuat</td>
                    <td colspan = 2>Actions</td>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $p)
                    <tr>
                        <td>{{$p->id}}</td>
                        <td>{{$p->judul_post}}</td>
                        <td>{{$p->nama_kategori}}</td>
                        <td>{{$p->nama_tag}}</td>
                        <td>{{$p->tgl_post}}</td>
                        <td>{{$p->nama_user}}</td>
                        <td>
                            <a href="{{ route('posts.edit',$p->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('posts.destroy', $p->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Delete"></input>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        <div>
    </div>
@endsection
