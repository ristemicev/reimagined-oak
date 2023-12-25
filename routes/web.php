<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::get('/', function () {
    return view('welcome');
});

//routes for about us
Route::get('/about', function () {
    return view('pages.aboutus.theclub');
});

Route::get('/contact', function () {
    return view('pages.aboutus.contact');
});

Route::get('/members', function () {
    return view('pages.aboutus.members');
});

Route::get('/rules', function () {
    return view('pages.aboutus.rules');
});

Route::get('/school', function () {
    return view('pages.news.school');
});

Route::prefix('events')->group(function () {

    Route::get('language/{locale}', function ($locale) {
        app()->setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    });

    Route::get('/', [EventController::class,'index']);
    Route::get('/{id}', [EventController::class,'show'])->name('event.show');

});

//routes for reports
Route::get('/reports', function () {
    return view('pages.reports');
});

Route::get('/testMail',[\App\Http\Controllers\Controller::class,'testMail']);
