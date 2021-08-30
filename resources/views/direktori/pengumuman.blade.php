@extends('layoutuser')

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
            <a href="{{$p->link_file}}" target="_blank">
                <img src="{{url('/images/pengumuman/'.$p->img_post)}}" style="width: 80%;">
            </a>
        </div>
        @endforeach
    </div>
    &nbsp;
</div>
@endsection
