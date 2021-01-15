<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'localize', 'set.locale'],
    ], function () {
        Route::get('/', function () {
            return view('welcome');
        });

        Route::get(LaravelLocalization::transRoute('routes.warranty'), function () {
            return view('warranty');
        })->name('warranty');

        Route::get(LaravelLocalization::transRoute('routes.corona'), function () {
            return view('corona');
        })->name('corona');

        Route::get(LaravelLocalization::transRoute('routes.imprint'), [\App\Http\Controllers\LegalController::class, 'imprint'])->name('legal.imprint');
        Route::get(LaravelLocalization::transRoute('routes.gtc'), [\App\Http\Controllers\LegalController::class, 'conditions'])->name('legal.conditions');
        Route::get(LaravelLocalization::transRoute('routes.revocation'), [\App\Http\Controllers\LegalController::class, 'revocation'])->name('legal.revocation');
        Route::get(LaravelLocalization::transRoute('routes.privacy'), [\App\Http\Controllers\LegalController::class, 'dataProtection'])->name('legal.privacy');
        Route::get(LaravelLocalization::transRoute('routes.cookie'), [\App\Http\Controllers\LegalController::class, 'cookie'])->name('legal.cookie');

        Route::post(LaravelLocalization::transRoute('routes.contact'), [\App\Http\Controllers\ContactController::class, 'store'])->name('contact.send');
        Route::get(LaravelLocalization::transRoute('routes.contact'), [\App\Http\Controllers\ContactController::class, 'index'])->name('contact.show');

        Route::get(LaravelLocalization::transRoute('routes.first-aid-course-drivers-license'), [\App\Http\Controllers\FirstAidController::class, 'driversLicense'])->name('fa.driversLicense');
        Route::get(LaravelLocalization::transRoute('routes.first-aid-course/wuppertal'), function () {
            return view('fa-driversLicense-wuppertal');
        })->name('fa.wuppertal');

        Route::get(LaravelLocalization::transRoute('routes.first-aid-course-business'), [\App\Http\Controllers\FirstAidController::class, 'business'])->name('fa.business');

        Route::get(LaravelLocalization::transRoute('routes.events/location'), [\App\Http\Controllers\EventController::class, 'location'])->name('event.location');
        Route::post(LaravelLocalization::transRoute('routes.events/location'), [\App\Http\Controllers\EventController::class, 'location'])->name('event.location');
        Route::post(LaravelLocalization::transRoute('routes.events'), [\App\Http\Controllers\EventController::class, 'search'])->name('event.search');
        Route::get(LaravelLocalization::transRoute('routes.events'), [\App\Http\Controllers\EventController::class, 'index'])->name('event.overview');
        Route::get(LaravelLocalization::transRoute('routes.booking/course'), [\App\Http\Controllers\BookingController::class, 'create'])->name('event.book');
        Route::get(LaravelLocalization::transRoute('routes.booking/course/correct'), [\App\Http\Controllers\BookingController::class, 'correct'])->name('event.correct');
        Route::post(LaravelLocalization::transRoute('routes.booking/course/pay'), [\App\Http\Controllers\BookingController::class, 'pay'])->name('event.pay');
        Route::get(LaravelLocalization::transRoute('routes.booking/course/checkout'), [\App\Http\Controllers\BookingController::class, 'checkout'])->name('event.checkout');
        Route::post(LaravelLocalization::transRoute('routes.booking/course'), [\App\Http\Controllers\BookingController::class, 'store'])->name('event.store');
        Route::get(LaravelLocalization::transRoute('routes.booking/course/success'), [\App\Http\Controllers\BookingController::class, 'success'])->name('event.success');

        Route::get(LaravelLocalization::transRoute('routes.faq'), [\App\Http\Controllers\QuestionController::class, 'index'])->name('question.index');

        // TODO remove
        Route::get('distance', [\App\Http\Controllers\DistanceController::class, 'index']);

        Route::post('webhooks/mollie', [\App\Http\Controllers\MollieWebhookController::class, 'handle'])->name('webhooks.mollie');
    });

Route::get('paypal/{course}/confirm', [\App\Http\Controllers\PayPalController::class, 'confirm'])->name('paypal.confirm');
Route::get('paypal/{course}/abort', [\App\Http\Controllers\PayPalController::class, 'abort'])->name('paypal.abort');
Route::post('paypal/ipn', [\App\Http\Controllers\PayPalController::class, 'ipn']);

Route::permanentRedirect('/erste-hilfe/wuppertal', '/erste-hilfe-kurs/wuppertal');
Route::permanentRedirect('/rechtliches/impressum', '/impressum');
Route::permanentRedirect('/rechtliches/datenschutz', '/datenschutz');
Route::permanentRedirect('/rechtliches/agb', '/agb');
Route::permanentRedirect('/rechtliches/widerrufsbelehrung', '/widerruf');
