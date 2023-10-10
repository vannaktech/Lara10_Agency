<?php

use App\Http\Controllers\FrontPageController;

use Illuminate\Support\Facades\Route;

Route::get('front',function(){
    return view('front_agency');
});

Route::get(uri: 'home', action: function () {
    return View(view: 'front_home');
});

Route::get(uri: 'about', action: function () {
    return View(view: 'front_about');
});

Route::get(uri: 'service', action: function () {
    return View(view: 'front_services');
});

Route::get( '/', [FrontPageController::class, 'index'])->name( 'front.home');
Route::get('/about', [FrontPageController::class, 'about'])->name('front.about');
Route::get('/service', [FrontPageController::class, 'services'])->name('front.services');
Route::get('/package', [FrontPageController::class, 'packages'])->name('front.packages');
Route::get('/destination', [FrontPageController::class, 'destination'])->name('front.destination');
Route::get('/booking', [FrontPageController::class, 'booking'])->name('front.booking');
Route::get('/team', [FrontPageController::class, 'team'])->name('front.team');
Route::get('/testimonials', [FrontPageController::class, 'testimonials'])->name('front.testimonials');
Route::get('/packages', [FrontPageController::class, 'packages'])->name('front.packages');
Route::get('/contact', [FrontPageController::class, 'contact'])->name('front.contact');

