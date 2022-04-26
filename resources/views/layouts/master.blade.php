<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>Peace Justice & Strong Institution</title>
    <!--  
    Favicons
    =============================================
    -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('images/favicons/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('images/favicons/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/favicons/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/favicons/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/favicons/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('images/favicons/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('images/favicons/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('images/favicons/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/favicons/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('images/favicons/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('images/favicons/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicons/favicon-16x16.png')}}">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('images/favicons/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link href="{{asset('lib/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="{{asset('lib/animate.css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('lib/components-font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/et-line-font/et-line-font.css')}}" rel="stylesheet">
    <link href="{{asset('lib/flexslider/flexslider.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owl.carousel/dist/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owl.carousel/dist/assets/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/magnific-popup/dist/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('lib/simple-text-rotator/simpletextrotator.css')}}" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link id="color-scheme" href="{{asset('css/colors/default.css')}}" rel="stylesheet">
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      @include('inc/loader')  <!-- loader icon -->
      @include('inc/navbar')  <!-- include navigation bar -->
      @yield('content')       <!-- include content from extended pages -->
      @include('inc/footer')  <!-- include footer -->
      @include('inc/gototop') <!-- goto top icon -->
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="{{asset('lib/jquery/dist/jquery.js')}}"></script>
    <script src="{{asset('lib/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('lib/wow/dist/wow.js')}}"></script>
    <script src="{{asset('lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js')}}"></script>
    <script src="{{asset('lib/isotope/dist/isotope.pkgd.js')}}"></script>
    <script src="{{asset('lib/imagesloaded/imagesloaded.pkgd.js')}}"></script>
    <script src="{{asset('lib/flexslider/jquery.flexslider.js')}}"></script>
    <script src="{{asset('lib/owl.carousel/dist/owl.carousel.min.js')}}"></script>
    <script src="{{asset('lib/smoothscroll.js')}}"></script>
    <script src="{{asset('lib/magnific-popup/dist/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('lib/simple-text-rotator/jquery.simple-text-rotator.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
  </body>
</html>