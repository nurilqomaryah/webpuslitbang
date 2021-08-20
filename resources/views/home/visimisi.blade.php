<html>
<head>
    <title>Puslitbangwas BPKP</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="css/custom.css"/>
    <link rel="stylesheet" type="text/css" href="./js/slick-1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="./js/slick-1.8.1/slick/slick-theme.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<?php include ("module/navigation/main-menu.php"); ?>

<div class="container" style="padding: 2em; text-align: justify;">
    <h4 class="text-center" style="font-weight: bold">Visi dan Misi Puslitbangwas</h4>
    &nbsp;
    <p style="font-weight: bold">Visi</p>
    <p>Sesuai dengan Pasal 2 Peraturan Kepala BPKP Nomor 5 Tahun 2015 tentang Strategis BPKP 2015-2019, Renstra BPKP wajib dijadikan acuan bagi seluruh unit organisasi di lingkungan BPKP dalam penyusunan rencana strategis unit kerja. Untuk itu, sejalan dengan visi organisasi BPKP, pernyataan visi Puslitbangwas BPKP adalah sebagai berikut: </p>
    <p class="text-center"> "Pusat Penelitian dan Pengembangan Pengawasan Yang Terpercaya dalam mendukung BPKP Berkelas Dunia" </p>
    <p>

    </p>
    <p style="font-weight: bold">Misi</p>
    <p>Mengacu pada tugas dan fungsi Puslitbangwas sesuai Keputusan Kepala BPKP Nomor KEP-06.00.00-080/K/2001 tanggal 20 Februari 2001 tentang Organisasi dan Tata Kerja Badan Pengawasan Keuangan dan Pembangunan, Peraturan Pemerintah No. 60 Tahun 2008 tentang  SPIP, serta visi Puslitbangwas  2015−2019, maka misi Puslitbangwas BPKP adalah : </p>
    <p>
        1. Menyelenggarakan penelitian dan pengembangan yang mendukung peningkatan Akuntabilitas Pengelolaan Keuangan dan Pembangunan Nasional </br>
        2. Penelitian dan Pengembangan yang Mendukung Pengembangan SPIP </br>
        3. Penelitian dan Pengembangan yang Mendukung Peningkatan Kapabilitas Pengawasan Intern Pemerintah yang Profesional dan Kompeten
    </p>
</div>
</body>
<footer>
    <?php include ("module/footer/main.php"); ?>
</footer>
</html>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/slick-1.8.1/slick/slick.js"></script>
<script type="text/javascript" src="js/jssor.js"></script>
<script>
    $(document).ready(function() {
        var dialogShown = localStorage.getItem('dialogShown')

        if (!dialogShown) {
            $(window).load(function(){
                $( "#modal" ).modal('show');
                localStorage.setItem('dialogShown', 1)
            });
        }
        else {
            $("#dialog1").hide();
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
</script>