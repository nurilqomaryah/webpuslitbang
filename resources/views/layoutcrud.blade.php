<html>
    <head>
        <title>INV-PN | @yield('pageTitle')</title>
        <meta name="description" content="Aplikasi Inventarisasi Piutang Negara">
        <meta name="keywords" content="DJKN, PN, Piutang, Piutang Negara">
        <meta name="author" content="DJKN | Piutang Negara dan Kekayaan Negara Lainnya | @lastaegis">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/templatecrud/sb-admin-2.min.css') }}"/>
    </head>
    <body id="page-top">
    <div id="wrapper">
        @include('sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('menu.top-menu')
                <div class="container-fluid">
                    @yield('main')
                </div>
            </div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © BPKP | PUSLITBANGWAS NC</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    </body>
</html>
<script type="text/js" src="{{ asset('js/app.js')}}" ></script>
<script type="text/js" src="{{ asset('js/templatecrud/sb-admin-2.min.js') }}" ></script>
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

