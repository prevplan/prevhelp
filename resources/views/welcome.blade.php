@extends('layouts.frontend')

@section('header_class', 'header-transparent header-semi-transparent header-semi-transparent-light header-effect-shrink')

@section('body')
    <div class="slider-container rev_slider_wrapper" style="height: 100vh;">
        <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'addOnTypewriter': { 'enable': true }, 'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': [1410,1110,930,690], 'gridheight': 700, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1422,1182,974], 'navigation' : {'arrows': { 'enable': true, 'style': 'arrows-style-1 arrows-primary' }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
            <ul>
                <li class="slide-overlay slide-overlay-level-8" data-transition="fade">
                    <img src="img/first-aid-850489_640.jpg"
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
                       href="#"
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
