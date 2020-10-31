<!DOCTYPE html>
<html lang="de">
    <head>
        <link rel="preload" href="{{ asset('webfonts/fa-brands-400.woff2') }}" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="{{ asset('webfonts/fa-solid-900.woff2') }}" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="{{ asset('webfonts/fa-regular-400.woff2') }}" as="font" type="font/woff2" crossorigin>
        @yield('preload')

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

        <script async id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="abba8fdf-c225-4d04-bc28-668ae183c2f8" data-blockingmode="auto" type="text/javascript"></script>

        <!-- Critical CSS -->
        @yield('critical-css')

        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&display=swap" rel="stylesheet" rel="preload" as="style" type="text/css" media="print" onload="this.media='all';this.onload=null;">


        @hasSection('critical-css')
            <link rel="stylesheet" href="{{ mix('css/app.css') }}" media="print" onload="this.media='all';this.onload=null;">
        @else
            <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @endif
        <!-- Vendor CSS -->
        {{--
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" media="print" onload="this.media='all';this.onload=null;">
        <link rel="stylesheet" href="{{ asset('css/fa-all.min.css') }}" media="print" onload="this.media='all';this.onload=null;">
        <link rel="stylesheet" href="{{ asset('vendor/animate/animate.compat.css') }}" media="print" onload="this.media='all';this.onload=null;">
        <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" media="print" onload="this.media='all';this.onload=null;">
        <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.theme.default.min.css') }}" media="print" onload="this.media='all';this.onload=null;">
        <link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.min.css') }}" media="print" onload="this.media='all';this.onload=null;">

        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{ asset('css/theme.css') }}" media="print" onload="this.media='all';this.onload=null;">
        <link rel="stylesheet" href="{{ asset('css/theme-elements.css') }}" media="print" onload="this.media='all';this.onload=null;">
        <link rel="stylesheet" href="{{ asset('css/theme-blog.css') }}" media="print" onload="this.media='all';this.onload=null;">
        <link rel="stylesheet" href="{{ asset('css/theme-shop.css') }}" media="print" onload="this.media='all';this.onload=null;">
        <!-- Skin CSS -->
        <link rel="stylesheet" href="{{ asset('css/skins/skin-corporate-14.css') }}" media="print" onload="this.media='all';this.onload=null;">
        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}" media="print" onload="this.media='all';this.onload=null;">
        <link rel="stylesheet" href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.min.css') }}" media="print" onload="this.media='all';this.onload=null;">
        <!-- Revolution Slider Addon - Typewriter -->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/rs-plugin/revolution-addons/typewriter/css/typewriter.css') }}" media="print" onload="this.media='all';this.onload=null;">
        <!-- Current Page CSS -->
        <link rel="stylesheet" href="{{ asset('vendor/rs-plugin/css/settings.css') }}" media="print" onload="this.media='all';this.onload=null;">
        <link rel="stylesheet" href="{{ asset('vendor/rs-plugin/css/layers.css') }}" media="print" onload="this.media='all';this.onload=null;">
        <link rel="stylesheet" href="{{ asset('vendor/rs-plugin/css/navigation.css') }}" media="print" onload="this.media='all';this.onload=null;">
        --}}

        <!-- Demo CSS -->

        <!-- Head Libs -->
        <script defer src="{{ asset('vendor/modernizr/modernizr.min.js') }}"></script>
    </head>
    <body>

        <div class="body">
            @include('layouts.header')

            <div role="main" class="main">
                @yield('body')
            </div>

            @include('layouts.footer')

        </div>

        <!-- Vendor -->
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        {{-- <script src="{{ asset('vendor/jquery.cookie/jquery.cookie.min.js') }}"></script> --}}
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendor/common/common.min.js') }}" defer></script>
        <script src="{{ asset('vendor/popper/umd/popper.min.js') }}" defer></script>
        <script src="{{ asset('vendor/jquery.appear/jquery.appear.min.js') }}" defer></script>
        <script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}" defer></script>
        <script src="{{ asset('vendor/jquery.validation/jquery.validate.min.js') }}" defer></script>
        {{-- <script src="{{ asset('vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script> --}}
        {{-- <script src="{{ asset('vendor/jquery.gmap/jquery.gmap.min.js') }}"></script> --}}

        {{-- <script src="{{ asset('vendor/isotope/jquery.isotope.min.js') }}"></script> --}}
        {{-- <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script> --}}
        {{-- <script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script> --}}
        {{-- <script src="{{ asset('vendor/vide/jquery.vide.min.js') }}"></script> --}}
        {{-- <script src="{{ asset('vendor/vivus/vivus.min.js') }}"></script> --}}

        <!--(remove-empty-lines-end)-->

        <!-- Theme Base, Components and Settings -->
        <script src="{{ asset('js/theme.js') }}" defer></script>

        @yield('scripts')

        <!-- Theme Custom -->
        <script src="{{ asset('js/custom.js') }}"></script>


        <!-- Theme Initialization Files -->
        <script src="{{ asset('js/theme.init.js') }}" defer></script>

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
