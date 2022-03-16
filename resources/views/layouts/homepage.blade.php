<html>
<head>
    <title>Puslitbangwas BPKP</title>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/animate.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/custom.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('js/slick-1.8.1/slick/slick.scss')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('js/slick-1.8.1/slick/slick-theme.scss')}}"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300&display=swap" rel="stylesheet">
    <style>
        html{
            scroll-behavior: smooth;
        }
    </style>

</head>
<body>
    @include('home.main-menu')
    @yield('main')
</body>
<footer>
    @include('home.main-footer')
</footer>
</html>
<script type="text/javascript" src="{{URL::asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/templatecrud/sb-admin-2.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/slick-1.8.1/slick/slick.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/jssor.js')}}"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    window.url = window.location.protocol + "//" + window.location.host;
    $(document).ready(function() {
        var dialogShown = localStorage.getItem('dialogShown')
        var visitor = localStorage.getItem('visitor');

        console.log(visitor);

        if (!dialogShown) {
            $(window).load(function(){
                $( "#modal" ).modal('show');
                localStorage.setItem('dialogShown', 1)
            });
        }
        else {
            $("#dialog1").hide();
        }

        if(!visitor) {
            localStorage.setItem('visitor', 1)
            $.ajax({
                url: window.url+'/webpuslitbang/public/visitor-counter',
                method: 'POST'
            });
        }

        //Multi-line
        jssor_1_slider_init = function() {

            var jssor_1_options = {
                $AutoPlay: 1,
                $AutoPlaySteps: 5,
                $SlideDuration: 160,
                $SlideWidth: 200,
                $SlideSpacing: 3,
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,
                    $Steps: 5
                },
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };

        // jssor_1_slider_init();
    });

    document.addEventListener("DOMContentLoaded", function(){
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                document.getElementById('navbar-top').classList.add('navbar-fixed-top');
                // add padding top to show content behind navbar
                navbar_height = document.querySelector('.navbar').offsetHeight;
                document.body.style.paddingTop = navbar_height + 'px';
            } else {
                document.getElementById('navbar-top').classList.remove('navbar-fixed-top');
                // remove padding top from body
                document.body.style.paddingTop = '0';
            }
        });
    });

    AOS.init();
</script>
