<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::fallback(function () {
   return view('notFound');
});

Route::get('index', function () {
    return view('index');
})->name('index');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('classes', function () {
    return view('classes');
})->name('classes');

Route::get('contact', function () {
    return view('contactUs');
})->name('contact');

Route::get('testimonial', function () {
    return view('testimonial');
})->name('testimonial');

Route::get('facility', function () {
    return view('facility');
})->name('facility');

Route::get('team', function () {
    return view('team');
})->name('team');

Route::get('call-to-action', function () {
    return view('callToAction');
})->name('callToAction');

Route::get('appointment', function () {
    return view('appointment');
})->name('appointment');
