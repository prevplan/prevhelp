<!DOCTYPE html>
<html lang="de">
    <head>

        <!-- Basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Primary Meta Tags -->
        <title>@yield('meta.title', 'Prävention ist die beste Hilfe') | PrevHelp</title>
        <meta name="title" content="@yield('meta.title', 'Prävention ist die beste Hilfe') | PrevHelp">
        <meta name="description" content="@yield('meta.description')">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ URL::current() }}">
        <meta property="og:title" content="@yield('meta.title', 'Prävention ist die beste Hilfe') | PrevHelp">
        <meta property="og:description" content="@yield('meta.description')">
        <meta property="og:image" content="@yield('image', asset('img/meta-first-aid.jpg'))">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="{{ URL::current() }}">
        <meta property="twitter:title" content="@yield('meta.title', 'Prävention ist die beste Hilfe') | PrevHelp">
        <meta property="twitter:description" content="@yield('meta.description')">
        <meta property="twitter:image" content="@yield('image', asset('img/meta-first-aid.jpg'))">

        <link rel="canonical" href="{{ URL::current() }}" />
                <meta name="author" content="PrevHelp">

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('manifest.json') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ asset('ms-icon-144x144.png') }}">
        <meta name="theme-color" content="#ffffff">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&display=swap" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.min.css') }}">
        <!-- Revolution Slider Addon - Typewriter -->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/rs-plugin/revolution-addons/typewriter/css/typewriter.css') }}" />

        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
        <link rel="stylesheet" href="{{ asset('css/theme-elements.css') }}">
        <link rel="stylesheet" href="{{ asset('css/theme-blog.css') }}">
        <link rel="stylesheet" href="{{ asset('css/theme-shop.css') }}">

        <!-- Current Page CSS -->
        <link rel="stylesheet" href="{{ asset('vendor/rs-plugin/css/settings.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/rs-plugin/css/layers.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/rs-plugin/css/navigation.css') }}">

        <!-- Demo CSS -->


        <!-- Skin CSS -->
        <link rel="stylesheet" href="{{ asset('css/skins/skin-corporate-14.css') }}">

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

        <!-- Head Libs -->
        <script src="{{ asset('vendor/modernizr/modernizr.min.js') }}"></script>

    </head>
    <body class="alternative-font-4 loading-overlay-showing" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 500}">
        <div class="loading-overlay">
            <div class="bounce-loader">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>

        <div class="body">
            @include('layouts.header')

            <div role="main" class="main">
                @yield('body')
            </div>

            @include('layouts.footer')

        </div>

        <script src="{{ mix('js/app.js') }}"></script>

        <!-- Vendor -->

        <script src="{{ asset('js/jquery.appear.min.js') }}"></script>
        <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('js/jquery.cookie.min.js') }}"></script>
        <script src="{{ asset('vendor/popper/umd/popper.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendor/common/common.min.js') }}"></script>
        <script src="{{ asset('vendor/jquery.validation/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
        <script src="{{ asset('vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
        <script src="{{ asset('vendor/jquery.lazyload/jquery.lazyload.min.js') }}"></script>
        <script src="{{ asset('vendor/isotope/jquery.isotope.min.js') }}"></script>
        <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('vendor/vide/jquery.vide.min.js') }}"></script>
        <script src="{{ asset('vendor/vivus/vivus.min.js') }}"></script>

        <!--(remove-empty-lines-end)-->

        <!-- Theme Base, Components and Settings -->
        <script src="{{ asset('js/theme.js') }}"></script>

        <!-- Current Page Vendor and Views -->
        <script src="{{ asset('vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

        <!-- Revolution Slider Addon - Typewriter -->
        <script type="text/javascript" src="{{ asset('vendor/rs-plugin/revolution-addons/typewriter/js/revolution.addon.typewriter.min.js') }}"></script>


        <!-- Theme Custom -->
        <script src="{{ asset('js/custom.js') }}"></script>


        <!-- Theme Initialization Files -->
        <script src="{{ asset('js/theme.init.js') }}"></script>

        @yield('footer')

        <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-12345678-1', 'auto');
            ga('send', 'pageview');
        </script>
         -->

    </body>
</html>
