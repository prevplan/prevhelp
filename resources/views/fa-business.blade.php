@extends('layouts.frontend')

@section('meta.title', t('First aid courses for companies'))

@section('body')
    {{--
    <section class="page-header page-header-classic page-header-md">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 data-title-border>Services</h1>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-right">
                        <li><a href="#">Home</a></li>
                        <li class="active">Pages</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



    <div class="container pb-1">

        <div class="row pt-4">
            <div class="col">
                <div class="overflow-hidden mb-3">
                    <h2 class="font-weight-bold text-8 mb-0 appear-animation" data-appear-animation="maskUp">
                        We Are Here To Help You
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-10">
                <div class="overflow-hidden">
                    <p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non <span class="alternative-font">metus.</span> pulvinar. Sociis natoque penatibus et magnis dis parturient montes.
                    </p>
                </div>
            </div>
            <div class="col-lg-2 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
                <a href="#" class="btn btn-modern btn-dark mt-1">Get a Quote!</a>
            </div>
        </div>

        <div class="row">
            <div class="col py-3">
                <hr class="solid mt-5 mb-2">
            </div>
        </div>

        <div class="row">
            <div class="featured-boxes featured-boxes-style-2">
                <div class="row">
                    <div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="700">
                        <div class="featured-box featured-box-effect-4">
                            <div class="box-content">
                                <i class="icon-featured icon-screen-tablet icons text-color-primary bg-color-grey"></i>
                                <h4 class="font-weight-bold">Mobile Apps</h4>
                                <p class="px-3">Lorem ipsum dolor sit amt, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="900">
                        <div class="featured-box featured-box-effect-4">
                            <div class="box-content">
                                <i class="icon-featured icon-layers icons text-color-light bg-color-primary"></i>
                                <h4 class="font-weight-bold">Creative Websites</h4>
                                <p class="px-3">Lorem ipsum dolor sit amt, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1100">
                        <div class="featured-box featured-box-effect-4">
                            <div class="box-content">
                                <i class="icon-featured icon-magnifier icons text-color-primary bg-color-grey"></i>
                                <h4 class="font-weight-bold">SEO Optimization</h4>
                                <p class="px-3">Lorem ipsum dolor sit amt, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1500">
                        <div class="featured-box featured-box-effect-4">
                            <div class="box-content">
                                <i class="icon-featured icon-screen-desktop icons text-color-light bg-color-primary"></i>
                                <h4 class="font-weight-bold">Brand Solutions</h4>
                                <p class="px-3">Lorem ipsum dolor sit amt, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1300">
                        <div class="featured-box featured-box-effect-4">
                            <div class="box-content">
                                <i class="icon-featured icon-doc icons text-color-primary bg-color-grey"></i>
                                <h4 class="font-weight-bold">HTML5 / CSS3 / JS</h4>
                                <p class="px-3">Lorem ipsum dolor sit amt, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1100">
                        <div class="featured-box featured-box-effect-4">
                            <div class="box-content">
                                <i class="icon-featured icon-menu icons text-color-light bg-color-primary"></i>
                                <h4 class="font-weight-bold">Buttons</h4>
                                <p class="px-3">Lorem ipsum dolor sit amt, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <section class="section bg-color-grey section-height-3 border-0 mt-5 mb-0">
        <div class="container">

            <div class="row">
                <div class="col">

                    <div class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter">
                        <div class="col-md-4 px-5 px-md-3">
                            <img class="img-fluid scale-2 my-4" src="{{ asset('img/spiral-640.jpg') }}" alt="spiral" />
                        </div>
                        <div class="col-md-8 pl-md-5">
                            <h2 class="font-weight-normal text-6 mb-3">{!! html_entity_decode( t('The organization of first aid in your company affects like an <strong class="font-weight-extra-bold">endless spiral</strong>?') ) !!}</h2>
                            <p class="text-4">{!! html_entity_decode( t('Are you responsible for the organization of first aid in your company? Dates and regulations <em>rain</em> on you? Are your employees unmotivated to be named as company first aiders? Are you concerned about the consequences of mistakes in (the organization of) first aid? Are you concerned about what might happen if the trade association inspects you?') ) !!}</p>
                            <p>{!! html_entity_decode( t('Such fears and uncertainties will be a thing of the past. Because now you have a <strong>strong partner</strong> at your side. <em>Us!</em>') ) !!}</p>
                        </div>
                    </div>

                    <hr class="solid my-5">

                    <div class="row align-items-center pt-5 pb-3 appear-animation" data-appear-animation="fadeInRightShorter">
                        <div class="col-md-8 pr-md-5 mb-5 mb-md-0">
                            <h2 class="font-weight-normal text-6 mb-3">{!! html_entity_decode( t('With us <strong class="font-weight-extra-bold">strategically</strong> well positioned!') ) !!}</h2>
                                <p class="text-4">{{ t('From the first planning step through the training of your employees to regular control and continuous training. We are here to help.') }}</p>
                            <p>{!! html_entity_decode( t('With us, you get more than <em>just</em> good first aid training for your employees, regardless of whether you have further questions, particular circumstances, or special requirements. Together we will find your <strong>suitable solution</strong>!') ) !!}</p>
                        </div>
                        <div class="col-md-4 px-5 px-md-3">
                            <img class="img-fluid scale-2 my-4" src="{{ asset('img/chess-640.jpg') }}" alt="chess" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-2">

        <div class="featured-boxes featured-boxes-style-8">
            <div class="row">
                <div class="col-lg-6">
                    <div class="featured-box featured-box-primary">
                        <div class="box-content p-5">
                            <div class="row">
                                <div class="col-9">
                                    <h2 class="font-weight-normal text-6">{{ t('regular appointments') }}</h2>
                                </div>
                                <div class="col-3">
                                    <div class="text-right">
                                        <i class="icon-featured far fa-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p>{!! html_entity_decode( t('Do you need basic or advanced training for your company\'s first aiders promptly? Sending several employees to a first aid course at the same time does not fit into your duty roster? No problem! We regularly offer <em>open</em> courses that you can also book for individual employees.') ) !!}</p>
                                    <a class="btn btn-modern btn-dark mr-1" href="{{ route('event.overview') }}">{{ t('book now') }}</a>
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
                                    <i class="icon-featured far fa-piggy-bank float-left mr-4 w-auto"></i> <h2 class="font-weight-normal text-6">{!! html_entity_decode( t('basic and advanced training <strong class="font-weight-extra-bold">free of charge</strong>') ) !!}</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p>{!! html_entity_decode( t('If the responsible BG / UK takes over the costs, the training and further education of your company first aiders are <strong>free</strong> for you. We are happy to take care of the formalities. You name your employees, and we take care of their training and regular training.') ) !!}</p>
                                    <button class="btn btn-modern btn-dark mr-1" type="button">{{ t('view') }}</button>
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
                                    <i class="icon-featured far fa-building m-0"></i>
                                    <h2 class="font-weight-normal text-6">{{ t('Training at your site') }}</h2>
                                    <div class="divider divider-small divider-small-center">
                                        <hr>
                                    </div>
                                    <p>{!! html_entity_decode( t('People learn best in an environment they are familiar with. Therefore, we also offer all of our courses <em>in-house</em> at your location. Our expertise in your premises, nationwide and without additional costs.') ) !!}</p>
                                    <button class="btn btn-modern btn-dark mr-1" type="button">{{ t('view') }}</button>
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
                                    <h2 class="font-weight-normal text-6">{{ t('catering') }}</h2>
                                    <p>{{ t('Course days can be very long and tiring, mostly when blood sugar levels are slowly falling. But your employees should feel comfortable with us throughout the day. So we provide them small snacks and drinks (at cost price).') }}</p>
                                    <div class="divider divider-small divider-small-center">
                                        <hr>
                                    </div>
                                    <a class="btn btn-modern btn-dark mr-1" href="{{ route('event.overview') }}">{{ t('book now') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="call-to-action call-to-action-strong-grey content-align-center call-to-action-in-footer">
        <div class="container py-5">
            <div class="row py-3">
                <div class="col-md-9 col-lg-9">
                    <div class="call-to-action-content">
                        <h2 class="font-weight-normal text-7 mb-0">{!! html_entity_decode( t('We are there for you with <strong>all your questions</strong>!') ) !!}</h2>
                        <p class="mb-0">{{ t('Just talk to us.') }}</p>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="call-to-action-btn">
                        <a href="{{ route('contact.show') }}" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3 mt-5">{{ t('get in touch') }}</a><span class="arrow hlb d-none d-md-block" data-appear-animation="rotateInUpLeft" style="top: -90px; left: 70%;"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
