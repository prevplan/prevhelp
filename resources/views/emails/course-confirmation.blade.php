@component('mail::message', [
        'trustpilot' => true,
        'name' => $request->firstname . ' ' . $request->lastname,
        'email' => $request->email,
        'referenceId' => $participant->id,
        'preferredSendTime' => \Carbon\Carbon::create($course->end)->addDay()->format('Y-m-d\TH:i:s'),
        'locale' => LaravelLocalization::getCurrentLocaleRegional()
    ]
)
# {{ t('confirmation of the course booking') }}

{{ t('Hello :name', [':name' => $request->firstname]) }},

{{ t('you have successfully booked a course with PrevHelp.') }}

<strong>{{ t('course details') }}</strong><br>
{{ __($course->course_types[0]->name) }}<br>
{{ \Carbon\Carbon::parse($course->start)->format('d.m.Y H:i') }} {{ t('o\'clock') }} - {{ \Carbon\Carbon::parse($course->end)->format('H:i') }} {{ t('o\'clock') }}<br>

<strong>{{ t('course location') }}</strong><br>
{{ $course->seminar_location }}<br>
{{ $course->street }}<br>
{{ $course->zipcode }} {{ $course->location }}

<strong>{{ __('price') }}</strong> {{ $course->prices->pluck('price', 'id')[$request->price] }} {{ $course->prices->pluck('currency', 'id')[$request->price] }}

{{ t('If you have any questions, write an e-mail to [:mail](mailto::mail) or answer directly to this e-mail.', [':mail' => 'info@prevhelp.de']) }}
@endcomponent
