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
                appId: env('PLACES_APP_ID'),
                apiKey: env('PLACES_API_KEY'),
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

                <form action="{{ route('event.store', ['course' => $course]) }}" id="form"
                      method="post"
                      onsubmit="submit.disabled = true; submit.innerText='buche…'; return true;"
                      role="form">
                    @csrf
                    <x-honeypot />
                    <div class="overflow-hidden mb-1">
                        <h2 class="font-weight-normal text-7 mb-0"><strong class="font-weight-extra-bold">Erste-Hilfe-Kurs in {{ $course->location }} buchen</strong></h2>
                    </div>
                    <div class="overflow-hidden mb-4 pb-3">
                        <p class="mb-0">{{ $course->street }}, {{ $course->zipcode }} {{ $course->location }} - {{ \Carbon\Carbon::parse($course->start)->format('d.m.Y H:i') }} Uhr - {{ \Carbon\Carbon::parse($course->end)->format('H:i') }} Uhr</p>
                    </div>

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

                    {{-- <h2 class="text-color-dark font-weight-bold text-5-6 mb-3">Billing Details</h2> --}}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Vorname <span class="text-color-danger">*</span></label>
                            <input type="text" class="form-control border-radius-0 h-auto py-2" name="firstname" value="{{ old('firstname') }}" placeholder="Vorname" required />
                        </div>
                        <div class="form-group col-md-6">
                            <label>Nachname <span class="text-color-danger">*</span></label>
                            <input type="text" class="form-control border-radius-0 h-auto py-2" name="lastname" value="{{ old('lastname') }}" placeholder="Nachname" required />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Geburtsdatum <span class="text-color-danger">*</span></label>
                            <input type="date" class="form-control border-radius-0 h-auto py-2" name="date_of_birth" value="{{ old('date_of_birth') ?? \Carbon\Carbon::now()->format('Y-m-d') }}" required />
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
                            <label>Stra&szlig;e<span class="text-color-danger">*</span></label>
                            <input type="search" class="form-control border-radius-0 h-auto py-2" id="form-address" name="street" value="{{ old('street') }}" placeholder="Straße" required />
                        </div>
                        <div class="form-group col-md-4">
                            <label>Hausnummer<span class="text-color-danger">*</span></label>
                            <input type="text" class="form-control border-radius-0 h-auto py-2" name="house_number" value="{{ old('house_number') }}" placeholder="Hausnummer" required />
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
                            <label>Postleitzahl <span class="text-color-danger">*</span></label>
                            <input type="text" class="form-control border-radius-0 h-auto py-2" id="form-zip" name="zipcode" value="{{ old('zipcode') }}" placeholder="Postleitzahl" required />
                        </div>
                        <div class="form-group col-md-8">
                            <label>Wohnort <span class="text-color-danger">*</span></label>
                            <input type="text" class="form-control border-radius-0 h-auto py-2" id="form-city" name="location" value="{{ old('location') }}" placeholder="Wohnort" required />
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
                            <label>Telefonnummer <span class="text-color-danger">*</span></label>
                            <input type="text" class="form-control border-radius-0 h-auto py-2" name="phone" value="{{ old('phone') }}" required />
                        </div>
                        <div class="form-group col-md-6">
                            <label>E-Mail Adresse <span class="text-color-danger">*</span></label>
                            <input type="email" class="form-control border-radius-0 h-auto py-2" name="email" value="{{ old('email') }}" required />
                        </div>
                    </div>
                    {{--
                        <div class="form-row">
                            <div class="form-group col">
                                <div class="custom-checkbox-1">
                                    <input id="createAccount" type="checkbox" name="createAccount" value="1" />
                                    <label for="createAccount">Create an account ?</label>
                                </div>
                            </div>
                        </div>
                    --}}
                    <div class="form-row">
                        <div class="form-group col">
                            <div class="custom-checkbox-1">
                                <input id="checkboxTerms"
                                       name="terms"
                                       required
                                       type="checkbox" {{ (old('terms') ? 'checked="checked"' : '') }}>
                                <label for="checkboxTerms">Ich habe die <a href="{{ route('legal.conditions') }}" target="_blank">allgemeinen Geschäftsbedingungen</a> gelesen und akzeptiert.</label>
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
                                <label for="checkboxDataProtection">Ich stimme zu, dass meine Angaben aus dem Buchungsformular zur Abwicklung meiner Buchung erhoben und verarbeitet werden. Detaillierte Informationen zum Umgang mit Nutzerdaten finden Sie in der <a href="{{ route('legal.dataProtection') }}" target="_blank">Datenschutzerklärung</a>.</label>
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
                                <label for="checkboxRating">Ich bin damit einverstanden, dass ich per E-Mail von <a href="https://de.trustpilot.com/review/prevhelp.de" target="_blank">trustpilot</a> um eine Bewertung gebeten werde.</label>
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
                                    <label for="checkboxCancellationPolicy">Hiermit verzichte ich insoweit auf mein mir zustehendes <a href="{{ route('legal.revocation') }}" target="_blank">Widerrufsrecht</a>, als die Leistung bereits vor Ablauf erbracht wird.</label>
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
                                    <label for="checkboxCancellationPolicy">Ich habe die <a href="{{ route('legal.revocation') }}" target="_blank">Widerrufsbelehrung</a> zur Kenntnis genommen.</label>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="form-row">
                        <div class="form-group col-md-12 mb-5">
                            <button class="btn btn-primary btn-modern pull-right" name="submit" type="submit">Kurs buchen</button>
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
