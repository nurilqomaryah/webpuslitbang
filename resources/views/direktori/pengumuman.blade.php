@extends('layouts.homepage')

@section('main')
<div class="container" style="padding: 4em;">
    <h4 class="text-center" style="font-weight: bold">Pengumuman</h4>
    <p>
        &nbsp;
        &nbsp;
    </p>
    <div class="row text-center">
        @foreach($pengumuman as $p)
        <div class="col-md-3">
            <a href="{{$p->link_post}}" target="_blank">
                <img src="{{asset('storage'.$p->link_gambar)}}" style="width: 80%;">
            </a>
        </div>
        @endforeach
    </div>
    &nbsp;
</div>
@endsection
