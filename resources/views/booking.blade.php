@extends('layouts.frontend')

@section('meta.title', 'Termine')

@section('body')
    <div class="container">
          <div class="row">
            <div class="col text-center">
                <h1 class="font-weight-normal text-7 mb-2"><strong class="font-weight-extra-bold">Erste-Hilfe-Kurse in {{ $courses[0]['location'] }}</strong></h1>
                <p class="mb-0 lead">Buchen Sie hier online Ihren Erste-Hilfe-Kurs in Wuppertal</p>
                <p class="mb-1">Bei Fragen oder Problemen stehen wir Ihnen telefonisch unter 0202 898 37 565 zur Verf&uuml;gung.</p>
            </div>
        </div>

        <hr class="solid">

        <div class="container py-2">

            @foreach( $courses as $course)
                <div class="row align-items-center">
                    <div class="col-12 justify-content-center">
                        <div class="row align-items-center">
                            <div class="col justify-content">
                                {{ $course->street }}<br />
                                {{ $course->zipcode }} {{ $course->location }}
                            </div>
                            <div class="col justify-content-center">
                                {{ \Carbon\Carbon::parse($course->start)->locale('de')->dayName }}<br>
                                {{ \Carbon\Carbon::parse($course->start)->formatLocalized('%d.%m.%Y, %H:%M') }} Uhr
                            </div>
                            <div class="col justify-content-center">
                                @if(($course->seats - count($course->participants)) > 0)
                                    {{ $course->seats - count($course->participants) }} freie Pl&auml;tze
                                @else
                                    <strong>ausgebucht</strong>
                                @endif
                                @if(($course->seats - count($course->participants)) > 0)
                                    <br>
                                    <a class="btn btn-badge btn-modern btn-primary mb-2" href="{{ route('event.book', ['course' => $course]) }}">Buchen <span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1">{{ $course->prices[0]['price'] }} {{ $course->prices[0]['currency'] }}</span></a>
                                @endif
                            </div>
                        </div>

                        <hr class="solid">
                    </div>
                </div>
            @endforeach

        </div>

    </div>
@endsection
