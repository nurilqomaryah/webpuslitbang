@extends('layoutuser')

@section('main')
<div class="container" style="padding: 4em;">
    <h4 class="text-center" style="font-weight: bold">Videografis</h4>
    <p>
        &nbsp;
        &nbsp;
    </p>
    <div class="row text-center">
        @foreach($video as $v)
        <div class="col-md-4">
            <video controls src="{{url('/images/videografis/'.$v->img_post)}}" style="width: 80%;"></video>
        </div>
        @endforeach
    </div>
    &nbsp;
</div>
@endsection
