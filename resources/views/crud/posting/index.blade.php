@extends('layoutcrud')
<div>
    <a style="margin: 19px;" href="{{route('PostingCtrl.create')}}" class="btn btn-primary">New Post</a>
</div>
@section('main')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="display-3">List Posting</h1>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Judul Post</td>
                    <td>Isi Post</td>
                    <td>File Gambar</td>
                    <td>Kategori</td>
                    <td>Tag</td>
                    <td colspan = 2>Actions</td>
                </tr>
                </thead>
                <tbody>
                @foreach($post as $p)
                    <tr>
                        <td>{{$p->id}}</td>
                        <td>{{$p->judul_post}}</td>
                        <td>{{$p->isi_post}}</td>
                        <td><img width="150px" src="{{ url('/images/'.$p->img_post) }}"></td>
                        <td>{{$p->nama_kategori}}</td>
                        <td>{{$p->nama_tag}}</td>
                        <td>
                            <a href="{{ route('post.edit',$p->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action=""{{ route('post.destroy', $p->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit" value="Delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>
            </div>
@endsection
