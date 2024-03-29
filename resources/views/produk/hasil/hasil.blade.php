@extends('layouts.homepage')

@section('main')
    <div class="container" style="padding: 4em;">
        <h4 class="text-center" style="font-weight: bold">Hasil Litbang</h4>
        &nbsp;
        <div class="row text-center">
            @foreach($hasil as $h)
                @if($loop->iteration % 4 == 0 || $loop->iteration == 0)
                    <div class="row">
                        @endif
                        <div class="col-md-3" style="padding: 1em;">
                            <img src="{{asset('storage'.$h->link_gambar)}}" style="width: 60%;">
                            <h5 style="color: #0c0c0c; font-weight: bold; font-family: Helvetica Neue, Helvetica, Arial, sans-serif;">{{$h->judul_post}}</h5>
                            <a href="{{$h->link_post}}" target="_blank"><button type="button" class="btn btn-primary btn-xs">Unduh Hasil Litbang</button></a>
                        </div>
                        @if($loop->iteration % 4 == 0 || $loop->iteration == 0)
                    </div>
                @endif
            @endforeach
            &nbsp;
        </div>
    </div>
@endsection
