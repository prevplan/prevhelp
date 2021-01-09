@extends('layouts.frontend')

@section('body')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-width-3 border-radius-0 border-color-success">
                    <div class="card-body text-center">
                        <p class="text-color-dark font-weight-bold text-4-5 mb-0"><i class="fas fa-check text-color-success mr-1"></i> {{ t('Thank you. The booking was successful.') }}</p>
                        <hr>
                        <p>{{ t('We have sent you a booking confirmation by email.') }}</p>
                        <p><a href="{{ route('event.book', ['course' => $course]) }}">{{ t('book additional participant') }}</a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
