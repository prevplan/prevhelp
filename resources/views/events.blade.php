@extends('layouts.frontend')

@section('meta.title', 'Termine | PrevHelp')

@section('scripts')
        <script src="https://cdn.jsdelivr.net/npm/places.js@1.19.0"></script>
    <script>
        (function() {
            var placesAutocomplete = places({
                appId: 'pl141ZYVSU29',
                apiKey: '0512c6d23d2b05dd578dab20bc27a7e7',
                container: document.querySelector('#city'),
                templates: {
                    value: function(suggestion) {
                        return suggestion.name;
                    }
                }
            }).configure({
                countries: ['de'],
                type: 'city',
                language: 'de',
                aroundLatLngViaIP: false,
                hitsPerPage: 4
            });
        })();
    </script>

@endsection

@section('body')
    <div class="container">
          <div class="row">
            <div class="col text-center">

                @include('layouts.error')

                <h2 class="font-weight-normal text-7 mb-2"><strong class="font-weight-extra-bold">Unsere Kurstermine in der &Uuml;bersicht</strong></h2>
                <p class="mb-0 lead">Finden Sie hier Ihren Kurs in Ihrer N&auml;he</p>
               {{-- <p class="mb-1">Hier haben wir jedoch bereits ausgewählte Kursorte direkt verlinkt. Einfach anklicken und direkt buchen!</p> --}}
            </div>
        </div>
        <br />
        <form action="{{ route('event.search') }}"
              id="form"
              method="post"
              onsubmit="submit.disabled = true; submit.innerText='Suche…'; return true;"
              role="form">
            @csrf
            <x-honeypot />
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 text-center">
                    <input type="search" id="city" class="form-control" name="city" placeholder="Geben Sie Ihre PLZ oder Ort ein." />
                    <button class="btn btn-primary btn-sm mb-2" name="submit" type="submit">Kurse anzeigen</button>
                </div>
                <div class="col-md-4"></div>
            </div>
        </form>

        {{--
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
                                <a href="{{ route('event.location', ['location' => 'Wuppertal']) }}" style="text-decoration: none; color: inherit;"><li><i class="fas fa-building"></i> Erste Hilfe Wuppertal</li></a>
                            </ul>
                        </div>
                        <div class="col-lg-4">

                            <ul class="list list-icons list-primary">
                                <a href="{{ route('event.location', ['location' => 'Remscheid']) }}" style="text-decoration: none; color: inherit;"><li><i class="fas fa-building"></i> Erste Hilfe Remscheid</li></a>
                            </ul>


                        </div>
                        <div class="col-lg-4">

                            <ul class="list list-icons list-primary">
                                <a href="{{ route('event.location', ['location' => 'Bergisch Gladbach']) }}" style="text-decoration: none; color: inherit;"><li><i class="fas fa-building"></i> Erste Hilfe Bergisch Gladbach</li></a>
                            </ul>

                        </div>
                    </div>

                </div>

                </div>
            </div>

        </div>
        --}}
    </div>
@endsection
