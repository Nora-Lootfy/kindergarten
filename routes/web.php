<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TeacherController;


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

Route::fallback([MainController::class, 'showNotFound']);
Route::get('index', [MainController::class, 'index'])->name('index');
Route::get('about', [MainController::class, 'about'])->name('about');
Route::get('classes', [MainController::class, 'classes'])->name('classes');
Route::get('contact', [MainController::class, 'contactUs'])->name('contact');
Route::get('testimonial', [MainController::class, 'testimonial'])->name('testimonial');
Route::get('facility', [MainController::class, 'facility'])->name('facility');
Route::get('team', [MainController::class, 'team'])->name('team');
Route::get('call-to-action', [MainController::class, 'callToAction'])->name('callToAction');
Route::get('appointment', [MainController::class, 'appointment'])->name('appointment');

Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('testimonial-index', [TestimonialController::class, 'index'])->name('testimonials');
Route::get('create-testimonial', [TestimonialController::class, 'create'])->name('createTestimonial');
Route::post('store-testimonial', [TestimonialController::class, 'store'])->name('storeTestimonial');
Route::get('show-testimonial/{id}', [TestimonialController::class, 'show'])->name('showTestimonial');
Route::get('edit-testimonial/{id}', [TestimonialController::class, 'edit'])->name('editTestimonial');
Route::put('update-testimonial/{id}', [TestimonialController::class, 'update'])->name('updateTestimonial');
Route::get('destroy-testimonial/{id}', [TestimonialController::class, 'destroy'])->name('destroyTestimonial');

Route::get('teacher-index', [TeacherController::class, 'index'])->name('teachers');
Route::get('create-teacher', [TeacherController::class, 'create'])->name('createTeacher');
Route::post('store-teacher', [TeacherController::class, 'store'])->name('storeTeacher');
Route::get('show-teacher/{id}', [TeacherController::class, 'show'])->name('showTeacher');

