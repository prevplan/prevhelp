@extends('layouts.frontend')

@section('body')
    <section class="page-header page-header-modern page-header-background page-header-background-md parallax overlay overlay-color-dark overlay-show overlay-op-5 mt-0" data-plugin-parallax data-plugin-options="{'speed': 1.2}" data-image-src="{{ asset('img/business-1920.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1>Kontakt</h1>
                    <span class="sub-title">Sprechen Sie uns an!</span>
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

                <?php
                if (isset($arrResult)) {
                    if ($arrResult['response'] == 'success') {
                        ?>
                <div class="alert alert-success">
                    <strong>Success!</strong> Your message has been sent to us.
                </div>
                <?php
                    } elseif ($arrResult['response'] == 'error') {
                        ?>
                <div class="alert alert-danger">
                    <strong>Error!</strong> There was an error sending your message.
                    <span class="font-size-xs mt-2 d-block"><?php echo $arrResult['errorMessage']; ?></span>
                </div>
                <?php
                    } elseif ($arrResult['response'] == 'captchaError') {
                        ?>
                <div class="alert alert-danger">
                    <strong>Error!</strong> Verification failed.
                </div>
                <?php
                    }
                }
                ?>

                <form id="contactFormAdvanced" action="<?php echo basename($_SERVER['PHP_SELF']); ?>#contact-sent" method="POST" enctype="multipart/form-data">
                    <input type="hidden" value="true" name="emailSent" id="emailSent">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="required font-weight-bold text-dark text-2">Full Name</label>
                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="required font-weight-bold text-dark text-2">Email Address</label>
                            <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label class="font-weight-bold text-dark text-2">Subject</label>
                            <select data-msg-required="Please enter the subject." class="form-control" name="subject" id="subject" required>
                                <option value="">...</option>
                                <option value="Option 1">Option 1</option>
                                <option value="Option 2">Option 2</option>
                                <option value="Option 3">Option 3</option>
                                <option value="Option 4">Option 4</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <p class="mb-2">Checkboxes</p>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" name="checkboxes[]" type="checkbox" data-msg-required="Please select at least one option." id="inlineCheckbox1" value="option1"> 1
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" name="checkboxes[]" type="checkbox" data-msg-required="Please select at least one option." id="inlineCheckbox1" value="option2"> 2
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" name="checkboxes[]" type="checkbox" data-msg-required="Please select at least one option." id="inlineCheckbox1" value="option3"> 3
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <p class="mb-2">Radios</p>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="inlineRadio1" value="option1"> 1
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="inlineRadio2" value="option2"> 2
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="inlineRadio3" value="option3"> 3
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label class="font-weight-bold text-dark text-2">Attachment</label>
                            <input class="d-block" type="file" name="attachment" id="attachment">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 mb-4">
                            <label class="required font-weight-bold text-dark text-2">Message</label>
                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="6" class="form-control" name="message" id="message" required></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 mb-0">
                            <label class="font-weight-bold text-dark text-2">Human Verification</label>
                        </div>
                    </div>
                    <div class="form-row pt-2">
                        <div class="form-group col-md-4">
                            <div class="captcha form-control">
                                <div class="captcha-image">

                                </div>
                                <div class="captcha-refresh">
                                    <a href="#" id="refreshCaptcha"><i class="fas fa-sync"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-8">
                            <input type="text" value="" maxlength="6" data-msg-captcha="Wrong verification code." data-msg-required="Please enter the verification code." placeholder="Type the verification code." class="form-control form-control-lg captcha-input" name="captcha" id="captcha" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <hr>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 mb-5">
                            <input type="submit" id="contactFormSubmit" value="Send Message" class="btn btn-primary btn-modern pull-right" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-lg-5">

                <div class="overflow-hidden mb-1">
                    <h4 class="text-primary mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Wir sind f&uuml; <strong>Sie</strong> da</h4>
                </div>
                <div class="overflow-hidden mb-3">
                    <p class="lead text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Sie haben eine pers&ouml;nliche Frage oder ein individuelles Anliegen? Sie w&uuml;nschen eine individuelle Beratung oder ein besonderes Angebot? Wir freuen uns auf <strong>Sie!</strong></p>
                </div>
                <div class="overflow-hidden">
                    <p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="600">Kontaktieren Sie uns auf Ihrem bevorzugten Weg und wir finden die passende L&ouml;sung f&uuml;r Sie.</p>
                </div>

                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                    <h4 class="text-primary pt-5">Unser <strong>Hauptsitz</strong></h4>
                    <ul class="list list-icons list-icons-style-3 mt-2">
                        <li><i class="fas fa-map-marker-alt top-6"></i> <strong>Anschrift:</strong> Edith-Stein-Str. 52, 42329 Wuppertal</li>
                        <li><i class="fas fa-phone top-6"></i> <strong>Telefon:</strong> 0202 - 898 37 565</li>
                        <li><i class="fas fa-envelope top-6"></i> <strong>E-Mail:</strong> <a href="mailto:info@prevhelp.de">info@prevhelp.de</a></li>
                    </ul>

                    <h4 class="text-primary pt-5">telefonische <strong>Erreichbarkeit</strong></h4>
                    <ul class="list list-icons list-dark mt-2">
                        <li><i class="far fa-clock top-6"></i> Montag - Freitag - 09:00 - 17:00 Uhr</li>
                    </ul>
                </div>

            </div>

        </div>

    </div>

    <!-- Google Maps - Go to the bottom of the page to change settings and map location.
    <div id="googlemaps" class="google-map m-0" style="height: 650px;"></div> -->
@endsection

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
