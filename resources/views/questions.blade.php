@extends('layouts.frontend')

@section('meta.title', 'Häufig gestellte Fragen | PrevHelp')

@section('body')
    <section class="page-header page-header-classic">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">FAQ</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col p-static">
                    <h1 data-title-border>FAQ</h1>

                </div>
            </div>
        </div>
    </section>

    <div class="container py-4">

        <div class="row">
            <div class="col">

                <h2 class="font-weight-normal text-7 mb-2">H&auml;ufig gestellte <strong class="font-weight-extra-bold">Fragen</strong></h2>
                <p class="lead">Auch wenn wir viele Fragen direkt auf der Seite des jeweiligen Angebotes beantworten, bleiben manchmal dennoch offen. Auf diese gehen wir noch einmal auf dieser Seite ein. Sollten offene Fragen auch nach dieser Seite unbeantwortet sein, beantworten wir Ihnen diese direkt. Nehmen Sie <a href="{{ route('contact.show') }}">Kontakt</a> mit uns auf!</p>

                <hr class="solid my-5">

                <div class="toggle toggle-primary" data-plugin-toggle>
                    <section class="toggle active">
                        <a class="toggle-title">Wie lange dauert der Kurs?</a>
                        <div class="toggle-content">
                            <p>Die Dauer der Kurse variieren, je nach Kursformat bzw. Thema. Unsere Erste-Hilfe-Kurse z.B. dauern 7,5 Stunden, was den vorgeschriebenen 9 Unterrichtseinheiten inkl. Pausen entspricht. Wenn nicht bei der Buchung anders angegeben bzw. ausdrücklich finden unsere Kurse zusammenh&auml;ngend an <strong>einem Tag</strong> statt.</p>
                        </div>
                    </section>

                    <section class="toggle">
                        <a class="toggle-title">Gibt es Pausen w&auml;hrend der Kurse?</a>
                        <div class="toggle-content">
                            <p>Selbstverst&auml;ndlich gibt es w&auml;hrend unserer Kurse mehrere Pausen. Hierbei wird insbesondere darauf geachtet, dass die Pausen in Summe mind. 45 Minuten betragen, wodurch unsere Kurse auch f&uuml;r betrieblich Teilnehmende geeignet sind. Auch den Vorschriften des Arbeitszeitgesetzes wird hierbei Sorge getragen.</p>
                        </div>
                    </section>
                </div>

            </div>

        </div>
    </div>
@endsection
