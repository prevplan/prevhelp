@extends('layouts.frontend')

@section('body')
    <div class="container">
        <section class="http-error py-0">
            <div class="row justify-content-center py-3">
                <div class="col-6 text-center">
                    <div class="http-error-main">
                        <h2 class="mb-0">500</h2>
                        <span class="text-6 font-weight-bold text-color-dark">interner Fehler</span>
                        <p class="text-3 my-4">Unsere Technik wurde informiert und wird umgehend Erste Hilfe leisten.</p>
                    </div>
                    <a href="/" class="btn btn-primary btn-rounded btn-xl font-weight-semibold text-2 px-4 py-3 mt-1 mb-4"><i class="fal fa-siren pr-3"></i>bitte hier entlang</a>
                </div>
            </div>
        </section>
    </div>
@endsection
