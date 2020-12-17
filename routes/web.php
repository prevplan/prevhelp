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

Route::get('/', function () {
    return view('welcome');
});

Route::get('garantie', function () {
    return view('warranty');
})->name('warranty');

Route::get('corona', function () {
    return view('corona');
})->name('corona');

Route::get('distance', [\App\Http\Controllers\DistanceController::class, 'index']);

Route::get('impressum', [\App\Http\Controllers\LegalController::class, 'imprint'])->name('legal.imprint');
Route::get('agb', [\App\Http\Controllers\LegalController::class, 'conditions'])->name('legal.conditions');
Route::get('widerruf', [\App\Http\Controllers\LegalController::class, 'revocation'])->name('legal.revocation');
Route::get('datenschutz', [\App\Http\Controllers\LegalController::class, 'dataProtection'])->name('legal.dataProtection');
Route::get('cookie', [\App\Http\Controllers\LegalController::class, 'cookie'])->name('legal.cookie');

Route::post('kontakt', [\App\Http\Controllers\ContactController::class, 'store'])->name('contact.send');
Route::get('kontakt', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact.show');

Route::get('erste-hilfe-kurs-fuehrerschein', [\App\Http\Controllers\FirstAidController::class, 'driversLicense'])->name('fa.driversLicense');
Route::get('erste-hilfe-kurs/wuppertal', function () {
    return view('fa-driversLicense-wuppertal');
})->name('fa.wuppertal');

Route::get('erste-hilfe-kurs-betrieb', [\App\Http\Controllers\FirstAidController::class, 'business'])->name('fa.business');

Route::get('/termine/{location}', [\App\Http\Controllers\EventController::class, 'location'])->name('event.location');
Route::post('/termine/{location}', [\App\Http\Controllers\EventController::class, 'location'])->name('event.location');
Route::post('termine', [\App\Http\Controllers\EventController::class, 'search'])->name('event.search');
Route::get('termine', [\App\Http\Controllers\EventController::class, 'index'])->name('event.overview');
Route::get('buchen/{course}', [\App\Http\Controllers\BookingController::class, 'create'])->name('event.book');
Route::post('buchen/{course}', [\App\Http\Controllers\BookingController::class, 'store'])->name('event.store');
Route::get('buchen/{course}/erfolg', [\App\Http\Controllers\BookingController::class, 'success'])->name('event.success');

Route::get('faq', [\App\Http\Controllers\QuestionController::class, 'index'])->name('question.index');

Route::post('webhooks/mollie', [\App\Http\Controllers\MollieWebhookController::class, 'handle'])->name('webhooks.mollie');

Route::permanentRedirect('/erste-hilfe/wuppertal', '/erste-hilfe-kurs/wuppertal');
Route::permanentRedirect('/rechtliches/impressum', '/impressum');
Route::permanentRedirect('/rechtliches/datenschutz', '/datenschutz');
Route::permanentRedirect('/rechtliches/agb', '/agb');
Route::permanentRedirect('/rechtliches/widerrufsbelehrung', '/widerruf');
