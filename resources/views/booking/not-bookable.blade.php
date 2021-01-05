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
      "eventStatus": "https://schema.org/EventCancelled",
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
        ]
      }
</script>
@endsection

@section('body')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-width-3 border-radius-0 border-color-danger">
                    <div class="card-body text-center">
                        <p class="text-color-dark font-weight-bold text-4-5 mb-0"><i class="fas fa-check text-color-danger mr-1"></i> Dieser Kurs ist leider nicht (mehr) buchbar.</p>
                        <hr>
                        <p>Selbstverständlich können Sie jeder Zeit einen Kurs an einem anderen Termin buchen.</p>
                        <p><a href="{{ route('event.location', ['location' => $course->location]) }}">weitere Termine anzeigen</a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
