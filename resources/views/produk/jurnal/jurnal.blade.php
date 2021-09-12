@extends('layouts.homepage')

@section('main')
<div class="container" style="padding: 4em;">
    <h4 class="text-center" style="font-weight: bold">Jurnal Pengawasan</h4>
    &nbsp;
    <div class="row text-center">
        @foreach($jurnal as $j)
        <div class="col-md-3">
            <img src="{{url('/images/jurnal/'.$j->img_post)}}" style="width: 60%;">
            <h5 style="color: #0c0c0c; font-weight: bold; font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;">{{$j->judul_post}}</h5>
            <a href="{{$j->link_post}}" target="_blank"><button type="button" class="btn btn-primary btn-xs">Unduh Jurnal</button></a>
        </div>
        @endforeach
    </div>
    &nbsp;
</div>
@endsection
