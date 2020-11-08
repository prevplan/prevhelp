@extends('layouts.frontend')

@section('meta.title', 'Erste-Hilfe-Kurs in Wuppertal 🦊 für Führerschein und Betrieb')
@section('meta.description', 'Erste-Hilfe-Kurs in Wuppertal für den Führerschein oder Betrieb gesucht? 🤘 Wir haben freie Plätze mit best-price-garantie❗Jetzt schnell online buchen ⏰')

@section('canonical', route('fa.wuppertal'))

@section('critical-css')
    <style>@charset "UTF-8";@font-face{font-family:'Shadows Into Light';font-style:normal;font-weight:400;font-display:swap;src:local('Shadows Into Light'),local('ShadowsIntoLight'),url(https://fonts.gstatic.com/s/shadowsintolight/v10/UqyNK9UOIntux_czAvDQx_ZcHqZXBNQzdcD5.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}.col,.col-lg-10,.col-lg-2{position:relative;width:100%;padding-right:15px;padding-left:15px}@font-face{font-family:"Font Awesome 5 Pro";font-style:normal;font-weight:300;font-display:block;src:url(/webfonts/fa-light-300.eot);src:url(/webfonts/fa-light-300.eot?#iefix) format("embedded-opentype"),url(/webfonts/fa-light-300.woff2) format("woff2"),url(/webfonts/fa-light-300.woff) format("woff"),url(/webfonts/fa-light-300.ttf) format("truetype"),url(/webfonts/fa-light-300.svg#fontawesome) format("svg")}@font-face{font-family:"Font Awesome 5 Pro";font-style:normal;font-weight:400;font-display:block;src:url(/webfonts/fa-regular-400.eot);src:url(/webfonts/fa-regular-400.eot?#iefix) format("embedded-opentype"),url(/webfonts/fa-regular-400.woff2) format("woff2"),url(/webfonts/fa-regular-400.woff) format("woff"),url(/webfonts/fa-regular-400.ttf) format("truetype"),url(/webfonts/fa-regular-400.svg#fontawesome) format("svg")}@font-face{font-family:"Font Awesome 5 Pro";font-style:normal;font-weight:900;font-display:block;src:url(/webfonts/fa-solid-900.eot);src:url(/webfonts/fa-solid-900.eot?#iefix) format("embedded-opentype"),url(/webfonts/fa-solid-900.woff2) format("woff2"),url(/webfonts/fa-solid-900.woff) format("woff"),url(/webfonts/fa-solid-900.ttf) format("truetype"),url(/webfonts/fa-solid-900.svg#fontawesome) format("svg")}.arrow{background:url(/img/arrows.png) no-repeat;width:47px;height:120px;display:inline-block;position:relative}.arrow.hlb{background-position:-209px -101px;width:120px;height:47px}.divider{border:0;height:1px;margin:44px auto;background:rgba(0,0,0,.06);text-align:center;position:relative;clear:both}.divider.divider-small{margin:22px auto;background:0 0}.divider.divider-small hr{width:50px;height:3px;background:#555}.divider.divider-small.divider-small-center{text-align:center}.divider.divider-small.divider-small-center hr{margin-left:auto;margin-right:auto}button{-webkit-appearance:button}button::-moz-focus-inner{padding:0;border-style:none}@media (max-width:575px){.arrow{display:none}}:root{--blue:#007bff;--indigo:#6610f2;--purple:#6f42c1;--pink:#e83e8c;--red:#dc3545;--orange:#fd7e14;--yellow:#ffc107;--green:#28a745;--teal:#20c997;--cyan:#17a2b8;--white:#fff;--gray:#6c757d;--gray-dark:#343a40;--primary:#007bff;--secondary:#6c757d;--success:#28a745;--info:#17a2b8;--warning:#ffc107;--danger:#dc3545;--light:#f8f9fa;--dark:#343a40;--breakpoint-xs:0;--breakpoint-sm:576px;--breakpoint-md:768px;--breakpoint-lg:992px;--breakpoint-xl:1200px;--font-family-sans-serif:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-family-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace}*,::after,::before{box-sizing:border-box}html{font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%}header,nav,section{display:block}body{margin:0;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";font-size:1rem;font-weight:400;line-height:1.5;color:#212529;text-align:left;background-color:#fff}h1,h2{margin-top:0}p,ul{margin-top:0;margin-bottom:1rem}ul ul{margin-bottom:0}strong{font-weight:bolder}a{color:#007bff;text-decoration:none;background-color:transparent}img{vertical-align:middle;border-style:none}button{border-radius:0}button{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}button{overflow:visible}button{text-transform:none}[type=button],button{-webkit-appearance:button}[type=button]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}h1,h2{margin-bottom:.5rem;font-weight:500;line-height:1.2}h1{font-size:2.5rem}h2{font-size:2rem}.lead{font-size:1.25rem;font-weight:300}hr{box-sizing:content-box;height:0;overflow:visible;margin-top:1rem;margin-bottom:1rem;border:0;border-top:1px solid rgba(0,0,0,.1)}.container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:576px){.container{max-width:540px}}@media (min-width:768px){.container{max-width:720px}}@media (min-width:992px){.container{max-width:960px}}@media (min-width:1200px){.container{max-width:1140px}}.row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}.col,.col-3,.col-9,.col-lg-10,.col-lg-2,.col-lg-6{position:relative;width:100%;padding-right:15px;padding-left:15px}.col{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.order-2{-ms-flex-order:2;order:2}@media (min-width:992px){.col-lg-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-lg-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-lg-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.order-lg-1{-ms-flex-order:1;order:1}}.btn{display:inline-block;font-weight:400;color:#212529;text-align:center;vertical-align:middle;background-color:transparent;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;line-height:1.5;border-radius:.25rem}.btn-dark{color:#fff;background-color:#343a40;border-color:#343a40}.collapse:not(.show){display:none}.dropdown{position:relative}.dropdown-toggle{white-space:nowrap}.dropdown-toggle::after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:.3em solid;border-right:.3em solid transparent;border-bottom:0;border-left:.3em solid transparent}.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:10rem;padding:.5rem 0;margin:.125rem 0 0;font-size:1rem;color:#212529;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.15);border-radius:.25rem}.dropdown-item{display:block;width:100%;padding:.25rem 1.5rem;clear:both;font-weight:400;color:#212529;text-align:inherit;white-space:nowrap;background-color:transparent;border:0}.nav{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;padding-left:0;margin-bottom:0;list-style:none}.nav-link{display:block;padding:.5rem 1rem}.nav-pills .nav-link{border-radius:.25rem}.breadcrumb{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;padding:.75rem 1rem;margin-bottom:1rem;list-style:none;background-color:#e9ecef;border-radius:.25rem}.border-top-0{border-top:0!important}.border-bottom-0{border-bottom:0!important}.d-none{display:none!important}.justify-content-start{-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-end{-ms-flex-pack:end!important;justify-content:flex-end!important}.float-left{float:left!important}.w-auto{width:auto!important}.m-0{margin:0!important}.mb-0{margin-bottom:0!important}.mt-1{margin-top:.25rem!important}.mr-1{margin-right:.25rem!important}.mb-2{margin-bottom:.5rem!important}.mb-3{margin-bottom:1rem!important}.mr-4{margin-right:1.5rem!important}.mt-5{margin-top:3rem!important}.py-2{padding-top:.5rem!important}.py-2{padding-bottom:.5rem!important}.py-3{padding-top:1rem!important}.py-3{padding-bottom:1rem!important}.pt-4{padding-top:1.5rem!important}.p-5{padding:3rem!important}@media (min-width:768px){.d-md-block{display:block!important}}.text-right{text-align:right!important}.far,.fas{-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;display:inline-block;font-style:normal;font-variant:normal;text-rendering:auto;line-height:1}.fa-angle-right:before{content:"\f105"}.fa-award:before{content:"\f559"}.fa-bars:before{content:"\f0c9"}.fa-calendar:before{content:"\f133"}.fa-envelope:before{content:"\f0e0"}.fa-handshake:before{content:"\f2b5"}.fa-mug-hot:before{content:"\f7b6"}.fa-phone:before{content:"\f095"}.far{font-family:"Font Awesome 5 Pro"}.far{font-weight:400}.fas{font-family:"Font Awesome 5 Pro";font-weight:900}:root{--animate-duration:1s;--animate-delay:1s;--animate-repeat:1}button::-moz-focus-inner{padding:0;border:0}html{direction:ltr;overflow-x:hidden;box-shadow:none!important;-webkit-font-smoothing:antialiased}body{background-color:#fff;color:#777;font-family:"Open Sans",Arial,sans-serif;font-size:14px;line-height:26px;margin:0}body a{outline:0!important}.body{background-color:#fff}li{line-height:24px}#header{position:relative;z-index:1030}#header .header-body{display:flex;flex-direction:column;background:#fff;width:100%;border-top:3px solid #ededed;border-bottom:1px solid transparent;z-index:1001}#header .header-container{position:relative;display:flex;flex-flow:row wrap;align-items:center}#header .container{position:relative}#header .header-row{display:flex;flex-grow:1;align-items:center;align-self:stretch;max-height:100%}#header .header-column{display:flex;align-self:stretch;align-items:center;flex-grow:1;flex-direction:column}#header .header-column .header-row{justify-content:inherit}#header .header-top{display:flex;align-items:center;border-bottom:2px solid rgba(0,0,0,.06);min-height:47px}#header .header-top.header-top-default{background:#f7f7f7}#header .header-logo{margin:1rem 0;position:relative;z-index:1}#header .header-logo img{position:relative;top:0}#header .header-nav{padding:1rem 0;min-height:70px}#header .header-nav-top{display:flex;align-self:stretch;align-items:center}#header .header-nav-top .nav>li>a{color:#999;font-size:.9em;padding:6px 10px;display:inline-block}#header .header-nav-top .nav>li>a [class*=fa-]{margin-right:3px;font-size:.8em;position:relative}#header .header-nav-top .nav>li>a{text-decoration:none}@media (max-width:575px){body{font-size:13px}#header .header-nav-top .nav>li:not(.d-none){margin-left:0;padding-left:0}}#header .header-nav-top .nav>li.nav-item:not(.dropdown)>a [class*=fa-]{left:-1px;top:-1px}#header .header-btn-collapse-nav{background:#ccc;color:#fff;display:none;float:right;margin:0 0 0 1rem}#header.header-effect-shrink .header-container{min-height:100px}#header.header-effect-shrink .header-logo{display:flex;align-items:center}@media (min-width:992px){#header .header-nav-main{display:flex!important;height:auto!important}#header .header-nav-main nav{display:flex!important}#header .header-nav-main nav>ul>li{height:100%;align-self:stretch;margin-left:2px}#header .header-nav-main nav>ul>li>a{display:inline-flex;align-items:center;white-space:normal;border-radius:4px;color:#ccc;font-size:12px;font-style:normal;font-weight:700;padding:.5rem 1rem;letter-spacing:-.5px;text-transform:uppercase}#header .header-nav-main nav>ul>li>a:after{display:none}#header .header-nav-main nav>ul>li.dropdown .dropdown-menu{top:-10000px;display:block;opacity:0;left:auto;border-radius:0 4px 4px;border:0;border-top:3px solid #ccc;box-shadow:0 15px 30px -5px rgba(0,0,0,.07);margin:0;min-width:200px;padding:5px 0;text-align:left}#header .header-nav-main nav>ul>li.dropdown .dropdown-menu li a{border-bottom:1px solid #f7f7f7;color:#777;font-size:.8em;font-weight:400;padding:6px 18px;position:relative;text-transform:none;letter-spacing:-.5px}#header .header-nav-main nav>ul>li.dropdown .dropdown-menu li:last-child a{border-bottom:0}#header .header-nav-main.header-nav-main-square nav>ul>li.dropdown .dropdown-menu,#header .header-nav-main.header-nav-main-square nav>ul>li>a{border-radius:0!important}#header .header-nav-main.header-nav-main-dropdown-no-borders nav>ul>li.dropdown .dropdown-menu{border:0!important;border-radius:4px}#header .header-nav{display:flex;align-items:center;flex-grow:1;justify-content:flex-end;align-self:stretch}#header .header-nav.header-nav-links{padding:0}#header .header-nav.header-nav-links .header-nav-main{align-self:stretch;min-height:0;margin-top:0}#header .header-nav.header-nav-links nav>ul>li>a{position:relative;background:0 0!important;padding:0 .9rem;margin:1px 0 0;min-height:60px;height:100%}#header .header-nav.header-nav-links nav>ul>li.dropdown>a:before{border-bottom:0}#header .header-nav.header-nav-links:not(.header-nav-light-text) nav>ul>li>a{color:#444}#header .header-nav-main-effect-2 nav>ul>li.dropdown .dropdown-menu{opacity:0}}@media (max-width:991px){#header .header-nav-main{position:absolute;background:0 0;width:100%;top:100%;left:50%;transform:translate3d(-50%,0,0)}#header .header-nav-main:before{content:'';display:block;position:absolute;top:0;left:50%;width:100vw;height:100%;background:#fff;z-index:-1;transform:translateX(-50%)}#header .header-nav-main nav{max-height:50vh;overflow:hidden;overflow-y:auto;padding:0 15px}#header .header-nav-main nav::-webkit-scrollbar{width:5px}#header .header-nav-main nav::-webkit-scrollbar-thumb{border-radius:0;background:rgba(204,204,204,.5)}#header .header-nav-main nav>ul{padding-top:15px;padding-bottom:15px;flex-direction:column}#header .header-nav-main nav>ul li{border-bottom:1px solid #e8e8e8;clear:both;display:block;float:none;margin:0;padding:0;position:relative}#header .header-nav-main nav>ul li a{font-size:13px;font-style:normal;line-height:20px;padding:7px 8px;margin:1px 0;border-radius:4px;text-align:left}#header .header-nav-main nav>ul li a.dropdown-toggle{position:relative}#header .header-nav-main nav>ul li a.dropdown-toggle:after{content:none}#header .header-nav-main nav>ul li.dropdown .dropdown-menu{background:0 0;padding:0;margin:0;font-size:13px;box-shadow:none;border-radius:0;border:0;clear:both;display:none;float:none;position:static}#header .header-nav-main nav>ul li:last-child{border-bottom:0}#header .header-nav-main nav>ul>li>a{text-transform:uppercase;font-weight:700;margin-top:1px;margin-bottom:1px;color:#ccc}#header .header-nav-main.header-nav-main-square nav>ul>li a{border-radius:0!important}#header .header-btn-collapse-nav{outline:0;display:block;position:relative;z-index:1}#header .header-nav.header-nav-links{min-height:70px}#header .header-logo img{z-index:1}#header .header-nav{display:flex;align-items:center}#header .header-nav-main:not(.header-nav-main-mobile-dark) nav>ul>li>a{color:#00aace}}.page-header{background-color:#212529;margin:0 0 35px;padding:30px 0;position:relative;text-align:left}.page-header h1{color:#fff;display:inline-block;font-size:30px;line-height:1;margin:0;padding:0;font-weight:400;position:relative;top:1px}.page-header.page-header-classic:after{content:'';width:100%;height:5px;background:rgba(255,255,255,.8);position:absolute;bottom:0;left:0}.p-static{position:static!important}.text-2{font-size:.9em!important}.text-4{font-size:1.2em!important}.text-6{font-size:1.8em!important}.text-8{font-size:2.3em!important}.text-uppercase{text-transform:uppercase!important}.font-weight-normal{font-weight:400!important}.font-weight-bold{font-weight:700!important}.font-weight-extra-bold{font-weight:800!important}@media (max-width:767px){#header .container{width:100%}}.breadcrumb{background:0 0;margin:0;padding:0;position:relative;z-index:1}.breadcrumb>li{display:inline-block;font-size:.8em;text-transform:uppercase;text-shadow:none}.breadcrumb>li+li:before{color:inherit;opacity:.5;font-family:'Font Awesome 5 Pro';font-weight:900;content:"\f105";padding:0 7px 0 5px}.btn{font-size:.8rem;padding:.533rem .933rem}.btn-modern{text-transform:uppercase;font-size:.8em;padding:.8rem 1.5rem;font-weight:600}.btn-dark{background-color:#212529;border-color:#212529 #212529 #0a0c0d;color:#fff}hr{background:rgba(0,0,0,.06);border:0;height:1px;margin:22px 0}hr.solid{background:rgba(0,0,0,.06)}.icon-featured{display:inline-block;margin:15px;width:110px;height:110px;border-radius:50%;text-align:center;position:relative;z-index:1;color:#fff;font-size:2.3em;line-height:110px}.icon-featured:after{position:absolute;width:100%;height:100%;border-radius:50%;content:'';box-sizing:content-box}.featured-box{background:#fff;box-sizing:border-box;border-bottom:1px solid #dfdfdf;border-left:1px solid #ececec;border-radius:8px;border-right:1px solid #ececec;box-shadow:0 2px 4px 0 rgba(0,0,0,.05);min-height:100px;position:relative;text-align:center;z-index:1;margin:20px auto}.featured-box .box-content{border-radius:8px;border-top:1px solid rgba(0,0,0,.06);border-top-width:4px;padding:1.8rem;position:relative}.featured-box .box-content:not(.box-content-border-0){top:-1px;border-top-width:4px}.featured-boxes-style-8 .featured-box .icon-featured{display:inline-block;font-size:2em;height:75px;padding:0;width:75px;margin:-15px -15px 0 0;background:#fff;line-height:75px;border:0;color:#777}.featured-boxes-style-8 .featured-box .icon-featured:after{display:none}.featured-boxes .featured-box{margin-bottom:1.5rem;margin-top:1.5rem}h1,h2{color:#212529;font-weight:200;letter-spacing:-.05em;margin:0;-webkit-font-smoothing:antialiased}h1{font-size:2.6em;line-height:44px;margin:0 0 32px}h2{font-size:2.2em;font-weight:300;line-height:42px;margin:0 0 32px}@media (max-width:575px){h2{line-height:40px}}p{color:#777;line-height:26px;margin:0 0 20px}p.lead{line-height:1.8rem}p .alternative-font{display:inline-block;margin-top:-15px;position:relative;top:3px;margin-bottom:-6px}.lead{letter-spacing:-.05em;font-size:1.2rem}a{color:#ccc}.alternative-font{color:#ccc;font-family:"Shadows Into Light",cursive;font-size:1.6em}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}a{color:#00aace}html .text-color-primary{color:#00aace!important}.alternative-font{color:#00aace}html .btn-dark{background-color:#212529;border-color:#212529 #212529 #0a0c0d;color:#fff}#header .header-btn-collapse-nav{background:#00aace}@media (min-width:992px){#header .header-body:not(.h-100){height:auto!important}#header .header-nav-main nav>ul>li>a{color:#00aace}#header .header-nav-main nav>ul>li.dropdown .dropdown-menu{border-top-color:#00aace}}.icon-featured,html .featured-box-primary .icon-featured{background-color:#00aace}html .featured-box-primary .box-content{border-top-color:#00aace}html .featured-boxes-style-8 .featured-box.featured-box-primary .icon-featured{color:#00aace}</style>
@endsection

@section('body')
    <section class="page-header page-header-classic">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>Erste-Hilfe-Kurse</li>
                        <li class="active">Wuppertal</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col p-static">
                    <h1 data-title-border>Erste-Hilfe-Kurse F&uuml;hrerschein, Betrieb und Studium in Wuppertal</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-2">
        <div class="container py-2">

            <div class="row pt-4">
                <div class="col">
                    <div class="mb-3">
                        <h2 class="font-weight-bold text-8 mb-0">
                            Du willst keine Zeit mehr verlieren?
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10">
                    <div>
                        <p class="lead mb-0">
                            Du suchst den <span class="alternative-font">garantiert</span> g&uuml;nstigsten Erste-Hilfe-Kurs in Wuppertal, f&uuml;r Deinen F&uuml;hrerschein, Betrieb, Trainerschein oder Studium? Du brauchst in den n&auml;chsten Tagen einen freien Platz? Perfekt!
                        </p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <a href="{{ route('event.overview') }}" class="btn btn-modern btn-dark mt-1">Jetzt schnell buchen!</a>
                </div>
            </div>

            <div class="row">
                <div class="col py-3">
                    <hr class="solid mt-5 mb-2">
                </div>
            </div>

            <div class="featured-boxes featured-boxes-style-8">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="featured-box featured-box-primary">
                            <div class="box-content p-5">
                                <div class="row">
                                    <div class="col-9">
                                        <h2 class="font-weight-normal text-6">regelm&auml;&szlig;ige Termine</h2>
                                    </div>
                                    <div class="col-3">
                                        <div class="text-right">
                                            <i class="icon-featured far fa-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p>Egal ob F&uuml;hrerschein, Studium oder betrieblicher Ersthelfer: Mit dem Erste-Hilfe-Kurs muss es oft schnell gehen. Daher bieten wir unsere Kurse in Wuppertal jede Woche mehrfach, unter der Woche und am Wochenende, an. Unser Ziel: Immer einen freien Platz innerhalb weniger Tage für jeden unserer Teilnehmer.</p>
                                        <a class="btn btn-modern btn-dark mr-1" href="{{ route('event.overview') }}">jetzt buchen</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="featured-box featured-box-primary">
                            <div class="box-content p-5">
                                <div class="row">
                                    <div class="col">
                                        <i class="icon-featured far fa-handshake float-left mr-4 w-auto"></i> <h2 class="font-weight-normal text-6"><strong class="font-weight-extra-bold">garantiert</strong> zufrieden</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p>Wir möchten, dass Du mit Spaß lernst. Solltest Du bei Deinem Erste-Hilfe-Kurs weder Spaß gehabt, noch etwas gelernt haben, zahlst Du auch nichts. Denn nur wenn wir Dir Handlungskompetenz und Sicherheit vermitteln konnten, möchten wir auch bezahlt werden.</p>
                                        <a class="btn btn-modern btn-dark mr-1" href="{{ route('warranty') }}">ansehen</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="featured-box featured-box-primary">
                            <div class="box-content p-5">
                                <div class="row">
                                    <div class="col">
                                        <i class="icon-featured far fa-award m-0"></i>
                                        <h2 class="font-weight-normal text-6">best price in town</h2>
                                        <div class="divider divider-small divider-small-center">
                                            <hr>
                                        </div>
                                        <p>Dein Alltag ist schon teuer genug und Preise im Internet vergleichen nervt? Das kennen wir und wollen Dir helfen. Daher bieten wir Dir Deinen Erste-Hilfe-Kurs immer zum <strong>garantiert besten Preis in Wuppertal</strong> an. Mit uns schnell sparen, statt lange zu vergleichen!</p>
                                        <a class="btn btn-modern btn-dark mr-1" href="{{ route('warranty') }}">ansehen</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="featured-box featured-box-primary">
                            <div class="box-content p-5">
                                <div class="row">
                                    <div class="col">
                                        <i class="icon-featured far fa-mug-hot m-0"></i>
                                        <h2 class="font-weight-normal text-6">Verpflegung</h2>
                                        <p>Kurstage können sehr lang und anstrengend sein, insbesondere wenn der Blutzuckerspiegel langsam sinkt. Damit Du Dich bei uns den gesamten Kurstag über wohlfühlst, stellen wir Dir selbstverständlich kleine Snacks und Getränke (zum Selbstkostenpreis) zur Verfügung.</p>
                                        <div class="divider divider-small divider-small-center">
                                            <hr>
                                        </div>
                                        <a class="btn btn-modern btn-dark mr-1" href="{{ route('event.overview') }}">jetzt buchen</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <section class="section bg-color-white section-height-3 border-0 mt-5 mb-0">
        <div class="container">

            <div class="row">
                <div class="col">

                    <div class="row align-items-center pt-4">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <img class="img-fluid scale-2 pr-5 pr-md-0 my-4" src="{{ asset('img/car-420.webp') }}" loading="lazy" alt="Frau im Auto" />
                        </div>
                        <div class="col-md-8 pl-md-5">
                            <h2 class="font-weight-normal text-6 mb-3">Wir bieten Dir den <strong class="font-weight-extra-bold">guten Erste-Hilfe-Kurs</strong> in <strong>Wuppertal Vohwinkel</strong></h2>
                            <p class="text-4">Ganz gleich, ob Du den Erste-Hilfe-Kurs f&uuml;r Deinen F&uuml;hrerschein, Dein Studium, Deinen Trainerschein, als Rettungsschwimmer, als betrieblicher Ersthelfer / f&uuml;r den Betrieb oder <i>einfach nur so</i> brauchst... Unsere Schulungen sind kurzweilig, lustig und von den Beh&ouml;rden gem&auml;&szlig; FEV und DGUV bundesweit anerkannt.</p>
                            <p>Bei uns bist Du genau richtig!</p>
                        </div>
                    </div>

                    <hr class="solid my-5">

                    <div class="row align-items-center pt-5 pb-3">
                        <div class="col-md-8 pr-md-5 mb-5 mb-md-0">
                            <h2 class="font-weight-normal text-6 mb-3">Nutze Deine freie Zeit <strong class="font-weight-extra-bold">besser</strong></h2>
                            <p class="text-4">Deine Zeit ist kostbar und freie Tage ohnehin viel zu selten. Daher dauert unser kurzweiliger Kurs nur 7,5 Stunden (9 UE) inkl. Pausen. Außerdem bieten wir Dir in Wuppertal Vohwinkel unsere Kurse mehrmals die Woche, unter der Woche und auch am Wochenende, an.</p>
                            <p>Wir sind da, <strong>wann</strong> Du uns brauchst!</p>
                            <p>Du hast noch Fragen? Dann schaue in unsere <a href="{{ route('question.index') }}">FAQ</a> oder nehme direkt Kontakt zu uns auf!</p>
                        </div>
                        <div class="col-md-4 px-5 px-md-3">
                            <img class="img-fluid scale-2 my-4" src="{{ asset('img/cheers-420.webp') }}" loading="lazy" alt="style switcher" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="call-to-action call-to-action-strong-grey content-align-center call-to-action-in-footer">
        <div class="container py-5">
            <div class="row py-3">
                <div class="col-md-9 col-lg-9">
                    <div class="call-to-action-content">
                        <h2 class="font-weight-normal text-7 mb-0">Komm zu uns und habe Spa&szlig; bei Deinem Erste-Hilfe-Kurs!</h2>
                        <p class="mb-0">Worauf wartest Du noch?</p>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="call-to-action-btn">
                        <a href="{{ route('event.overview') }}" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3 mt-5">Jetzt Kurs buchen</a><span class="arrow hlb d-none d-md-block" data-appear-animation="rotateInUpLeft" style="top: -90px; left: 70%;"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
