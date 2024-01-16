<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ReportController;
use App\Models\Page;
use App\Repositories\EventRepository;
use App\Repositories\HomepageRepository;
use App\Repositories\PageRepository;
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
})->name('language');

Route::get('/', function (EventRepository $eventRepository, HomepageRepository $homepageRepository) {
    $events = $eventRepository->get();
    $data = $homepageRepository->first();
    return view('welcome', ['events' => $events, 'data' => $data]);
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

Route::get('/members', function () {
    return view('pages.about.members');
});

//routes for reports
Route::get('/reports', [ReportController::class, 'index']);
Route::get('/reports/{id}', [ReportController::class, 'show'])->name('report');

Route::get('{slug}', [PageController::class, 'show'])->where('slug', '.*')->name('pages');
//routes for about us


