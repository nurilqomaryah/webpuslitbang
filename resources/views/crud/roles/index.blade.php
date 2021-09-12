@extends('layouts.crud')

@section('main')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header align-items-center justify-content-between">
                    <center><h5 class="m-0 font-weight-bold text-primary">Daftar Role</h5></center>
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
                        <a style="margin-bottom: 1em;" href="{{ route('roles.create')}}" class="btn btn-primary btn-sm pull-right">Tambah Role</a>
                    </div>
                    <table id="datarole" class="table table-striped table-bordered" style="width: 100%">
                        <thead>
                        <tr>
                            <th>ID Role</th>
                            <th>Nama Role</th>
                            <th>Deskripsi</th>
                            <th>Actions</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($role as $r)
                            <tr>
                                <td>{{$r->id_role}}</td>
                                <td>{{$r->nama_role}}</td>
                                <td>{{$r->deskripsi}}</td>
                                <td>
                                    <a href="{{ route('roles.edit',$r->id_role)}}" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('roles.destroy', $r->id_role)}}" method="post">
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
            $('#datarole').DataTable();
        } );
    </script>
@endsection
