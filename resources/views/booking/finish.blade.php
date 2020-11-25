@extends('layouts.frontend')

@section('body')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-width-3 border-radius-0 border-color-success">
                    <div class="card-body text-center">
                        <p class="text-color-dark font-weight-bold text-4-5 mb-0"><i class="fas fa-check text-color-success mr-1"></i> Vielen Dank. Die Buchung war erfolgreich.</p>
                        <hr>
                        <p>Eine Zusammenfassung der Buchung wurde per E-Mail zugesandt.</p>
                        <p><a href="{{ route('event.book', ['course' => $course]) }}">weiteren Teilnehmer buchen</a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
