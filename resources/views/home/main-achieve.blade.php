<div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
    <div class="container" style="padding-top: 30px; padding-bottom: 30px;">
        <div class="row">
            @foreach($achieve as $a)
            <div class="col-md-2 text-center col-md-push-4">
                <a href="{{$a->link_file}}" target="_blank">
                    <img src="{{url('/images/penghargaan/'.$a->img_post)}}" class="img-responsive" alt/>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
