
<div class="container" style="padding-top: 3%; padding-bottom: 3%;">
    <div id="home-slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php $first = true; ?>
            @foreach($berita as $b)
            @if($first)
            <div class="item active">
                <?php $first = false; ?>
            @else
            <div class="item">
            @endif
                <div class="col-sm-6">
                    <img src="{{url('/images/kegiatan/'.$b->img_post)}}" class="img-responsive" style="border-radius: 10% !important">
                </div>
                <div class="col-sm-6">
                    <div class="carousel-caption text-justify" style="text-align: justify">
                        <h3>{{$b->judul_post}}</h3>
                        <p>&nbsp; {{$b->isi_post}}</p>
                        <div class="text-right" style="text-align:right">
                            <a href="{{$b->link_post}}" target="_blank" class="btn btn-orange" style="color: #263C92">Baca Selengkapnya
                                <span class="glyphicon glyphicon-arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
                @endforeach
        </div>
        <div class="controllers col-md-12 col-xs-12">
            <!-- Controls -->
            <a class="left carousel-control" href="#home-slider" data-slide="prev">
                <span class="fa fa-chevron-left icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#home-slider" data-slide="next">
                <span class="fa fa-chevron-right icon-next"></span>
            </a>
        </div>
    </div>
</div>
