@component('mail::message')
# Kursbuchung Bestätigung

Hallo {{ $request->firstname }},

Du hast bei PrevHelp erfolgreich einen Kurs gebucht.

<strong>Kursdetails</strong><br>
{{ __($course->course_types[0]->name) }}<br>
{{ \Carbon\Carbon::parse($course->start)->format('d.m.Y H:i') }} Uhr - {{ \Carbon\Carbon::parse($course->end)->format('H:i') }} Uhr<br>

<strong>Kursort</strong><br>
{{ $course->seminar_location }}<br>
{{ $course->street }}<br>
{{ $course->zipcode }} {{ $course->location }}

<strong>{{ __('price') }}</strong> {{ $course->prices->pluck('price', 'id')[$request->price] }} {{ $course->prices->pluck('currency', 'id')[$request->price] }}

Falls noch Fragen sein sollten, schreibe eine E-Mail an [info@prevhelp.de](mailto:info@prevhelp.de) oder antworte einfach auf diese E-Mail
@endcomponent
