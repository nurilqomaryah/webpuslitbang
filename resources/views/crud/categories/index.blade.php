@extends('layouts.crud')

@section('main')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header align-items-center justify-content-between">
                    <center><h5 class="m-0 font-weight-bold text-primary">Daftar Kategori</h5></center>
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
                        <a style="margin-bottom: 1em;" href="{{ route('categories.create')}}" class="btn btn-primary btn-sm pull-right">Tambah Kategori</a>
                    </div>
                    <table id="datacategory" class="table table-striped table-bordered" style="width: 100%">
                        <thead>
                        <tr>
                            <th>ID Kategori</th>
                            <th>Nama Kategori</th>
                            <th>Actions</td>
                            <th></th>
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
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#datacategory').DataTable();
        } );
    </script>
@endsection
