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

Route::get('erste-hilfe-kurs/wuppertal', function () {
    return view('fa-driversLicense-wuppertal');
});

Route::get('impressum', [\App\Http\Controllers\LegalController::class, 'imprint'])->name('legal.imprint');
Route::get('agb', [\App\Http\Controllers\LegalController::class, 'conditions'])->name('legal.conditions');
Route::get('widerruf', [\App\Http\Controllers\LegalController::class, 'revocation'])->name('legal.revocation');

Route::post('kontakt', [\App\Http\Controllers\ContactController::class, 'store'])->name('contact.send');
Route::get('kontakt', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact.show');

Route::get('erste-hilfe-kurs-fuehrerschein', [\App\Http\Controllers\FirstAidController::class, 'driversLicense'])->name('fa.driversLicense');

Route::get('erste-hilfe-kurs-betriebe', [\App\Http\Controllers\FirstAidController::class, 'business'])->name('fa.business');

Route::get('termine', [\App\Http\Controllers\EventController::class, 'index'])->name('event.overview');

Route::get('faq', [\App\Http\Controllers\QuestionController::class, 'index'])->name('question.index');
