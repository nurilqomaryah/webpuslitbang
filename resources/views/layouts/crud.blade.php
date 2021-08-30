<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/templatecrud/sb-admin-2.min.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/templatecrud/bootstrap.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/templatecrud/custom-styles.css') }}"/>
    </head>
    <body id="page-top">
    <div id="wrapper">
        @include('layouts.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
{{--                @include('menu.top-menu')--}}
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

