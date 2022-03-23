<div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
    <div class="row">
        <div class="text-center">
            <h3 style="font-weight: bold;">Artikel Pengawasan</h3>
        </div>
        <div class="content">
            <div class="row">
                @foreach($artikel as $a)
                <div class="col-md-12">
                    <div class="panel panel-default panel-sharp">
                        <div class="panel-body panel-custom">
                            <div class="col-md-2 panel-img">
                                <img alt src="{{asset('storage'.$a->link_gambar)}}" style="height: 170px; width:100px; margin: 10px;"/>
                            </div>
                            <div class="col-md-10">
                                <h5 style="margin-top: 20px; font-weight: bold;">
                                    {{$a->judul_post}} </br><small><i class="glyphicon glyphicon-calendar"></i> {{$a->tgl_post}}</small>
                                </h5>
                                <p style="font-family: Calibri; text-align: justify"; font-size: 13px;>
                                    {!! $a->isi_post !!}
                                </p>
                                <p>
                                    <a href="{{asset('storage'.$a->link_file)}}" target="_blank" style="font-size: 13px;">Baca Selengkapnya</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div>
                    <a href="{{url('direktori/artikel')}}"><button type="button" class="btn btn-orange col-md-4 col-md-push-4" style="color: #263C92;">Lihat Kumpulan Artikel Pengawasan Lainnya</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
