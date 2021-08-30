<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Data Website</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/templatecrud/sb-admin-2.min.css') }}"/>
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('css/templatecrud/bootstrap.css') }}"/>--}}
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('css/templatecrud/font-awesome.css') }}"/>--}}
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('css/templatecrud/custom-styles.css') }}"/>--}}
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('css/templatecrud/font-opensans.css') }}"/>--}}
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('js/templatecrud/dataTables/dataTables.bootstrap.css')}}"/>--}}
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('js/templatecrud/morris/morris-0.4.3.min.css')}}"/>--}}
</head>
<body id="page-top">
<div id="wrapper">
    @include('sidebar')
    @yield('main')
</div>
<script type="text/js" src="{{ asset('js/app.js')}}" ></script>
<script type="text/js" src="{{ asset('js/templatecrud/sb-admin-2.min.js') }}" ></script>
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
</body>
</html>
