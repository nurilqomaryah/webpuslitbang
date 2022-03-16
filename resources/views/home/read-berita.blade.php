@extends('layouts.homepage')

@section('main')
    <div class="container" style="padding: 4em;">
        <div class="row">
            <div class="content">
                <div class="row">
                    @foreach($baca_berita as $b)
                        <div class="col-md-12">
                            <div class="panel panel-default panel-sharp">
                                <div class="panel-body panel-custom">
                                    <div class="col-md-2 panel-img">
                                        <img alt src="{{asset('storage/images/berita/'.$b->link_gambar)}}" style="height: 170px; margin: 10px;"/>
                                    </div>
                                    <div class="col-md-10">
                                        <h4 style="margin-top: 20px; font-weight: bold;">
                                            {{$b->judul_post}} </br>
                                        </h4>
                                        <p style="font-family: Calibri; text-align: justify"; font-size: 13px;>
                                            {{$b->tgl_post}} - {{$b->isi_post}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
