@extends('layouts.frontend')

@section('title', 'Erste-Hilfe-Kurse für Deinen Führerschein')

@section('body')
    <section class="page-header page-header-classic">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>Erste-Hilfe-Kurse</li>
                        <li class="active">Führerschein</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col p-static">
                    <h1 data-title-border>Erste-Hilfe-Kurse f&uuml;r den F&uuml;hrerschein</h1>

                </div>
            </div>
        </div>
    </section>

    <div class="container py-2">

        <div class="row">

            <div class="col">

                <h2 class="font-weight-normal text-7 mb-2">Wir bieten Dir den guten Erste-Hilfe-Kurs f&uuml;r <strong class="font-weight-extra-bold">Deinen</strong> F&uuml;hrerschein</h2>
                <p class="lead">Unsere Erste-Hilfe-Kurse sind für alle Führerscheinklassen gültig und bundesweit anerkannt. Ganz gleich, ob Du das erste Mal einen Führerschein machst, auf eine neue Führerscheinklasse erweiterst oder Deine Fahrberechtigung zurückerlangen willst. Bei uns bist Du genau richtig! </p>
                <img class="float-left img-fluid" width="260" height="200" src="{{ asset('img/car-640.jpg') }}" alt="Car">
                <p>Deine Zeit ist kostbar und freie Tage ohnehin viel zu selten. Daher dauert unser Erste-Hilfe-Kurs für den Führerschein nur 7,5 Stunden (9 UE) inkl. Pausen. Außerdem bieten wir an vielen Standorten die Kurse unter der Woche und auch am Wochenende an.</p>
                <p>Wir sind da, <strong>wann</strong> Du uns brauchst!</p>
                <p>Du hast Fragen? Dann schaue in unsere <a href="{{ route('question.index') }}">FAQ</a> oder nehme direkt Kontakt zu uns auf!</p>

            </div>

        </div>

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
                                        <p>Für den Führerschein muss es mit dem Erste-Hilfe-Kurs oft schnell gehen. Daher bieten wir unsere Kurse an vielen Standorten jede Woche, unter der Woche und am Wochenende an. Unser Ziel: Immer einen freien Platz innerhalb weniger Tage für jeden unserer Teilnehmer.</p>
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
                                        <p>Der Führerschein ist schon teuer genug und Preise im Internet vergleichen nervt? Das kennen wir und wollen Dir helfen. Daher bieten wir Dir Deinen Erste-Hilfe-Kurs garantiert immer zum besten Preis in Deiner Stadt an. Mit uns schnell sparen, statt lange zu vergleichen!</p>
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
@endsection
