@extends('layouts.frontend')

@section('meta.title', t('Contact'))
@section('meta.description', t('Get in contact ✉️ with us, and together we will find the right solution. 🤝'))

@section('markup')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "EducationalOrganization",
      "name": "PrevHelp",
      "url": "https://prevhelp.de",
      "logo": "https://prevhelp.de/img/logo.png",
      "sameAs": [
        "https://www.facebook.com/prevhelpde",
        "https://twitter.com/prevhelpde",
        "https://www.instagram.com/prevhelp.de"
      ]
    }
    </script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "PrevHelp",
      "image": "https://prevhelp.de/img/logo.png",
      "@id": "https://prevhelp.de",
      "url": "https://prevhelp.de",
      "telephone": "+49 202 898 37 656",
      "priceRange": "best-price-in-town",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Edith-Stein-Str. 52",
        "addressLocality": "Wuppertal",
        "postalCode": "42329",
        "addressCountry": "DE"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 51.2284642,
        "longitude": 7.0699682
      },
      "openingHoursSpecification": [{
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday"
        ],
        "opens": "09:00",
        "closes": "17:00"
      },{
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": "Saturday",
        "opens": "09:00",
        "closes": "15:00"
      }]
    }
    </script>
@endsection

@section('body')
    <section class="page-header page-header-modern page-header-background page-header-background-md parallax overlay overlay-color-dark overlay-show overlay-op-5 mt-0" data-plugin-parallax data-plugin-options="{'speed': 1.2}" data-image-src="{{ asset('img/business-1920.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1>{{ t('Contact') }}</h1>
                    <span class="sub-title">{{ t('Contact us!') }}</span>
                </div>
                {{--
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb breadcrumb-light d-block text-md-right">
                        <li><a href="#">Home</a></li>
                        <li class="active">Pages</li>
                    </ul>
                </div>
                --}}
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row py-4">
            <div class="col-lg-7 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="650">

                <div class="offset-anchor" id="contact-sent"></div>

                @if( $ticket_id ?? '' )
                    <div class="alert alert-success">
                        {!! html_entity_decode( t('<strong>Thank you.</strong> We will process your request under the ticket ID <em>#:ticket_id</em>.', [':ticket_id' => $ticket_id]) ) !!}
                    </div>
                @elseif( $error_msg ?? '' )
                    <div class="alert alert-danger">
                        {!! html_entity_decode( t('<strong>Error!</strong> Unfortunately there was an error saving your request.') ) !!}
                        <span class="font-size-xs mt-2 d-block">{{ $error_msg }}</span>
                        <br />
                        {{ t('Please write us an email directly to') }} <a href="mailto:info@prevhelp.de">info@prevhelp.de</a>
                    </div>
                @endif

                <form id="contactFormAdvanced" action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <x-honeypot />
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="font-weight-bold text-dark text-2">{{ t('Name') }}</label>
                            <input type="text" value="" data-msg-required="{{ t('Please enter your name.') }}" maxlength="100" class="form-control" name="name" id="name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="font-weight-bold text-dark text-2">{{ t('e-mail address') }}</label>
                            <input type="email" value="" data-msg-required="{{ t('Please enter your email address.') }}" data-msg-email="{{ t('Please enter a valid email address.') }}" maxlength="100" class="form-control" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label class="font-weight-bold text-dark text-2">{{ t('Subject') }}</label>
                            <input type="text" value="" data-msg-required="{{ t('Please enter a subject.') }}" maxlength="100" class="form-control" name="subject" id="subject" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 mb-4">
                            <label class="font-weight-bold text-dark text-2">{{ t('Your message to us') }}</label>
                            <textarea maxlength="5000" data-msg-required="{{ t('Please enter your message.') }}" rows="6" class="form-control" name="message" id="message" required></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <hr>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 mb-5">
                            <input type="submit" id="contactFormSubmit" value="{{ t('send Message') }}" class="btn btn-primary btn-modern pull-right" data-loading-text="{{ t('Please wait ...') }}">
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-lg-5">

                <div class="overflow-hidden mb-1">
                    <h4 class="text-primary mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">{{ t('We are here for you') }}</h4>
                </div>
                <div class="overflow-hidden mb-3">
                    <p class="lead text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">{{ t('Do you have a personal question or an individual concern? Would you like individual advice or a special offer? We look forward to you!') }}</p>
                </div>
                <div class="overflow-hidden">
                    <p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="600">
                        {{ t('Contact us on your preferred route, and we will find the right solution for you.') }}</p>
                </div>

                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                    <h4 class="text-primary pt-5">{{ t('Our headquarter') }}</h4>
                    <ul class="list list-icons list-icons-style-3 mt-2">
                        <li><i class="fas fa-map-marker-alt top-6"></i> <strong>{{ t('address') }}:</strong> Edith-Stein-Str. 52, 42329 Wuppertal</li>
                        <li><i class="fas fa-phone top-6"></i> <strong>{{ t('phone') }}:</strong> 0202 - 898 37 565</li>
                        <li><i class="fas fa-envelope top-6"></i> <strong>{{ t('e-mail') }}:</strong> <a href="mailto:info@prevhelp.de">info@prevhelp.de</a></li>
                    </ul>

                    <h4 class="text-primary pt-5">{{ t('telephone availability') }}</h4>
                    <ul class="list list-icons list-dark mt-2">
                        <li><i class="far fa-clock top-6"></i> {{ t('Monday - Friday') }} 09:00 - 17:00 {{ t('o\'clock') }}</li>
                        <li><i class="far fa-clock top-6"></i> {{ t('Saturday') }} 09:00 - 15:00 {{ t('o\'clock') }}</li>
                    </ul>
                </div>

            </div>

        </div>

    </div>

    <!-- Google Maps - Go to the bottom of the page to change settings and map location.
    <div id="googlemaps" class="google-map m-0" style="height: 650px;"></div> -->
@endsection

{{--
@section('footer')
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
    <script>

        /*
        Map Settings

            Find the Latitude and Longitude of your address:
                - http://universimmedia.pagesperso-orange.fr/geo/loc.htm
                - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

        */

        // Map Markers
        var mapMarkers = [{
            address: "217 Summit Boulevard, Birmingham, AL 35243",
            html: "<strong>Alabama Office</strong><br>217 Summit Boulevard, Birmingham, AL 35243<br><br><a href='#' onclick='mapCenterAt({latitude: 33.44792, longitude: -86.72963, zoom: 16}, event)'>[+] zoom here</a>",
            icon: {
                image: "img/pin.png",
                iconsize: [26, 46],
                iconanchor: [12, 46]
            }
        },{
            address: "645 E. Shaw Avenue, Fresno, CA 93710",
            html: "<strong>California Office</strong><br>645 E. Shaw Avenue, Fresno, CA 93710<br><br><a href='#' onclick='mapCenterAt({latitude: 36.80948, longitude: -119.77598, zoom: 16}, event)'>[+] zoom here</a>",
            icon: {
                image: "img/pin.png",
                iconsize: [26, 46],
                iconanchor: [12, 46]
            }
        },{
            address: "New York, NY 10017",
            html: "<strong>New York Office</strong><br>New York, NY 10017<br><br><a href='#' onclick='mapCenterAt({latitude: 40.75198, longitude: -73.96978, zoom: 16}, event)'>[+] zoom here</a>",
            icon: {
                image: "img/pin.png",
                iconsize: [26, 46],
                iconanchor: [12, 46]
            }
        }];

        // Map Initial Location
        var initLatitude = 37.09024;
        var initLongitude = -95.71289;

        // Map Extended Settings
        var mapSettings = {
            controls: {
                draggable: (($.browser.mobile) ? false : true),
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: true,
                streetViewControl: true,
                overviewMapControl: true
            },
            scrollwheel: false,
            markers: mapMarkers,
            latitude: initLatitude,
            longitude: initLongitude,
            zoom: 5
        };

        var map = $('#googlemaps').gMap(mapSettings),
            mapRef = $('#googlemaps').data('gMap.reference');

        // Map Center At
        var mapCenterAt = function(options, e) {
            e.preventDefault();
            $('#googlemaps').gMap("centerAt", options);
        }

        // Styles from https://snazzymaps.com/
        var styles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];

        var styledMap = new google.maps.StyledMapType(styles, {
            name: 'Styled Map'
        });

        mapRef.mapTypes.set('map_style', styledMap);
        mapRef.setMapTypeId('map_style');

    </script>
@endsection
--}}
