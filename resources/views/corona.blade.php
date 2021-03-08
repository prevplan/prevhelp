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
                            <span class="day">08</span>
                            <span class="month">März</span>
                        </div>

                        <div class="post-content ml-0">

                            <h2 class="font-weight-bold">Wiedereaufnahme des Ausbildungsbetriebes</h2>

                            <p>Im Zuge der Lockerungen und Wiedereröffnung der Fahrschulen dürfen auch wir, in Rücksprache mit den zuständigen Behörden, ab sofort wieder Erste-Hilfe-Kurse anbieten.</p>
                            <p>Voraussetzungen für die Kurse ist, dass diese betrieblich benötigt werden, oder für eine Prüfung notwendig sind / auf eine Prüfung vorbereiten. Auch die Führerscheinprüfung ist hierbei ausdrücklich inbegriffen! Erste-Hilfe-Kurse die für den Führerschein benötigt werden sind damit möglich!</p>
                            <p>Wie bereits zuvor angekündigt werden wir neben unseren regulären Kursen auch Zusatztermine anbieten, um die Wartezeit auf einen freien Termin möglichst kurz zu halten. Die Kurstermine werden aktuell jeweils für eine Woche im Voraus eingetragen, da wir hierzu auch freie Ausbilder benötigen. Freie Termine können unter <a href="{{ route('event.location', ['location' => 'Wuppertal']) }}">https://prevhelp.de/termine/</a> eingesehen und direkt gebucht werden.</p>
                            <p>Bitte beachten Sie, dass Zusatztermine grundsätzlich unter der Woche stattfinden werden, da die Termine an Wochenenden ohnehin fest eingeplant sind.</p>
                            <p>Bei Rückfragen stehen wir Ihnen gerne telefonisch unter <a href="tel:+4920289837565">0202 898 37 565</a> zur Verfügung.</p>
                            <div align="center"><p><strong>Bitte bleiben Sie gesund!</strong></p></div>
                        </div>
                    </article>

                </div>
            </div>
        </div>

    </div>

@endsection
