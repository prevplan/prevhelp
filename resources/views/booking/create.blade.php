@extends('layouts.frontend')

@section('markup')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Event",
      "name": "Erste-Hilfe-Kurs",
      "description": "Erste-Hilfe-Kurs für den Führerschein und Betrieb.",
      "startDate": "{{ \Carbon\Carbon::parse($course->start)->format('Y-m-dTH:i') }}",
      "endDate": "{{ \Carbon\Carbon::parse($course->end)->format('Y-m-dTH:i') }}",
      "eventStatus": "https://schema.org/EventScheduled",
      "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
      "location": {
        "@type": "Place",
        "name": "{{ $course->seminar_location }}",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "{{ $course->street }}",
          "addressLocality": "{{ $course->location }}",
          "postalCode": "{{ $course->zipcode }}",
          "addressCountry": "DE"
        }
      },
      "organizer": {
        "@type": "Organization",
        "name": "PrevHelp",
        "url": "https://prevhelp.de"
      },
      "offers": [
        @foreach($course->prices as $price)
            {
                "@type": "Offer",
                "name": "{{ $price->title }}",
                "price": "{{ $price->price }}",
                "priceCurrency": "{{ $price->currency }}",
                "validFrom": "{{ \Carbon\Carbon::parse($course->created_at)->format('Y-m-dTH:i') }}",
                "url": "{{ URL::current() }}",
                "availability": "https://schema.org/InStock"
              }{{ ( !$loop->last ? ',' : '') }}
        @endforeach
      ]
    }
    </script>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/places.js@1.19.0"></script>

    <script>
        (function() {
            var placesAutocomplete = places({
                appId: 'pl141ZYVSU29',
                apiKey: '0512c6d23d2b05dd578dab20bc27a7e7',
                container: document.querySelector('#form-address'),
                templates: {
                    value: function(suggestion) {
                        return suggestion.name;
                    }
                }
            }).configure({
                countries: ['de'],
                type: 'address',
                language: 'de'
            });
            placesAutocomplete.on('change', function resultSelected(e) {
         //       document.querySelector('#form-address2').value = e.suggestion.administrative || '';
                document.querySelector('#form-zip').value = e.suggestion.postcode || '';
                document.querySelector('#form-city').value = e.suggestion.city || '';
            });
        })();
    </script>
@endsection

@section('body')
    <div class="container py-2">

        <div class="row">
            <div class="col">

                @include('layouts.error')

                <form action="{{ route('event.pay', ['course' => $course]) }}" id="form"
                      method="post"
                      onsubmit="submit.disabled = true; submit.innerText='{{ t('please wait ...') }}'; return true;"
                      role="form">
                    @csrf
                    <x-honeypot />
                    <div class="overflow-hidden mb-1">
                        <h2 class="font-weight-normal text-7 mb-0"><strong class="font-weight-extra-bold">{{ t('Book a first aid course in :location', [':location' => $course->location]) }}</strong></h2>
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
                            <div align="center">
                                <strong>{{ t('choose payment method') }}</strong>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment" value="paypal" id="payment-online" {{ (old('payment') == 'paypal') ? 'checked' : '' }} required>
                                <label class="form-check-label" for="payment-online">
                                    {!! html_entity_decode(t('Pay with <strong>PayPal</strong>')) !!}
                                </label>
                            </div>
                        </div>
                        <div class="form-group col">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment" value="local" id="payment-local" {{ (old('payment') == 'local') ? 'checked' : '' }} required>
                                <label class="form-check-label" for="payment-local">
                                    {!! html_entity_decode(t('Pay <strong>in cash / by card</strong> on the day of the course')) !!}
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr class="solid">

                    {{-- <h2 class="text-color-dark font-weight-bold text-5-6 mb-3">Billing Details</h2> --}}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>{{ t('first name') }} <span class="text-color-danger">*</span></label>
                            <input type="text" class="form-control border-radius-0 h-auto py-2" name="firstname" value="{{ old('firstname') }}" placeholder="{{ t('first name') }}" required />
                        </div>
                        <div class="form-group col-md-6">
                            <label>{{ t('last name') }} <span class="text-color-danger">*</span></label>
                            <input type="text" class="form-control border-radius-0 h-auto py-2" name="lastname" value="{{ old('lastname') }}" placeholder="{{ t('last name') }}" required />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>{{ t('date of birth') }} <span class="text-color-danger">*</span></label>
                            <input type="date" class="form-control border-radius-0 h-auto py-2" name="date_of_birth" value="{{ old('date_of_birth') ?? '' }}" placeholder="{{ \Carbon\Carbon::today()->format('d.m.Y' )}}" max="{{ \Carbon\Carbon::yesterday()->format('Y-m-d') }}" required />
                        </div>
                    </div>
                    {{--
                    <div class="form-row">
                        <div class="form-group col">
                            <label>Firmenname</label>
                            <input type="text" class="form-control border-radius-0 h-auto py-2" name="companyName" value="" />
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col">
                            <label>Country/Region <span class="text-color-danger">*</span></label>
                            <div class="custom-select-1">
                                <select class="form-control border-radius-0 h-auto py-2" name="country" required>
                                    <option value="" selected></option>
                                    <option value="usa">United States</option>
                                    <option value="spa">Spain</option>
                                    <option value="fra">France</option>
                                    <option value="uk">United Kingdon</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    --}}
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label>{{ t('street') }}<span class="text-color-danger">*</span></label>
                            <input type="search" class="form-control border-radius-0 h-auto py-2" id="form-address" name="street" value="{{ old('street') }}" placeholder="{{ t('street') }}" required />
                        </div>
                        <div class="form-group col-md-4">
                            <label>{{ t('house number') }}<span class="text-color-danger">*</span></label>
                            <input type="text" class="form-control border-radius-0 h-auto py-2" name="house_number" value="{{ old('house_number') }}" placeholder="{{ t('house number') }}" required />
                        </div>
                    </div>
                    {{--
                    <div class="form-row">
                        <div class="form-group col">
                            <input type="text" class="form-control border-radius-0 h-auto py-2" name="address2" value="" placeholder="Apartment, suite, unit, etc..." required />
                        </div>
                    </div>
                    --}}
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>{{ t('zip code') }} <span class="text-color-danger">*</span></label>
                            <input type="text" class="form-control border-radius-0 h-auto py-2" id="form-zip" name="zipcode" value="{{ old('zipcode') }}" placeholder="{{ t('zip code') }}" required />
                        </div>
                        <div class="form-group col-md-8">
                            <label>{{ t('place of residence') }} <span class="text-color-danger">*</span></label>
                            <input type="text" class="form-control border-radius-0 h-auto py-2" id="form-city" name="location" value="{{ old('location') }}" placeholder="{{ t('place of residence') }}" required />
                        </div>
                    </div>

                    {{--
                    <div class="form-row">
                        <div class="form-group col">
                            <label>State <span class="text-color-danger">*</span></label>
                            <div class="custom-select-1">
                                <select class="form-control border-radius-0 h-auto py-2" name="state" required>
                                    <option value="" selected></option>
                                    <option value="ny">Nova York</option>
                                    <option value="ca">California</option>
                                    <option value="tx">Texas</option>
                                    <option value="">Florida</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    --}}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>{{ t('phone number') }} <span class="text-color-danger">*</span></label>
                            <input type="text" class="form-control border-radius-0 h-auto py-2" name="phone" placeholder="{{ t('phone number') }}" value="{{ old('phone') }}" required />
                        </div>
                        <div class="form-group col-md-6">
                            <label>{{ t('e-mail address') }} <span class="text-color-danger">*</span></label>
                            <input type="email" class="form-control border-radius-0 h-auto py-2" name="email" placeholder="{{ t('e-mail address') }}" value="{{ old('email') }}" required />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 mb-5">
                            <button class="btn btn-primary btn-modern pull-right" name="submit" type="submit">{{ t('check inputs') }}</button>
                        </div>
                    </div>
                {{--
                    <div class="form-row">
                        <div class="form-group col">
                            <div class="custom-checkbox-1" data-toggle="collapse" data-target=".shipping-field-wrapper">
                                <input id="shipAddress" type="checkbox" name="shipAddress" value="1" />
                                <label for="shipAddress">Shop to a different address ?</label>
                            </div>
                        </div>
                    </div>
                    <!-- Ship to a differente address fields -->
                    <div class="shipping-field-wrapper collapse">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>First Name <span class="text-color-danger">*</span></label>
                                <input type="text" class="form-control border-radius-0 h-auto py-2" name="shippingFirstName" value="" required />
                            </div>
                            <div class="form-group col-md-6">
                                <label>Last Name <span class="text-color-danger">*</span></label>
                                <input type="text" class="form-control border-radius-0 h-auto py-2" name="shippingLastName" value="" required />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label>Company Name</label>
                                <input type="text" class="form-control border-radius-0 h-auto py-2" name="shippingCompanyName" value="" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label>Country/Region <span class="text-color-danger">*</span></label>
                                <div class="custom-select-1">
                                    <select class="form-control border-radius-0 h-auto py-2" name="shippingCountry" required>
                                        <option value="" selected></option>
                                        <option value="usa">United States</option>
                                        <option value="spa">Spain</option>
                                        <option value="fra">France</option>
                                        <option value="uk">United Kingdon</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label>Street Address <span class="text-color-danger">*</span></label>
                                <input type="text" class="form-control border-radius-0 h-auto py-2" name="shippingAddress1" value="" placeholder="House number and street name" required />
                            </div>
                            <div class="form-group col">
                                <input type="text" class="form-control border-radius-0 h-auto py-2" name="shippingAddress2" value="" placeholder="Apartment, suite, unit, etc..." required/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label>Town/City <span class="text-color-danger">*</span></label>
                                <input type="text" class="form-control border-radius-0 h-auto py-2" name="shippingCity" value="" required />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label>State <span class="text-color-danger">*</span></label>
                                <div class="custom-select-1">
                                    <select class="form-control border-radius-0 h-auto py-2" name="shippingState" required>
                                        <option value="" selected></option>
                                        <option value="ny">Nova York</option>
                                        <option value="ca">California</option>
                                        <option value="tx">Texas</option>
                                        <option value="">Florida</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label>ZIP <span class="text-color-danger">*</span></label>
                                <input type="text" class="form-control border-radius-0 h-auto py-2" name="shippingZip" value="" required />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label>Phone <span class="text-color-danger">*</span></label>
                                <input type="number" class="form-control border-radius-0 h-auto py-2" name="shippingPhone" value="" required />
                            </div>
                        </div>
                        <!-- End of Ship to a differente address fields -->
                    </div>

                <div class="form-row">
                    <div class="form-group col">
                        <label>Order Notes</label>
                        <textarea class="form-control border-radius-0 h-auto py-2" name="orderNotes" rows="5" placeholder="Notes about you orderm e.g. special notes for delivery"></textarea>
                    </div>
                </div>
                --}}
                </form>
            </div>
        </div>

    </div>
@endsection
