@extends('layouts.homepage')

@section('main')
    <div class="container" style="padding: 4em;">
        <h4 class="text-center" style="font-weight: bold">Pelatihan di Kantor Sendiri (PKS)/PPM</h4>
        &nbsp;
        <div class="row text-center">
            @foreach($pks as $p)
                <div class="col-md-3" style="padding: 1em;">
                    <div class="panel panel-default panel-sharp">
                        <div class="panel-body" style="background-color: #263C92; border-radius: 10px;">
                            <h5 style="color: #0c0c0c; font-weight: bold; font-family: Helvetica Neue, Helvetica, Arial, sans-serif;">{{$p->judul_post}}</h5>
                            <a href="{{$p->link_post}}" target="_blank"></a>
                        </div>
                    </div>
                </div>
            @endforeach
            &nbsp;
        </div>
    </div>
@endsection
