@extends('layouts.homepage')

@section('main')
<div class="container" style="padding: 4em;">
    <h4 class="text-center" style="font-weight: bold">Hasil Litbang</h4>
    &nbsp;
    <div class="row">
        @foreach($hasil as $h)
        <div class="col-md-3">
            <img src="{{url('images/hasil/Cover PPM_ok_resize(1).jpg')}}" class="img-responsive" style="width: 60%;">
            <h5 style="color: #0c0c0c; font-weight: bold; font-family: 'Comic Sans MS';">{{$h->judul_post}}</h5>
            <p style="color: #0c0c0c;"><small>{{$h->isi_post}}</small></p>
            <a href="{{$h->link_file}}" target="_blank"><button type="button" class="btn btn-primary btn-xs">Unduh Jurnal</button></a>
        </div>
        @endforeach
    </div>
    &nbsp;
    &nbsp;
    <div class="col-md-12">
        <p>* Hanya bisa diakses oleh pegawai BPKP <br>
        Masyarakat yang ingin mengakses dapat menghubungi Telp. +6221 85910031 atau mengirim permintaan melalui menu Hubungi Kami</p>
    </div>
</div>
@endsection
