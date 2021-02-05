@extends('layouts.frontend')

@section('meta.title', 'Termine')

@section('body')
    <div class="container">
        @if($courses)
            <div class="row">
                <div class="col text-center">
                    <h1 class="font-weight-normal text-7 mb-2"><strong class="font-weight-extra-bold">{{ t('first aid courses in :location and surroundings', [':location' => $location]) }}</strong></h1>
                    <p class="mb-0 lead">{{ t('Book here your first aid course in :location and the surrounding area', [':location' => $location]) }}</p>
                    <p class="mb-1">{{ t('If you have any questions or problems, we are available by phone at 0202 898 37 565.') }}</p>
                </div>
            </div>
            <div class="header-top header-top-default border-bottom-0 bg-color-primary rounded">
                <div class="container">
                    <div class="header-row py-2 text-justify">
                        <div class="header-column justify-content-center">
                            <div class="header-row">
                                <nav class="header-nav-top">
                                    <ul class="nav nav-pills text-white text-2 text-justify text-center">
                                        <li class="nav-item">
                                            Sobald das Ende des aktuellen Lockdowns feststeht, werden wir Zusatztermine anbieten. Alle angemeldeten Teilnehmer werden frühzeitig von uns per E-Mail informiert und bekommen dann die Möglichkeit auf einen neuen, früheren Termin umzubuchen. Buchen Sie jetzt einen freien Termin und wechseln Sie später (auf Wunsch) auf ein früheres Datum.
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col text-center">
                    <h1 class="font-weight-normal text-7 mb-2"><strong class="font-weight-extra-bold">{{ t('first aid courses in :location and surroundings', [':location' => $location]) }}</strong></h1>
                    <p class="mb-0 lead">{{ t('Unfortunately, we currently don\'t offer any first aid courses in :location and the surrounding area.', [':location' => $location]) }}</p>
                    <p class="mb-1">{{ t('If you urgently need a course, we are at your disposal on 0202 898 37 565.') }}</p>
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
                                    {{ t(':seats free seats', [':seats' => $course->seats - count($course->participants)]) }}
                                @else
                                    <strong>{{ t('booked up') }}</strong>
                                @endif
                                @if(($course->seats - count($course->participants)) > 0)
                                    <br>
                                    <a class="btn btn-badge btn-modern btn-primary mb-2" href="{{ route('event.book', ['course' => $course]) }}">{{ t('book') }} <span class="badge badge-dark badge-sm badge-pill text-uppercase px-2 py-1">{{ $course->prices[0]['price'] }} {{ $course->prices[0]['currency'] }}</span></a>
                                @endif
                            </div>
                        </div>

                        <hr class="solid">
                    </div>
                </div>
            @empty
                <div class="row">
                    <div class="col text-center">
                        <p class="mb-0 lead">{{ t('Above, you can select and display our current, closest course locations to :location.', [':location' => $location]) }}</p>
                        <p class="mb-1">{{ t('If you have any questions or problems, we are available by phone at 0202 898 37 565.') }}</p>
                    </div>
                </div>

            @endforelse

        </div>

    </div>
@endsection
