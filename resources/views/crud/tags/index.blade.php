@extends('layouts.crud')

@section('main')

    <div class="row">
        <div>
            <a style="margin: 20px;" href="{{ route('tags.create')}}" class="btn btn-primary">Tag Baru</a>
        </div>
        <div class="col-sm-12">
            <h3 class="display-3">List Tag</h3>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>ID Tag</td>
                    <td>Nama Tag</td>
                    <td colspan = 2>Actions</td>
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
