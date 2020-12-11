@extends('layouts.frontend')

@section('meta.title', 'Termine')

@section('body')
    <div class="container">
        @if($courses)
            <div class="row">
                <div class="col text-center">
                    <h1 class="font-weight-normal text-7 mb-2"><strong class="font-weight-extra-bold">Erste-Hilfe-Kurse in
                        {{ $location }} und Umgebung</strong></h1>
                    <p class="mb-0 lead">Buchen Sie hier online Ihren Erste-Hilfe-Kurs in {{ $location }} und Umgebung</p>
                    <p class="mb-1">Bei Fragen oder Problemen stehen wir Ihnen telefonisch unter 0202 898 37 565 zur Verf&uuml;gung.</p>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col text-center">
                    <h1 class="font-weight-normal text-7 mb-2"><strong class="font-weight-extra-bold">Erste-Hilfe-Kurse in
                            {{ $location }} und Umgebung</strong></h1>
                    <p class="mb-0 lead">Leider bieten wir in {{ $location }} und der n&auml;heren Umgebung aktuell keine Erste-Hilfe-Kurse an.</p>
                    <p class="mb-1">Sollten Sie dringend einen Kurs ben&ouml;tigen, stehen wir Ihnen unter 0202 898 37 565 zur Verf&uuml;gung.</p>
                </div>
            </div>
        @endif

        <hr class="solid">

        <form action="{{ route('event.location', ['location' => $location]) }}" method="post">
            @csrf
            <x-honeypot />
            <input type="hidden" name="custom" value="true">
            <div class="row align-items-center">
                <div class="col-12 justify-content-center">
                    <div class="row align-items-center">
                        @foreach( $distance as $d)
                            @if( $d['distance'] <= 20 || $loop->iteration <= 5 )
                                <div class="col justify-content">
                                    <div class="custom-checkbox-1">
                                        <input id="checkbox-{{ $d['seminarLocation'] }}"
                                               name="{{ $d['seminarLocation'] }}"
                                               type="checkbox" {{ ($d['distance'] <= 20 && !request('custom') || $request[str_replace(' ', '_', $d['seminarLocation'])] ? 'checked' : '') }}
                                                value="{{ $d['seminarLocation'] }}"
                                               onChange="this.form.submit()"
                                        >
                                        <label for="checkbox-{{ $d['seminarLocation'] }}">{{ $d['seminarLocation'] }}</label>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <hr class="solid">
                </div>
            </div>
        </form>

        <div class="container py-2">

            @forelse( $courses as $course)
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
            @empty
                <div class="row">
                    <div class="col text-center">
                        <p class="mb-0 lead">Oberhalb k&ouml;nnen Sie unsere aktuellen, n&auml;chstgelegenen Kursorte zu {{ $location }} ausw&auml;hlen und anzeigen lassen.</p>
                        <p class="mb-1">Bei Fragen oder Problemen stehen wir Ihnen telefonisch unter 0202 898 37 565 zur Verf&uuml;gung.</p>
                    </div>
                </div>

            @endforelse

        </div>

    </div>
@endsection
