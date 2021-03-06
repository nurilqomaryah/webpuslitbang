@extends('layouts.crud')

@section('main')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header align-items-center justify-content-between">
                    <center><h5 class="m-0 font-weight-bold text-primary">Daftar Post</h5></center>
                </div>
                <div class="card-body" style="padding: 4rem;">
                    <div class="col-sm-12">
                        @if(session()->get('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                    </div>
                    <div class="d-flex flex-row-reverse">
                        <a style="margin-bottom: 1em;" href="{{ route('posts.create')}}" class="btn btn-primary btn-sm pull-right">Tambah Post</a>
                    </div>
                    <table id="datapost" class="table table-striped table-bordered" style="width: 100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Judul Post</th>
                            <th>Tag</th>
                            <th>Tanggal Buat</th>
                            <th>Nama Pembuat</th>
                            <th>Actions</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $p)
                            <tr>
                                <td>{{$p->id}}</td>
                                <td>{{$p->judul_post}}</td>
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
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#datapost').DataTable({
                "order": [[ 3, "desc" ]]
            });
        } );
    </script>
@endsection
