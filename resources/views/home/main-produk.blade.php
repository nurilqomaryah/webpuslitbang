<div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
    <div class="bg-artikel">
    <div class="container ribbon">
        <div class="row">
            <div class="col-md-9" style="border-radius: 10px;">
                <h3 class="text-center" style="font-weight: bold;">Produk Litbang</h3>
                &nbsp;
                <div class="row">
                    <a href="https://eos.bpkp.go.id/ipms_pro/kms/insight/id" target="_blank">
                        <figure class="shape-img">
                            <div class="col-md-2 text-center" style="padding-right: 0px; padding-top: 10px; padding-bottom: 10px;">
                                <img src="{{url('/images/produk/kc2.png')}}" alt style="width: 80%; height: 15%; border-radius: 10px;"/>
                            </div>
                            <div class="col-md-10">
                                <h4 style="font-weight: bold"><i>Knowledge Center</i></h4>
                                <p style="text-align: justify;">Aplikasi ini digunakan untuk mengidentifikasi, mengambil, menyimpan, memelihara dan membagikan pengetahuan, dengan harapan memberikan manfaat bagi orang lain yang membutuhkannya.</p>
                            </div>
                        </figure>
                    </a>
                    <!--                <div class="col-md-2 col-md-push-4 text-center" style="padding-left: 2em;">-->
                    <!--                    <a href="https://eos.bpkp.go.id/ipms_pro/kms/insight/id">-->
                    <!--                    <figure class="hover-img">-->
                    <!--                        <img src="./image/kc2.png" style="width: 100%; background-color: white;"/>-->
                    <!--                        <figcaption style="font-family: Calibri; font-size: small;">-->
                    <!--                            <h6>Aplikasi ini digunakan untuk mengidentifikasi, mengambil, menyimpan, memelihara dan membagikan pengetahuan, dengan harapan memberikan manfaat bagi orang lain yang membutuhkannya</h6>-->
                    <!--                        </figcaption>-->
                    <!--                    </figure>-->
                    <!--                    </a>-->
                    <!--                </div>-->
                </div>
                &nbsp;
                <div class="row row-space">
                    <div class="col-md-4 text-center">
                        <a href="{{url('produk/jurnal')}}">
                            <figure class="hover-img text-center">
                                <img src="{{url('/images/produk/journal.jpg')}}" alt style="width: 100%; height: 25%;"/>
                                <figcaption style="font-family: Calibri; font-size: small;">
                                    <h6>Jurnal Pengawasan terbit dua kali setahun (bulan September dan Maret) berisi artikel berupa hasil penelitian dan hasil pemikiran/non penelitian </h6>
                                </figcaption>
                            </figure>
                            <span>Jurnal Pengawasan</span>
                        </a>
                    </div>

                    <div class="col-md-4 text-center">
                        <a href="{{url('produk/majalah')}}">
                            <figure class="hover-img">
                                <img src="{{url('/images/produk/majalah.jpg')}}" alt style="width: 100%; height: 25%;"/>
                                <figcaption style="font-family: Calibri; font-size: small;">
                                    <h6>Majalah Seputar Litbang merupakan media komunikasi dan aktualisasi insan Puslitbangwas BPKP mengenai berbagai hal.</h6>
                                </figcaption>
                            </figure>
                            <span>Majalah Seputar Litbang</span>
                        </a>
                    </div>

                    <div class="col-md-4 text-center">
                        <a href="{{url('produk/hasil')}}">
                            <figure class="hover-img">
                                <img src="{{url('/images/produk/laporan2.jpg')}}" alt style="width: 100%; height: 25%;"/>
                                <figcaption style="font-family: Calibri; font-size: small;">
                                    <h6>Hasil Penelitian dan Pengembangan (Litbang) yang telah dihasilkan oleh Puslitbangwas BPKP</h6>
                                </figcaption>
                            </figure>
                            <span>Hasil Litbang</span>
                        </a>
                    </div>

                    <div class="col-md-4 text-center">
                        <a href="{{url('produk/seminar')}}">
                            <figure class="hover-img">
                                <img src="{{url('/images/produk/seminar.jpg')}}" alt style="width: 100%; height: 25%;"/>
                                <figcaption style="font-family: Calibri; font-size: small;">
                                    <h6>Hasil dari seminar yang dilakukan</h6>
                                </figcaption>
                            </figure>
                            <span>Seminar Hasil Litbang</span>
                        </a>
                    </div>

                    <div class="col-md-4 text-center">
                        <a href="{{url('produk/librarycafe')}}">
                            <figure class="hover-img">
                                <img src="{{url('/images/produk/librarycafe.jpg')}}" alt style="width: 100%; height: 25%;"/>
                                <figcaption>
                                    <h6>Kegiatan sharing session</h6>
                                </figcaption>
                            </figure>
                            <span><i>Library Cafe</i></span>
                        </a>
                    </div>

                    <div class="col-md-4 text-center">
                        <a href="{{url('produk/ppm')}}">
                            <figure class="hover-img">
                                <img src="{{url('/images/produk/pks.jpg')}}" alt style="width: 100%; height: 25%;"/>
                                <figcaption style="font-family: Calibri; font-size: small;">
                                    <h6>Hasil Pengetahuan yang dibagikan oleh pegawai Puslitbang</h6>
                                </figcaption>
                            </figure>
                            <span>PKS/PPM</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2 text-center">
                <h3 style="font-weight: bold;">Pengumuman</h3>
                &nbsp;
                <div class="row">
                    @foreach($pengumuman as $p)
                    <div class="col-md-12">
                        <a href="{{$p->link_post}}" target="_blank">
                            <img src="{{url('/images/pengumuman/'.$p->img_post) }}" alt style="width: 100%;"/>
                        </a>
                    </div>
                    <p>
                        &nbsp;
                    </p>
                    @endforeach
                    <div class="col-md-12">
                        <a href="{{url('direktori/pengumuman')}}"><button type="button" class="btn btn-orange" style="color: #263C92;">Pengumuman Lainnya</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
