
<div class="container">
    <div class="row text-center">
        <div class="col-md-8">
            <a href="http://www.bpkp.go.id/"><img class="logo-img" src="{{url('/images/Logo New 1.png')}}" width="80%" style="float: left;"></a>
        </div>
        <div class="col-md-4">
            <img class="img-responsive" src="{{url('/images/tag-text.png')}}" width="55%" style="float: right; padding-top: 5%;">
        </div>
    </div>
</div>
<nav class="navbar navbar-default boxed-navbar" id="navbar-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <ul class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav" style="alignment: center">
                <li><a href="{{url('home')}}">Beranda</a></li>
                <li class="dropdown dropdown-hover">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('profile/struktur')}}">Struktur Organisasi</a></li>
                        <li><a href="{{url('profile/visi')}}">Visi dan Misi</a></li>
                        <li><a href="{{url('profile/tusi')}}">Tugas Pokok dan Fungsi</a></li>
                        <li><a href="{{url('profile/tujuan')}}">Tujuan dan Sasaran Strategis</a></li>
                        <li><a href="{{url('profile/dukungan')}}">Dukungan SDM</a></li>
                        <li><a href="{{url('profile/pimpinan')}}">Profil Pimpinan</a></li>
                        <li><a href="{{url('profile/sekapur')}}">Sekapur Sirih</a></li>
                        <li><a href="{{url('profile/kapuslitbangwas')}}">Kapuslitbangwas dari Masa ke Masa</a></li>
                    </ul>
                </li>
                <li class="dropdown dropdown-hover">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Informasi Publik <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('informasi/setiap_saat')}}">Informasi Tersedia Setiap Saat</a></li>
                        <li><a href="{{url('informasi/serta_merta')}}">Informasi Serta Merta</a></li>
                        <li><a href="{{url('informasi/berkala')}}">Informasi Berkala</a></li>
                    </ul>
                </li>
                <li class="dropdown dropdown-hover">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Direktori<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('direktori/pengumuman')}}">Pengumuman</a></li>
                        <li><a href="{{url('direktori/kegiatan')}}">Kegiatan/Berita</a></li>
                        <li><a href="{{url('direktori/artikel')}}">Artikel Pengawasan</a></li>
                        <li><a href="{{url('direktori/galeri')}}">Galeri Foto</a></li>
                    </ul>
                </li>
                <li><a href="{{url('kontak')}}">Hubungi Kami</a></li>
                <li><a href="{{url('faq')}}">FAQ</a></li>
            </ul>
        </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
