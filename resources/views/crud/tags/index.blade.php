@extends('layouts.crud')

@section('main')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header align-items-center justify-content-between">
                    <center><h5 class="m-0 font-weight-bold text-primary">Daftar Tag</h5></center>
                </div>
                <div class="card-body" style="padding: 4rem;">
                    <div class="d-flex flex-row-reverse">
                        <a style="margin-bottom: 1em;" href="{{ route('tags.create')}}" class="btn btn-primary btn-sm pull-right">Tambah Tag</a>
                    </div>
                    <table id="datatag" class="table table-striped table-bordered" style="width: 100%">
                        <thead>
                        <tr>
                            <th>ID Tag</th>
                            <th>Nama Tag</th>
                            <th>Actions</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tag as $t)
                            <tr>
                                <td>{{$t->id_tag}}</td>
                                <td>{{$t->nama_tag}}</td>
                                <td>
                                    <a href="{{ route('tags.edit',$t->id_tag)}}" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('tags.destroy', $t->id_tag)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input class="btn btn-danger" type="submit" value="Delete"></input>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="col-sm-12">
                        @if(session()->get('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#datatag').DataTable();
        } );
    </script>
@endsection
