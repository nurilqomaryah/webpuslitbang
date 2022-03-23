@extends('layouts.homepage')

@section('main')
    <div class="container" style="padding: 4em;">
        <h4 class="text-center" style="font-weight: bold">Galeri Foto</h4>
        &nbsp;
        <div class="row text-center">
            @foreach($galeri as $g)
                @if($loop->iteration % 4 == 0 || $loop->iteration == 0)
                    <div class="row">
                @endif
                <div class="col-md-3" style="padding-bottom: 3rem;">
                    <h5 style="color: #0c0c0c; font-weight: bold; font-family: Helvetica Neue, Helvetica, Arial, sans-serif;">{{$g->judul_post}}</h5>
                    <img src="{{asset('storage'.$g->link_gambar)}}" style="width: 90%; padding-top: 1em; padding-bottom: 1em;">
                </div>
                @if($loop->iteration % 4 == 0 || $loop->iteration == 0)
                    </div>>
                @endif
            @endforeach
        </div>
        &nbsp;
    </div>
@endsection
