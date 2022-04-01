@extends('layouts.homepage')

@section('main')
<div class="container" style="padding: 4em;">
    <h3 class="text-center" style="font-weight: bold">Majalah Seputar Litbang</h3>
    &nbsp;
    <div class="row text-center">
        @foreach($majalah as $m)
            @if($loop->iteration % 4 == 0 || $loop->iteration == 0)
                <div class="row">
            @endif
                <div class="col-md-3">
                    <img src="{{asset('storage'.$m->link_gambar)}}" style="width: 60%;">
                    <h5 style="color: #0c0c0c; font-weight: bold; font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;">{{$m->judul_post}}</h5>
                    <a href="{{$m->link_post}}" target="_blank"><button type="button" class="btn btn-primary btn-xs">Unduh Majalah</button></a>
                </div>
            @if($loop->iteration % 4 == 0 || $loop->iteration == 0)
                </div>
            @endif
        @endforeach
    </div>
    &nbsp;
</div>
@endsection
