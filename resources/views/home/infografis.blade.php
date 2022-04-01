@extends('layouts.homepage')

@section('main')
<div class="container" style="padding: 4em;">
    <h4 class="text-center" style="font-weight: bold">Infografis</h4>
    <p>
        &nbsp;
        &nbsp;
    </p>
    <div class="row text-center">
        @foreach($grafis as $g)
        <div class="col-md-4">
            <img src="{{{asset('storage'.$g->link_gambar)}}}" style="width: 80%;">
        </div>
        @endforeach
    </div>
    &nbsp;
</div>
@endsection
