@extends('layouts.homepage')

@section('main')
<div class="container" style="padding: 4em;">
    <div class="row text-center">
        <div class="text-center">
            <h4 style="font-weight: bold;">Kegiatan Terkini</h4>
        </div>
        <div class="row">
            @foreach($berita as $b)
                <div class="col-md-3 text-center" style="padding-top: 2em;">
                    <img src="{{url('/images/kegiatan/'.$b->img_post)}}" class="img-responsive" style="alignment: center;"/>
                    <h5 style="color: #0c0c0c; font-weight: bold; font-family: 'Comic Sans MS';">
                        {{$b->judul_post}}
                    </h5>
                    <p style="color: #0c0c0c;">
                        <small>{{$b->isi_post}}</small>
                    </p>
                    <a href="{{$b->link_post}}" target="_blank">
                        <button type="button" class="btn btn-primary btn-xs">Baca Selengkapnya</button>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
