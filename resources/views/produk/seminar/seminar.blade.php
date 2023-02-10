@extends('layouts.homepage')

@section('main')
    <div class="container" style="padding: 4em;">
        <h4 class="text-center" style="font-weight: bold">Seminar Hasil Litbang</h4>
        &nbsp;
        <div class="row text-center">
            @foreach($seminar as $s)
                @if($loop->iteration % 4 == 0 || $loop->iteration == 0)
                    <div class="row">
                        @endif
                        <div class="col-md-3" style="padding: 1em;">
                            <img src="{{asset('storage'.$s->link_gambar)}}" style="width: 100%;">
                            <h5 style="color: #0c0c0c; font-weight: bold; font-family: Helvetica Neue, Helvetica, Arial, sans-serif;">{{$s->judul_post}}</h5>
                            <a href="{{$s->link_post}}" target="_blank"><button type="button" class="btn btn-primary btn-xs">Unduh Jurnal</button></a>
                        </div>
                        @if($loop->iteration % 4 == 0 || $loop->iteration == 0)
                    </div>
                @endif
            @endforeach
            &nbsp;
        </div>
    </div>
@endsection
