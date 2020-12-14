@extends('layouts.frontend')

@section('meta.title', 'aktuelle Corona Informationen')
@section('meta.description', 'Wir halten Sie über Änderungen in Bezug auf Corona 🦠 und damit verbundene Vorschriften 😷 und Änderungen auf dem Laufenden.')

@section('body')

    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
        <div class="container">
            <div class="row">

                <div class="col-md-12 align-self-center p-static order-2 text-center">


                    <h1 class="text-dark font-weight-bold text-8">aktuelle Corona Informationen</h1>
                    <span class="sub-title text-dark">Wir halten Sie auf dem Laufenden!</span>
                </div>

            </div>
        </div>
    </section>

    <div class="container py-4">

        <div class="row">
            <div class="col">
                <div class="blog-posts single-post">

                    <article class="post post-large blog-single-post border-0 m-0 p-0">

                        <div class="post-date ml-0">
                            <span class="day">14</span>
                            <span class="month">Dez</span>
                        </div>

                        <div class="post-content ml-0">

                            <h2 class="font-weight-bold">Bundesweiter Lockdown - Aussetzung der Kurse bis zum 10.01.2021</h2>

                            <p>Am gestrigen Sonntag, den 13.12.2020, wurde angekündigt, dass es bis vorerst zum 10.01.2021 einen <i>bundesweiten, harten Lockdown</i> geben wird. Hiermit einhergehend findet eine Schließung (fast) aller Geschäfte und Unternehmen statt, um einer weiteren rasanten Ausbreitung des Corona-Virus einhalt zu gebieten.</p>
                            <p>Zum aktuellen Zeitpunkt liegt uns die konkrete Verordnung nicht vor. Daher können wir noch nicht verbindlich sagen, ob wir von diesem Lockdown ebenfalls betroffen sind oder durch gewisse Sonderregelungen weiterhin Erste-Hilfe-Kurse anbieten dürfen, wie dies in vergangenen Lockdown Maßnahmen der Fall war.</p>
                            <p>Besondere Zeiten erfordern jedoch besondere Maßnahmen. Und auch wir tragen eine Verantwortung gegenüber unseren Kunden, unseren Ausbildern und deren so wie unseren Angehörigen. Daher stellen wir alle Ausbildungstätigkeiten bis vorerst einschließlich 10.01.2021 ein, unabhängig davon, ob Sonderregelungen oder Ausnahmen möglich wären.</p>
                            <p>In unseren <a href="{{ route('event.overview') }}">Terminen</a> können die Kurstermine nach dem 10.01.2021 eingesehen und bereits jetzt entsprechend gebucht werden. Teilnehmer, die bereits Kurse für die letzten Termine im Jahr 2020 gebucht hatten, werden separat durch uns informiert. Auch diesen steht es selbstverständlich frei, einen neuen Kurstermin zu buchen.</p>
                            <p>Wir hoffen auf Ihr Verständnis und Ihre <i>Mitarbeit</i>. Denn in diesen besonderen Tagen können Sie mit der einzigen Maßnahme, die sonst immer falsch ist, doch das Richtige tun. Tun Sie nichts! Bleiben Sie zu Hause. Feiern Sie zu Hause im engsten Kreis Ihrer Familie, diese ganz besondere, sehr stille Weihnachtszeit. Halten Sie sich auch im Interesse Ihrer Liebsten an die Regeln, selbst wenn dies teils schwerfallen mag.</p>
                            <div align="center"><p><strong>Helfen Sie mit gemeinsam ein kleines Wunder vollbringen. Lassen Sie uns dieses eine Mal nichts tun und dadurch Leben retten!</strong></p></div>
                        </div>
                    </article>

                </div>
            </div>
        </div>

    </div>

@endsection
