<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimonialController;

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

Route::get('test', function () {
    $records = [
        ['published'=>1, 'test'=>'test'],
        ['published'=>0, 'test'=>'test2']
    ];
    return view('admin.test', compact('records'));
});



Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Route::get('t', function () {
//    return view('admin.addTestimonial');
//});

Route::get('testimonial-index', [TestimonialController::class, 'index'])->name('Testimonials');
Route::get('create-testimonial', [TestimonialController::class, 'create'])->name('createTestimonial');
Route::post('store-testimonial', [TestimonialController::class, 'store'])->name('storeTestimonial');
Route::get('show-testimonial/{id}', [TestimonialController::class, 'show'])->name('showTestimonial');
Route::get('edit-testimonial/{id}', [TestimonialController::class, 'edit'])->name('editTestimonial');
Route::put('update-testimonial/{id}', [TestimonialController::class, 'update'])->name('updateTestimonial');
Route::get('destroy-testimonial/{id}', [TestimonialController::class, 'destroy'])->name('destroyTestimonial');
