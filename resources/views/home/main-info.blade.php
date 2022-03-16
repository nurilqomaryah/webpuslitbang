<div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
    <div class="infografis">
        <div class="container ribbon text-center">
            <div class="row" style="padding-top: 20px;">
                <div class="col-md-3">
                    <div class="card card-default">
                        <div class="card-header" style="background-color: #ffffff;">
                            <h4 style="font-weight: bold; color: #0c199c;">Infografis</h4>
                        </div>
                        <div class="card-body">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <?php $first = true; ?>
                                    @foreach($info as $i)
                                        @if($first)
                                            <div class="item active">
                                                <?php $first = false; ?>
                                                @else
                                                    <div class="item">
                                        @endif
                                        <img src="{{asset('storage'.$i->link_gambar)}}" class="tales-info">
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="card-footer" style="background-color: #ffffff;">
                            <a href="{{url('infografis')}}" style="font-weight: bold; color: #0c199c;">Infografis Lainnya
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-default" style="float: right;">
                        <div class="card-header" style="background-color: #ffffff;">
                            <h4 style="font-weight: bold; color: #0c199c;">Videografis</h4>
                        </div>
                        <div class="card-body">
                            <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <?php $first = true; ?>
                                    @foreach($video as $v)
                                        @if($first)
                                            <div class="item active">
                                                <?php $first = false; ?>
                                                @else
                                                    <div class="item">
                                                        @endif
                                                        <video src="{{url('/images/videografis/'.$v->img_post)}}" class="tales-info">
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="card-footer" style="background-color: #ffffff;">
                            <a href="{{url('videografis')}}" style="font-weight: bold; color: #0c199c;">Videografis Lainnya
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <h4 style="font-weight: bold">Video Terbaru</h4>
                    <iframe width="100%" height="40%" class="col-md-5" style="padding-top: 20px;" src="https://www.youtube.com/embed/ni3QjRcjxwY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
