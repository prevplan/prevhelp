@extends('layouts.frontend')

@section('meta.title', 'Erste-Hilfe-Kurs für Führerschein und Betrieb in Wuppertal 🦊')
@section('meta.description', 'Erste-Hilfe-Kurs in Wuppertal für den Führerschein / das Studium gesucht? 🤘 Wir haben freie Plätze mit best-price-garantie❗Jetzt schnell online buchen ⏰')

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
                    <div class="overflow-hidden mb-3">
                        <h2 class="font-weight-bold text-8 mb-0 appear-animation" data-appear-animation="maskUp">
                            Du willst keine Zeit mehr verlieren?
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10">
                    <div class="overflow-hidden">
                        <p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
                            Du suchst den <span class="alternative-font">garantiert</span> g&uuml;nstigsten Erste-Hilfe-Kurs in Wuppertal, f&uuml;r Deinen F&uuml;hrerschein, Betrieb, Trainerschein oder Studium? Du brauchst in den n&auml;chsten Tagen einen freien Platz? Perfekt!
                        </p>
                    </div>
                </div>
                <div class="col-lg-2 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
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
                                        <i class="icon-featured far fa-award m-0"></i>
                                        <h2 class="font-weight-normal text-6">best price in town</h2>
                                        <div class="divider divider-small divider-small-center">
                                            <hr>
                                        </div>
                                        <p>Dein Alltag ist schon teuer genug und Preise im Internet vergleichen nervt? Das kennen wir und wollen Dir helfen. Daher bieten wir Dir Deinen Erste-Hilfe-Kurs immer zum <strong>garantiert besten Preis</strong> in Wuppertal an. Mit uns schnell sparen, statt lange zu vergleichen!</p>
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

                    <div class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <img class="img-fluid scale-2 pr-5 pr-md-0 my-4" src="{{ asset('img/car-640.jpg') }}" alt="layout styles" />
                        </div>
                        <div class="col-md-8 pl-md-5">
                            <h2 class="font-weight-normal text-6 mb-3">Wir bieten Dir den <strong class="font-weight-extra-bold">guten Erste-Hilfe-Kurs</strong> in Wuppertal Vohwinkel</h2>
                            <p class="text-4">Ganz gleich, ob Du den Erste-Hilfe-Kurs f&uuml;r Deinen F&uuml;hrerschein, Dein Studium, Deinen Trainerschein, als Rettungsschwimmer, als betrieblicher Ersthelfer / f&uuml;r den Betrieb oder <i>einfach nur so</i> brauchst... Unsere Schulungen sind kurzweilig, lustig und von den Beh&ouml;rden gem&auml;&szlig; FEV und DGUV bundesweit anerkannt.</p>
                            <p>Bei uns bist Du genau richtig!</p>
                        </div>
                    </div>

                    <hr class="solid my-5">

                    <div class="row align-items-center pt-5 pb-3 appear-animation" data-appear-animation="fadeInRightShorter">
                        <div class="col-md-8 pr-md-5 mb-5 mb-md-0">
                            <h2 class="font-weight-normal text-6 mb-3">Nutze Deine freie Zeit <strong class="font-weight-extra-bold">besser</strong></h2>
                            <p class="text-4">Deine Zeit ist kostbar und freie Tage ohnehin viel zu selten. Daher dauert unser kurzweiliger Kurs nur 7,5 Stunden (9 UE) inkl. Pausen. Außerdem bieten wir Dir in Wuppertal Vohwinkel unsere Kurse mehrmals die Woche, unter der Woche und auch am Wochenende, an.</p>
                            <p>Wir sind da, <strong>wann</strong> Du uns brauchst!</p>
                            <p>Du hast noch Fragen? Dann schaue in unsere <a href="{{ route('question.index') }}">FAQ</a> oder nehme direkt Kontakt zu uns auf!</p>
                        </div>
                        <div class="col-md-4 px-5 px-md-3">
                            <img class="img-fluid scale-2 my-4" src="{{ asset('img/cheers-640.png') }}" alt="style switcher" />
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
