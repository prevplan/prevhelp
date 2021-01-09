@extends('layouts.frontend')

@section('meta.title', t('frequently asked questions') .  ' | PrevHelp')

@section('body')
    <section class="page-header page-header-classic">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">FAQ</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col p-static">
                    <h1 data-title-border>FAQ</h1>

                </div>
            </div>
        </div>
    </section>

    <div class="container py-4">

        <div class="row">
            <div class="col">

                <h2 class="font-weight-normal text-7 mb-2">{!! html_entity_decode(t('frequently asked <strong class="font-weight-extra-bold">questions</strong>')) !!}</h2>
                <p class="lead">{!! html_entity_decode(t('On this site, we\'ll answer some frequently asked questions. If we don\'t answer your question here, please don\'t bother to <a href=":link">contact</a> us.', [':link' => route('contact.show')])) !!}</p>

                <hr class="solid my-5">

                <div class="toggle toggle-primary" data-plugin-toggle>
                    <section class="toggle active">
                        <a class="toggle-title">{{ t('How long does the course last?') }}</a>
                        <div class="toggle-content">
                            <p>{!! html_entity_decode( t('The duration of the courses varies depending on the course format and topic. Our first aid courses, for example, last 7.5 hours, corresponding to the prescribed nine teaching units, including breaks. Unless otherwise stated in the booking our courses take place <strong>on one day</strong>.') ) !!}</p>
                        </div>
                    </section>

                    <section class="toggle">
                        <a class="toggle-title">{{ t('Are there breaks during the courses?') }}</a>
                        <div class="toggle-content">
                            <p>{{ t('Of course, there are several breaks during our courses. Particular care is taken to ensure that the breaks in all-day courses total at least 45 minutes, which means that our courses are also suitable for company participants. The provisions of the Working Hours Act are fully taken into account.') }}</p>
                        </div>
                    </section>
                </div>

            </div>

        </div>
    </div>
@endsection
