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

Route::get('impressum', function () {
    return view('impressum');
});

Route::get('agb', function () {
    return view('agb');
});

Route::get('blank', function () {
    return view('blank');
});

Route::post('kontakt', [\App\Http\Controllers\ContactController::class, 'store'])->name('contact.send');
Route::get('kontakt', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact.show');

Route::get('erste-hilfe-kurs-fuehrerschein', [\App\Http\Controllers\FirstAidController::class, 'driversLicense'])->name('fa.driversLicense');
