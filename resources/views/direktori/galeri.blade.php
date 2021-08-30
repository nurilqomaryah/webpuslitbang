@extends('layouts.homepage')

@section('main')
    <div class="container" style="padding: 4em;">
        <h4 class="text-center" style="font-weight: bold">Galeri Foto</h4>
        &nbsp;
        <div class="row text-center">
            @foreach($galeri as $g)
                <div class="col-md-4">
                    <h5 style="color: #0c0c0c; font-weight: bold; font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;">{{$g->judul_post}}</h5>
                    <img src="{{url('/images/galeri/'.$g->img_post)}}" style="width: 90%;">
                </div>
                <p>
                    &nbsp;
                    &nbsp;
                    &nbsp;
                </p>
            @endforeach
        </div>
        &nbsp;
    </div>
@endsection
