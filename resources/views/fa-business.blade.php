@extends('layouts.frontend')

@section('title', 'Erste-Hilfe-Kurse für Betriebe / Unternehmen')

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
                            <h2 class="font-weight-normal text-6 mb-3">Ihre betriebliche Erste Hilfe wirkt wie eine <strong class="font-weight-extra-bold">Endlosspirale</strong>?</h2>
                            <p class="text-4">Sie sind in Ihrem Betrieb / Unternehmen f&uuml;r die Organisation der betrieblichen Erste Hilfe zust&auml;ndig? Termine und Vorschriften <i>prasseln</i> auf Sie ein? Ihre Mitarbeiter sind unmotiviert als betrieblicher Ersthelfer benannt zu werden? Sie haben Bedenken wegen den Konsequenzen von Fehlern in (der Organisation) der Ersten Hilfe? Sie haben Bef&uuml;rchtungen, was bei einer Kontrolle durch die Berufsgenossenschaft passieren k&ouml;nnte?</p>
                            <p>Solche Bef&uuml;rchtungen und Unsicherheiten geh&ouml;ren zuk&uuml;nftig der Vergangenheit an. Denn nun haben Sie einen <strong>starken Partner</strong> an Ihrer Seite. <i>Uns!</i></p>
                        </div>
                    </div>

                    <hr class="solid my-5">

                    <div class="row align-items-center pt-5 pb-3 appear-animation" data-appear-animation="fadeInRightShorter">
                        <div class="col-md-8 pr-md-5 mb-5 mb-md-0">
                            <h2 class="font-weight-normal text-6 mb-3">Mit uns <strong class="font-weight-extra-bold">strategisch</strong> gut aufgestellt!</h2>
                            <p class="text-4">Vom ersten Schritt der Planung, &uuml;ber die Ausbildung Ihrer Mitarbeiter, bis hin zur regelm&auml;&szlig;igen Kontrolle und kontinuierlichen Fortbildung. Wir stehen Ihnen zur Seite.</p>
                            <p>Bei uns erhalten Sie mehr als <i>nur</i> eine gute Erste-Hilfe-Ausbildung Ihrer Mitarbeiter. Egal ob weitergehende Fragen, besondere Gegebenheiten oder spezielle Anforderungen. Gemeinsam finden wir Ihre <strong>passende L&ouml;sung</strong>!</p>
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
                                    <p>Sie brauchen zeitnah eine Aus- oder Fortbildung Ihrer betrieblichen Ersthelfer? Mehrere Mitarbeiter gleichzeitig auf einen Erste-Hilfe-Kurs zu schicken passt schlecht in Ihre Dienstplanung? Kein Problem! Wir bieten regelm&auml;&szlig;ig <i>offene</i> Kurse, die Sie auch f&uuml;r einzelne Mitarbeiter buchen k&ouml;nnen.</p>
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
                                    <i class="icon-featured far fa-piggy-bank float-left mr-4 w-auto"></i> <h2 class="font-weight-normal text-6">Aus- und Fortbildung <strong class="font-weight-extra-bold">kostenfrei</strong></h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p>Bei &Uuml;bernahme der Kosten durch die zust&auml;ndige BG / UK ist die Aus- und Fortbildung Ihrer betrieblichen Ersthelfer <strong>kostenfrei</strong> f&uuml;r Sie. Die Formalit&auml;ten erledigen sehr gerne wir. Sie benennen Ihre Mitarbeiter und wir sorgen f&uuml;r deren Aus- und regelm&auml;&szlig;ige Fortbildung.</p>
                                    <button class="btn btn-modern btn-dark mr-1" type="button">ansehen</button>
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
                                    <h2 class="font-weight-normal text-6">Schulung bei Ihnen vor Ort</h2>
                                    <div class="divider divider-small divider-small-center">
                                        <hr>
                                    </div>
                                    <p>Menschen lernen in einer ihnen vertrauten Umgebung am besten. Daher bieten wir alle unsere Kurse selbstverst&auml;ndlich auch als <i>in House Kurs</i> bei Ihnen vor Ort an. Unsere Expertise in Ihren R&auml;umlichkeiten, gerne bundesweit und ohne Mehrkosten.</p>
                                    <button class="btn btn-modern btn-dark mr-1" type="button">ansehen</button>
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
                                    <p>Kurstage können sehr lang und anstrengend sein, insbesondere wenn der Blutzuckerspiegel langsam sinkt. Damit Ihre Mitarbeiter sich bei uns den gesamten Kurstag über wohlfühlen, stellen wir selbstverst&auml;ndlich kleine Snacks und Getränke (zum Selbstkostenpreis) zur Verfügung.</p>
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


    <section class="call-to-action call-to-action-strong-grey content-align-center call-to-action-in-footer">
        <div class="container py-5">
            <div class="row py-3">
                <div class="col-md-9 col-lg-9">
                    <div class="call-to-action-content">
                        <h2 class="font-weight-normal text-7 mb-0">Wir sind bei <strong>allen Fragen</strong> f&uuml;r Sie da!</h2>
                        <p class="mb-0">Sprechen Sie uns einfach an.</p>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="call-to-action-btn">
                        <a href="{{ route('contact.show') }}" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3 mt-5">Nehmen Sie Kontakt auf</a><span class="arrow hlb d-none d-md-block" data-appear-animation="rotateInUpLeft" style="top: -90px; left: 70%;"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
