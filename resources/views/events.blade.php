@extends('layouts.frontend')

@section('meta.title', 'Termine')

@section('body')
    <div class="container">
          <div class="row">
            <div class="col text-center">
                <h2 class="font-weight-normal text-7 mb-2"><strong class="font-weight-extra-bold">Unsere Kurstermine in der &Uuml;bersicht</strong></h2>
                <p class="mb-0 lead">Wir &uuml;berarbeiten die Anzeige unserer Kurstermine f&uuml;r Sie.</p>
                <p class="mb-1">Hier haben wir jedoch bereits ausgewählte Kursorte direkt verlinkt. Einfach anklicken und direkt buchen!</p>
            </div>
        </div>

        <div class="container py-2">

            <div class="row">
                <div class="col">

                    <div class="row">
                        <div class="col">
                            <hr class="solid my-5">

                            <h4>Erste-Hilfe-Kurse</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <ul class="list list-icons list-primary">
                                <a href="https://ausbilder.org/de/booking/OjpA0w/loc/Wuppertal" style="text-decoration: none; color: inherit;" target="_blank"><li><i class="fas fa-building"></i> Erste Hilfe Wuppertal</li></a>
                            </ul>
                        </div>
                        <div class="col-lg-4">

                            <ul class="list list-icons list-primary">
                                <a href="https://ausbilder.org/de/booking/OjpA0w/loc/Remscheid" style="text-decoration: none; color: inherit;" target="_blank"><li><i class="fas fa-building"></i> Erste Hilfe Remscheid</li></a>
                            </ul>


                        </div>
                        <div class="col-lg-4">

                            <ul class="list list-icons list-primary">
                                <a href="https://ausbilder.org/de/booking/OjpA0w/loc/Bergisch%20Gladbach" style="text-decoration: none; color: inherit;" target="_blank"><li><i class="fas fa-building"></i> Erste Hilfe Bergisch Gladbach</li></a>
                            </ul>

                        </div>
                    </div>

                </div>

                </div>
            </div>

        </div>
    </div>
@endsection
