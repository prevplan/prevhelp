@extends('layouts.frontend')


@section('body')
    <div class="container py-2">

        <div class="row">
            <div class="col">

                @include('layouts.error')

                <form action="{{ route('event.store', ['course' => $course]) }}" id="form"
                      method="post"
                      onsubmit="submit.disabled = true; submit.innerText='{{ t('booking ...') }}'; return true;"
                      role="form">
                    @csrf
                    <x-honeypot />
                    <div class="overflow-hidden mb-1">
                        <h4><strong class="font-weight-extra-bold">{{ t('please confirm your booking') }}</strong></h4>
                    </div>
                    <div class="overflow-hidden mb-4 pb-3">
                        <p class="mb-0">{{ $course->street }}, {{ $course->zipcode }} {{ $course->location }} - {{ \Carbon\Carbon::parse($course->start)->format('d.m.Y H:i') }} Uhr - {{ \Carbon\Carbon::parse($course->end)->format('H:i') }} Uhr</p>
                    </div>

                    @if( LaravelLocalization::getCurrentLocale() != 'de')
                        <div class="form-row">
                            <div class="form-group col">
                                <div align="center">
                                    <strong>the course language is german</strong>
                                </div>
                            </div>
                        </div>
                    @endif

                    @foreach($course->prices as $price)
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <input id="{{ $price->id }}" name="price" required
                                   type="radio" value="{{ $price->id }}" {{ ((old('price') == $price->id || $loop->count == 1) ? 'checked="checked"' : '') }}>
                                <label for="{{ $price->id }}"><strong>{{ $price->price }} {{ $price->currency }}</strong> - {{ $price->title }}</label>
                            </div>
                            <div class="form-group col-md-6">
                                {{ $price->description }}
                            </div>
                        </div>
                    @endforeach

                    <hr class="solid">

                    <div class="form-row">
                        <div class="form-group col">
                            <strong>{{ t('payment method') }}:</strong> {{ ($data['payment'] == 'paypal') ? 'PayPal' : t('cash/card payment on course day') }}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <strong>{{ t('first name') }}:</strong> {{ $data['firstname'] }}
                        </div>
                        <div class="form-group col-md-4">
                            <strong>{{ t('last name') }}:</strong> {{ $data['lastname'] }}
                        </div>
                        <div class="form-group col-md-4">
                            <strong>{{ t('date of birth') }}:</strong> {{ \Carbon\Carbon::parse($data['date_of_birth'])->format('d.m.Y' )}}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <strong>{{ t('place of residence') }}:</strong> {{ $data['street'] }} {{ $data['house_number'] }}, {{ $data['zipcode'] }} {{ $data['location'] }}
                        </div>
                        <div class="form-group col-md-4">
                            <strong>{{ t('phone number') }}:</strong> {{ $data['phone'] }}
                        </div>
                        <div class="form-group col-md-4">
                            <strong>{{ t('e-mail address') }}:</strong> {{ $data['email'] }}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <div align="center">
                                <a href="{{ route('event.correct', $course) }}">{{ t('change information') }}</a>
                            </div>
                        </div>
                    </div>

                    <hr class="solid">

                    <div class="form-row">
                        <div class="form-group col">
                            <div class="custom-checkbox-1">
                                <input id="checkboxTerms"
                                       name="terms"
                                       required
                                       type="checkbox" {{ (old('terms') ? 'checked="checked"' : '') }}>
                                <label for="checkboxTerms">{!! html_entity_decode( t('I have read and accepted the <a href=":link" target="_blank">general terms and conditions</a>.', [':link' => route('legal.conditions')]) ) !!}</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <div class="custom-checkbox-1">
                                <input id="checkboxDataProtection"
                                       name="dataProtection"
                                       required
                                       type="checkbox" {{ (old('dataProtection') ? 'checked="checked"' : '') }}
                                >
                                <label for="checkboxDataProtection">{!! html_entity_decode( t('I agree that my details from the booking form will be collected and processed to process my booking. You can find detailed information on handling user data in the <a href=":link" target="_blank">privacy policy</a>.', [':link' => route('legal.privacy')]) ) !!}</label>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="rating" value="0">
                    <div class="form-row">
                        <div class="form-group col">
                            <div class="custom-checkbox-1">
                                <input id="checkboxRating"
                                       name="rating"
                                       value="1"
                                       type="checkbox" {{ (old('rating') ? 'checked="checked"' : '') }}
                                >
                                <label for="checkboxRating">{!! html_entity_decode( t('I agree that <a href=":link" target="_blank">Trustpilot</a> will ask me for a rating by email.', [':link' => 'https://' . (LaravelLocalization::getCurrentLocale() == 'en' ? 'www' : LaravelLocalization::getCurrentLocale()) . '.trustpilot.com/review/prevhelp.de']) ) !!}</label>
                            </div>
                        </div>
                    </div>
                    @if($course->start < \Carbon\Carbon::now()->addDays(14))
                        <div class="form-row">
                            <div class="form-group col">
                                <div class="custom-checkbox-1">
                                    <input id="checkboxCancellationPolicy"
                                           name="cancellationPolicy"
                                           required
                                           type="checkbox" {{ (old('cancellationPolicy') ? 'checked="checked"' : '') }}
                                    >
                                    <label for="checkboxCancellationPolicy">{!! html_entity_decode( t('I request and expressly agree that you start the service I have ordered before the withdrawal period has expired. I know that my <a href=":link" target="_blank">right of revocation</a> expires once the contract has been fully fulfilled.', [':link' => route('legal.revocation')]) ) !!}</label>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="form-row">
                            <div class="form-group col">
                                <div class="custom-checkbox-1">
                                    <input id="checkboxCancellationPolicy"
                                           name="cancellationPolicy"
                                           required
                                           type="checkbox" {{ (old('cancellationPolicy') ? 'checked="checked"' : '') }}
                                    >
                                    <label for="checkboxCancellationPolicy">{!! html_entity_decode( t('I have taken note of the <a href=":link" target="_blank">revocation policy</a>.', [':link' => route('legal.revocation')]) ) !!}</label>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="form-row">
                        <div class="form-group col-md-12 mb-5">
                            <button class="btn btn-primary btn-modern pull-right" name="submit" type="submit">{{ t('book with obligation to pay') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
