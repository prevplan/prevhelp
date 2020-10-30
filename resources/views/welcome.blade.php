@extends('layouts.frontend')

@section('header_class', 'header-transparent header-semi-transparent header-semi-transparent-light header-effect-shrink')

@section('critical-css')
    <style>@charset "UTF-8";@font-face{font-family:"Font Awesome 5 Pro";font-style:normal;font-weight:300;font-display:block;src:url(webfonts/fa-light-300.eot);src:url(webfonts/fa-light-300.eot?#iefix) format("embedded-opentype"),url(webfonts/fa-light-300.woff2) format("woff2"),url(webfonts/fa-light-300.woff) format("woff"),url(webfonts/fa-light-300.ttf) format("truetype"),url(webfonts/fa-light-300.svg#fontawesome) format("svg")}@font-face{font-family:"Font Awesome 5 Pro";font-style:normal;font-weight:400;font-display:block;src:url(webfonts/fa-regular-400.eot);src:url(webfonts/fa-regular-400.eot?#iefix) format("embedded-opentype"),url(webfonts/fa-regular-400.woff2) format("woff2"),url(webfonts/fa-regular-400.woff) format("woff"),url(webfonts/fa-regular-400.ttf) format("truetype"),url(webfonts/fa-regular-400.svg#fontawesome) format("svg")}@font-face{font-family:"Font Awesome 5 Pro";font-style:normal;font-weight:900;font-display:block;src:url(webfonts/fa-solid-900.eot);src:url(webfonts/fa-solid-900.eot?#iefix) format("embedded-opentype"),url(webfonts/fa-solid-900.woff2) format("woff2"),url(webfonts/fa-solid-900.woff) format("woff"),url(webfonts/fa-solid-900.ttf) format("truetype"),url(webfonts/fa-solid-900.svg#fontawesome) format("svg")}:root{--blue:#007bff;--indigo:#6610f2;--purple:#6f42c1;--pink:#e83e8c;--red:#dc3545;--orange:#fd7e14;--yellow:#ffc107;--green:#28a745;--teal:#20c997;--cyan:#17a2b8;--white:#fff;--gray:#6c757d;--gray-dark:#343a40;--primary:#007bff;--secondary:#6c757d;--success:#28a745;--info:#17a2b8;--warning:#ffc107;--danger:#dc3545;--light:#f8f9fa;--dark:#343a40;--breakpoint-xs:0;--breakpoint-sm:576px;--breakpoint-md:768px;--breakpoint-lg:992px;--breakpoint-xl:1200px;--font-family-sans-serif:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-family-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace}*,::after,::before{box-sizing:border-box}html{font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%}header,nav{display:block}body{margin:0;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";font-size:1rem;font-weight:400;line-height:1.5;color:#212529;text-align:left;background-color:#fff}ul{margin-top:0;margin-bottom:1rem}ul ul{margin-bottom:0}a{color:#007bff;text-decoration:none;background-color:transparent}img{vertical-align:middle;border-style:none}button{border-radius:0}button{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}button{overflow:visible}button{text-transform:none}button{-webkit-appearance:button}button::-moz-focus-inner{padding:0;border-style:none}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}.container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:576px){.container{max-width:540px}}@media (min-width:768px){.container{max-width:720px}}@media (min-width:992px){.container{max-width:960px}}@media (min-width:1200px){.container{max-width:1140px}}.order-2{-ms-flex-order:2;order:2}@media (min-width:992px){.order-lg-1{-ms-flex-order:1;order:1}}.btn{display:inline-block;font-weight:400;color:#212529;text-align:center;vertical-align:middle;background-color:transparent;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;line-height:1.5;border-radius:.25rem}.collapse:not(.show){display:none}.dropdown{position:relative}.dropdown-toggle{white-space:nowrap}.dropdown-toggle::after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:.3em solid;border-right:.3em solid transparent;border-bottom:0;border-left:.3em solid transparent}.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:10rem;padding:.5rem 0;margin:.125rem 0 0;font-size:1rem;color:#212529;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.15);border-radius:.25rem}.dropdown-item{display:block;width:100%;padding:.25rem 1.5rem;clear:both;font-weight:400;color:#212529;text-align:inherit;white-space:nowrap;background-color:transparent;border:0}.nav{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;padding-left:0;margin-bottom:0;list-style:none}.nav-link{display:block;padding:.5rem 1rem}.nav-pills .nav-link{border-radius:.25rem}.border-top-0{border-top:0!important}.border-bottom-0{border-bottom:0!important}.d-none{display:none!important}.justify-content-start{-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-end{-ms-flex-pack:end!important;justify-content:flex-end!important}.py-2{padding-top:.5rem!important}.py-2{padding-bottom:.5rem!important}@media (min-width:768px){.d-md-block{display:block!important}}.far,.fas{-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;display:inline-block;font-style:normal;font-variant:normal;text-rendering:auto;line-height:1}.fa-angle-right:before{content:"\f105"}.fa-bars:before{content:"\f0c9"}.fa-envelope:before{content:"\f0e0"}.fa-phone:before{content:"\f095"}.far{font-family:"Font Awesome 5 Pro"}.far{font-weight:400}.fas{font-family:"Font Awesome 5 Pro";font-weight:900}:root{--animate-duration:1s;--animate-delay:1s;--animate-repeat:1}button::-moz-focus-inner{padding:0;border:0}html{direction:ltr;overflow-x:hidden;box-shadow:none!important;-webkit-font-smoothing:antialiased}body{background-color:#fff;color:#777;font-family:"Open Sans",Arial,sans-serif;font-size:14px;line-height:26px;margin:0}body a{outline:0!important}.body{background-color:#fff}li{line-height:24px}#header{position:relative;z-index:1030}#header .header-body{display:flex;flex-direction:column;background:#fff;width:100%;border-top:3px solid #ededed;border-bottom:1px solid transparent;z-index:1001}#header .header-container{position:relative;display:flex;flex-flow:row wrap;align-items:center}#header .container{position:relative}#header .header-row{display:flex;flex-grow:1;align-items:center;align-self:stretch;max-height:100%}#header .header-column{display:flex;align-self:stretch;align-items:center;flex-grow:1;flex-direction:column}#header .header-column .header-row{justify-content:inherit}#header .header-top{display:flex;align-items:center;border-bottom:2px solid rgba(0,0,0,.06);min-height:47px}#header .header-top.header-top-default{background:#f7f7f7}#header .header-logo{margin:1rem 0;position:relative;z-index:1}#header .header-logo img{position:relative;top:0}#header .header-nav{padding:1rem 0;min-height:70px}#header .header-nav-top{display:flex;align-self:stretch;align-items:center}#header .header-nav-top .nav>li>a{color:#999;font-size:.9em;padding:6px 10px;display:inline-block}#header .header-nav-top .nav>li>a [class*=fa-]{margin-right:3px;font-size:.8em;position:relative}#header .header-nav-top .nav>li>a{text-decoration:none}@media (max-width:575px){body{font-size:13px}#header .header-nav-top .nav>li:not(.d-none){margin-left:0;padding-left:0}}#header .header-nav-top .nav>li.nav-item:not(.dropdown)>a [class*=fa-]{left:-1px;top:-1px}#header .header-btn-collapse-nav{background:#ccc;color:#fff;display:none;float:right;margin:0 0 0 1rem}#header.header-effect-shrink .header-container{min-height:100px}#header.header-effect-shrink .header-logo{display:flex;align-items:center}html #header.header-transparent{min-height:0!important;width:100%;position:absolute}html #header.header-transparent .header-body:not(.header-border-bottom){border-bottom:0}html:not(.sticky-header-active) #header.header-semi-transparent-light .header-body{background-color:rgba(255,255,255,.8)!important}@media (min-width:992px){#header .header-nav-main{display:flex!important;height:auto!important}#header .header-nav-main nav{display:flex!important}#header .header-nav-main nav>ul>li{height:100%;align-self:stretch;margin-left:2px}#header .header-nav-main nav>ul>li>a{display:inline-flex;align-items:center;white-space:normal;border-radius:4px;color:#ccc;font-size:12px;font-style:normal;font-weight:700;padding:.5rem 1rem;letter-spacing:-.5px;text-transform:uppercase}#header .header-nav-main nav>ul>li>a:after{display:none}#header .header-nav-main nav>ul>li.dropdown .dropdown-menu{top:-10000px;display:block;opacity:0;left:auto;border-radius:0 4px 4px;border:0;border-top:3px solid #ccc;box-shadow:0 15px 30px -5px rgba(0,0,0,.07);margin:0;min-width:200px;padding:5px 0;text-align:left}#header .header-nav-main nav>ul>li.dropdown .dropdown-menu li a{border-bottom:1px solid #f7f7f7;color:#777;font-size:.8em;font-weight:400;padding:6px 18px;position:relative;text-transform:none;letter-spacing:-.5px}#header .header-nav-main nav>ul>li.dropdown .dropdown-menu li:last-child a{border-bottom:0}#header .header-nav-main.header-nav-main-square nav>ul>li.dropdown .dropdown-menu,#header .header-nav-main.header-nav-main-square nav>ul>li>a{border-radius:0!important}#header .header-nav-main.header-nav-main-dropdown-no-borders nav>ul>li.dropdown .dropdown-menu{border:0!important;border-radius:4px}#header .header-nav{display:flex;align-items:center;flex-grow:1;justify-content:flex-end;align-self:stretch}#header .header-nav.header-nav-links{padding:0}#header .header-nav.header-nav-links .header-nav-main{align-self:stretch;min-height:0;margin-top:0}#header .header-nav.header-nav-links nav>ul>li>a{position:relative;background:0 0!important;padding:0 .9rem;margin:1px 0 0;min-height:60px;height:100%}#header .header-nav.header-nav-links nav>ul>li.dropdown>a:before{border-bottom:0}#header .header-nav.header-nav-links:not(.header-nav-light-text) nav>ul>li>a{color:#444}#header .header-nav-main-effect-2 nav>ul>li.dropdown .dropdown-menu{opacity:0}}@media (max-width:991px){html #header.header-transparent .header-body{overflow:hidden}html #header.header-transparent .header-nav-main:before{width:calc(100% - 30px)}html #header.header-transparent .header-nav-main nav{padding:0 30px}#header .header-nav-main{position:absolute;background:0 0;width:100%;top:100%;left:50%;transform:translate3d(-50%,0,0)}#header .header-nav-main:before{content:'';display:block;position:absolute;top:0;left:50%;width:100vw;height:100%;background:#fff;z-index:-1;transform:translateX(-50%)}#header .header-nav-main nav{max-height:50vh;overflow:hidden;overflow-y:auto;padding:0 15px}#header .header-nav-main nav::-webkit-scrollbar{width:5px}#header .header-nav-main nav::-webkit-scrollbar-thumb{border-radius:0;background:rgba(204,204,204,.5)}#header .header-nav-main nav>ul{padding-top:15px;padding-bottom:15px;flex-direction:column}#header .header-nav-main nav>ul li{border-bottom:1px solid #e8e8e8;clear:both;display:block;float:none;margin:0;padding:0;position:relative}#header .header-nav-main nav>ul li a{font-size:13px;font-style:normal;line-height:20px;padding:7px 8px;margin:1px 0;border-radius:4px;text-align:left}#header .header-nav-main nav>ul li a.dropdown-toggle{position:relative}#header .header-nav-main nav>ul li a.dropdown-toggle:after{content:none}#header .header-nav-main nav>ul li.dropdown .dropdown-menu{background:0 0;padding:0;margin:0;font-size:13px;box-shadow:none;border-radius:0;border:0;clear:both;display:none;float:none;position:static}#header .header-nav-main nav>ul li:last-child{border-bottom:0}#header .header-nav-main nav>ul>li>a{text-transform:uppercase;font-weight:700;margin-top:1px;margin-bottom:1px;color:#ccc}#header .header-nav-main.header-nav-main-square nav>ul>li a{border-radius:0!important}#header .header-btn-collapse-nav{outline:0;display:block;position:relative;z-index:1}#header .header-nav.header-nav-links{min-height:70px}#header .header-logo img{z-index:1}#header .header-nav{display:flex;align-items:center}#header .header-nav-main:not(.header-nav-main-mobile-dark) nav>ul>li>a{color:#00aace}}.text-2{font-size:.9em!important}.text-4{font-size:1.2em!important}.text-uppercase{text-transform:uppercase!important}@media (max-width:767px){#header .container{width:100%}}.btn{font-size:.8rem;padding:.533rem .933rem}.slider-container{background:#151719;height:500px;overflow:hidden;width:100%;direction:ltr}a{color:#ccc}.rev_slider_wrapper{position:relative;z-index:0;width:100%}.rev_slider{position:relative;overflow:visible}.rev_slider img{max-width:none!important;margin:0;padding:0;border:none}.rev_slider>ul,.rev_slider>ul>li,.rev_slider>ul>li:before{list-style:none!important;position:absolute;margin:0!important;padding:0!important;overflow-x:visible;overflow-y:visible;background-image:none;background-position:0 0;text-indent:0;top:0;left:0}.rev_slider>ul>li,.rev_slider>ul>li:before{visibility:hidden}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.rev_slider{overflow:hidden}a{color:#00aace}html .text-color-primary{color:#00aace!important}#header .header-btn-collapse-nav{background:#00aace}@media (min-width:992px){#header .header-body:not(.h-100){height:auto!important}#header .header-nav-main nav>ul>li>a{color:#00aace}#header .header-nav-main nav>ul>li.dropdown .dropdown-menu{border-top-color:#00aace}}</style>
@endsection

@section('body')
    <div class="slider-container rev_slider_wrapper" style="height: 100vh;">
        <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'addOnTypewriter': { 'enable': true }, 'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': [1410,1110,930,690], 'gridheight': 700, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1422,1182,974], 'navigation' : {'arrows': { 'enable': true, 'style': 'arrows-style-1 arrows-primary' }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
            <ul>
                <li class="slide-overlay slide-overlay-level-8" data-transition="fade">
                    <img src="{{ asset('img/first-aid-1920.jpg') }}"
                         loading="lazy"
                         alt=""
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         class="rev-slidebg">

                    <h1 class="tp-caption font-weight-extra-bold text-color-light"
                        data-frames='[{"delay":1000,"speed":500,"frame":"0","from":"opacity:0;x:50%;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-x="['left','left','left','center']"
                        data-y="center" data-voffset="['-85','-85','-85','-85']"
                        data-fontsize="['48','48','48','48']"
                        data-lineheight="['55','55','55','55']"
                        data-letterspacing="-1">Sie suchen nach</h1>

                    <div class="tp-caption font-weight-extra-bold text-color-light"
                         data-frames='[{"delay":500,"speed":2500,"from":"y:50px;sX:1;sY:1;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                         data-type="text"
                         data-typewriter='{"lines":"einem Erste-Hilfe-Kurs?,Ausbildung im Brandschutz?","enabled":"on","speed":"60","delays":"1%7C100","looped":"on","cursorType":"one","blinking":"on","word_delay":"off","sequenced":"on","hide_cursor":"off","start_delay":"1500","newline_delay":"1000","deletion_speed":"20","deletion_delay":"1000","blinking_speed":"500","linebreak_delay":"60","cursor_type":"two","background":"off"}'
                         data-x="['left','left','left','center']"
                         data-y="center" data-voffset="['-33','-33','-33','-33']"
                         data-responsive_offset="on"
                         data-width="['750','750','750','750']"
                         data-fontsize="['48','48','48','48']"
                         data-lineheight="['55','55','55','55']"
                         data-textAlign="['left','left','left','center']">kompetenter Beratung?</div>

                    <div class="tp-caption font-weight-light text-color-light ws-normal"
                         data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2300,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                         data-x="['left','left','left','center']"
                         data-y="center" data-voffset="['33','33','33','33']"
                         data-width="['900','900','900','900']"
                         data-fontsize="['18','18','18','22']"
                         data-lineheight="['26','26','26','26']"
                         data-textAlign="['left','left','left','center']">Dann haben Sie mit uns den richtigen Partner gefunden!</div>

                    <a class="tp-caption btn btn-primary font-weight-bold rounded"
                       href="{{ route('event.overview') }}"
                       data-frames='[{"delay":3000,"speed":2000,"frame":"0","from":"y:50%;opacity:0;","to":"y:0;o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                       data-x="['left','left','left','center']"
                       data-y="center" data-voffset="['103','103','103','140']"
                       data-paddingtop="['16','16','16','24']"
                       data-paddingbottom="['16','16','16','24']"
                       data-paddingleft="['40','40','40','45']"
                       data-paddingright="['40','40','40','45']"
                       data-fontsize="['14','14','14','18']"
                       data-lineheight="['20','20','20','22']">DIREKT ZUR TERMINÜBERSICHT <i class="fas fa-arrow-right ml-1"></i></a>

                </li>
            </ul>
        </div>
    </div>

    <div class="container container-lg-custom py-5 my-5">
        <div class="row justify-content-center">
            <div class="col-xl-9 text-center">
                <h2 class="font-weight-bold text-11 appear-animation" data-appear-animation="fadeInUpShorter">Die Details machen den Unterschied</h2>
                <p class="line-height-9 text-4 opacity-9 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><i>Einfach gute Kurse</i> k&ouml;nnen auch andere Anbieter, doch die Details machen den Unterschied. Daher bekommen Sie bei uns immer noch ein kleines <i>bisschen</i> mehr. Denn wir sind erst zufrieden, wenn Sie gl&uuml;cklich sind.</p>
            </div>
        </div>
        <div class="row featured-boxes featured-boxes-style-4">
            <div class="col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
                <div class="featured-box mb-lg-0">
                    <div class="box-content px-lg-1 px-xl-5">
                        <i class="icon-featured icons icon-calendar text-color-primary text-11"></i>
                        <h4 class="font-weight-bold text-5 mb-3">regelm&auml&szlig;ige Termine</h4>
                        <p>Wir bieten alle Kursformate regelm&auml;&szlig;ig an. Wir sind da, <strong>wann</strong> Sie uns brauchen.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                <div class="featured-box mb-lg-0">
                    <div class="box-content px-lg-1 px-xl-5">
                        <i class="icon-featured icons icon-wallet text-color-primary text-11"></i>
                        <h4 class="font-weight-bold text-5 mb-3">best price in town</h4>
                        <p>Vergessen Sie Preisvergleiche. Wir bieten Ihnen <strong>garantiert</strong> den besten Preis Ihrer Stadt.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                <div class="featured-box mb-sm-0">
                    <div class="box-content px-lg-1 px-xl-5">
                        <i class="icon-featured icons icon-cup text-color-primary text-11"></i>
                        <h4 class="font-weight-bold text-5 mb-3">gut versorgt</h4>
                        <p>Getränke und kleine Snacks zum Selbstkostenpreis sind f&uuml;r uns selbstverständlich.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                <div class="featured-box mb-0">
                    <div class="box-content px-lg-1 px-xl-5">
                        <i class="icon-featured icons icon-heart text-color-primary text-11"></i>
                        <h4 class="font-weight-bold text-5 mb-3">Lernerfolg garantiert</h4>
                        <p>Sie erhalten von uns Handlungskompetenz oder Ihr Geld zurück.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--
    <section class="section section-parallax bg-color-grey-scale-1 border-0 m-0 appear-animation" data-appear-animation="fadeIn" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '116%'}" data-image-src="img/parallax/parallax-corporate-14-1.jpg">
        <div class="container container-lg-custom">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-7 order-2 order-md-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                    <span class="font-weight-bold text-color-dark opacity-8 text-4">COOL STYLES</span>
                    <h2 class="font-weight-bold text-9 mb-4">Layouts Styles & Variants</h2>
                    <ul class="list list-icons pb-2 mb-4">
                        <li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></li>
                        <li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Ipsum dolor sit amet, consectetur adipiscing elit.</span></li>
                        <li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Dolor sit amet, lorem ipsum consectetur adipiscing elit.</span></li>
                    </ul>
                    <a href="#" class="btn btn-primary font-weight-semibold rounded-0 btn-px-5 py-3 text-2">LEARN MORE</a>
                </div>
                <div class="col-md-4 text-center text-md-left order-1 order-md-2 mb-5 mb-md-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                    <img src="img/smartphone-corporate-14-1.png" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="section section-height-3 section-parallax bg-color-light border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '100%', 'offset': 70}" data-image-src="img/parallax/parallax-corporate-14-2.jpg">
        <div class="container container-lg-custom">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-5 col-xl-6 text-center pr-5 mb-5 mb-md-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
                    <img src="img/smartphone-corporate-14-2.png" class="img-fluid" alt="" />
                </div>
                <div class="col-md-6 col-lg-7 col-xl-6 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                    <span class="font-weight-bold text-color-dark opacity-8 text-4">EXCLUSIVE</span>
                    <h2 class="font-weight-bold text-9 mb-4">Customizable Style Switcher</h2>
                    <ul class="list list-icons pb-2 mb-4">
                        <li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></li>
                        <li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Ipsum dolor sit amet, consectetur adipiscing elit.</span></li>
                        <li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Dolor sit amet, lorem ipsum consectetur adipiscing elit.</span></li>
                    </ul>
                    <a href="#" class="btn btn-primary font-weight-semibold rounded-0 btn-px-5 py-3 text-2">LEARN MORE</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-height-3 section-parallax bg-color-grey-scale-1 border-0 m-0 appear-animation" data-appear-animation="fadeIn" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '100%', 'offset': 70}" data-image-src="img/parallax/parallax-corporate-14-3.jpg">
        <div class="container container-lg-custom">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-7 order-2 order-md-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                    <span class="font-weight-bold text-color-dark opacity-8 text-4">MODERN</span>
                    <h2 class="font-weight-bold text-9 mb-4">Mobile Advanced Apps</h2>
                    <ul class="list list-icons pb-2 mb-4">
                        <li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></li>
                        <li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Ipsum dolor sit amet, consectetur adipiscing elit.</span></li>
                        <li><i class="fas fa-caret-right top-6"></i> <span class="text-4">Dolor sit amet, lorem ipsum consectetur adipiscing elit.</span></li>
                    </ul>
                    <a href="#" class="btn btn-primary font-weight-semibold rounded-0 btn-px-5 py-3 text-2">LEARN MORE</a>
                </div>
                <div class="col-md-4 text-center text-md-left order-1 order-md-2 mb-5 mb-md-0 mr-lg-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                    <img src="img/smartphone-corporate-14-3.png" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </section>


    <section class="section section-height-5 section-background overlay overlay-show overlay-op-9 border-0 m-0 appear-animation" data-appear-animation="fadeIn" style="background-image: url(img/bg-corporate-14-1.jpg); background-size: cover; background-position: center;">
        <div class="container container-lg-custom my-5">
            <div class="row justify-content-center">
                <div class="col-md-10 col-xl-9 text-center">
                    <h2 class="font-weight-bold text-color-light text-11 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Get in touch and learn how we can help</h2>
                    <p class="font-weight-light text-color-light line-height-9 text-4 opacity-7 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras volutpat id sapien ac varius. Fusce hendrerit ligula a consectetur ullamcorper. Vestibulum varius pharetra lorem.</p>
                    <a href="#" class="d-inline-flex align-items-center btn btn-primary font-weight-semibold px-5 btn-py-3 text-3 rounded appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="550">GET STARTED NOW <i class="fa fa-arrow-right ml-2 pl-1 text-5"></i></a>
                </div>
            </div>
        </div>
    </section>


    <div class="container container-lg-custom py-5 my-5">
        <div class="row mb-3">
            <div class="col text-center">
                <span class="font-weight-bold text-color-dark opacity-8 text-4">OUR BLOG</span>
                <h2 class="font-weight-semibold text-9 mb-3">What's happening</h2>
                <p class="text-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="card border-0">
                    <div class="card-body px-0 py-5">
                        <h4 class="font-weight-semibold text-5 line-height-3 ls-0 mb-3"><a href="#" class="text-dark text-color-hover-primary text-decoration-none">Lorem ipsum dolor sit amet, consectetur</a></h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta...</p>
                        <div class="d-flex align-items-center">
                            <img src="img/team/team-1.jpg" class="img-fluid rounded-circle mr-2" width="25" alt="" />
                            <strong class="text-color-dark text-2">by John Doe</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card border-0">
                    <div class="card-body px-0 py-5">
                        <h4 class="font-weight-semibold text-5 line-height-3 ls-0 mb-3"><a href="#" class="text-dark text-color-hover-primary text-decoration-none">Lorem ipsum dolor sit amet, consectetur</a></h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta...</p>
                        <div class="d-flex align-items-center">
                            <img src="img/team/team-2.jpg" class="img-fluid rounded-circle mr-2" width="25" alt="" />
                            <strong class="text-color-dark text-2">by Jessica Doe</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card border-0">
                    <div class="card-body px-0 py-5">
                        <h4 class="font-weight-semibold text-5 line-height-3 ls-0 mb-3"><a href="#" class="text-dark text-color-hover-primary text-decoration-none">Lorem ipsum dolor sit amet, consectetur</a></h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta...</p>
                        <div class="d-flex align-items-center">
                            <img src="img/team/team-3.jpg" class="img-fluid rounded-circle mr-2" width="25" alt="" />
                            <strong class="text-color-dark text-2">by John Doe</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card border-0">
                    <div class="card-body px-0 py-5">
                        <h4 class="font-weight-semibold text-5 line-height-3 ls-0 mb-3"><a href="#" class="text-dark text-color-hover-primary text-decoration-none">Lorem ipsum dolor sit amet, consectetur</a></h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta...</p>
                        <div class="d-flex align-items-center">
                            <img src="img/team/team-4.jpg" class="img-fluid rounded-circle mr-2" width="25" alt="" />
                            <strong class="text-color-dark text-2">by Jennifer Doe</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    --}}
@endsection

@section('scripts')
    <!-- Current Page Vendor and Views -->
    <script src="{{ asset('vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
@endsection
