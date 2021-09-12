<div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
    <div class="row text-center">
        <div class="text-center">
            <h4 style="font-weight: bold;">Kegiatan Terkini</h4>
        </div>
        <div class="content">
            <div class="row">
                @foreach($berita as $k)
                <div class="col-md-12">
                    <div class="panel panel-default panel-sharp">
                        <div class="panel-body" style="background-color: #263C92; border-radius: 10px;">
                            <h5 style="color: #ffffff;">{{$k->judul_post}}</h5>
                            <img src="{{url('/images/kegiatan/'.$k->img_post) }}" class="img-responsive">
                            <br/>
                            <p style="color: #ffffff;"><small> {{$k->tgl_post}}</br> Di lihat 3866 kali</small></p>
                            <a href="{{$k->link_post}}" target="_blank"><button type="button" class="btn btn-orange btn-xs" style="color: #263C92;">Baca Selengkapnya</button></a>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-md-12">
                    <a href="{{url('direktori/kegiatan')}}"><button type="button" class="btn btn-orange" style="color: #263C92;">Kegiatan Lainnya</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
