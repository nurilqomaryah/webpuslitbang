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
                                    <div class="col-md-12 panel-img text-center">
                                        <img alt src="{{asset('storage'.$b->link_gambar)}}" style="height: 270px; margin: 10px;"/>
                                    </div>
                                </br>
                                    <div class="col-md-12">
                                        <h4 style="margin-top: 20px; font-weight: bold; text-align: center;">
                                            {{$b->judul_post}}
                                            </br>
                                        </h4>
                                        </br>
                                        <p style="font-family: Calibri; text-align: right; font-size: 13px;">
                                            {{$b->tgl_post}}
                                        </p>
                                        <p style="font-family: Calibri; text-align: justify; font-size: 13px;">
                                            {{$b->isi_post}}
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
