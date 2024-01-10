<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactController;


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
Route::post('send-email', [ContactController::class, 'send'])->name('sendEmail');


Auth::routes(['verify' => true]);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

//Route::get('test', [MainController::class, 'test']);
//Route::group(['prefix' => 'admin', 'middleware' => ['verified']], function () {
//    Route::group(
//        ['prefix' => 'testimonials',], function () {
//        Route::get('index', [TestimonialController::class, 'index'])->name('testimonials');
//        Route::get('create', [TestimonialController::class, 'create'])->name('createTestimonial');
//        Route::post('store', [TestimonialController::class, 'store'])->name('storeTestimonial');
//        Route::get('show/{id}', [TestimonialController::class, 'show'])->name('showTestimonial');
//        Route::get('edit/{id}', [TestimonialController::class, 'edit'])->name('editTestimonial');
//        Route::put('update/{id}', [TestimonialController::class, 'update'])->name('updateTestimonial');
//        Route::get('destroy/{id}', [TestimonialController::class, 'destroy'])->name('destroyTestimonial');
//    });
//
//    Route::group(
//        ['prefix' => 'teachers'], function () {
//        Route::get('index', [TeacherController::class, 'index'])->name('teachers');
//        Route::get('create', [TeacherController::class, 'create'])->name('createTeacher');
//        Route::post('store', [TeacherController::class, 'store'])->name('storeTeacher');
//        Route::get('show/{id}', [TeacherController::class, 'show'])->name('showTeacher');
//        Route::get('edit/{id}', [TeacherController::class, 'edit'])->name('editTeacher');
//        Route::put('update/{id}', [TeacherController::class, 'update'])->name('updateTeacher');
//        Route::get('destroy/{id}', [TeacherController::class, 'destroy'])->name('destroyTeacher');
//    });
//
//    Route::group(
//        ['prefix' => 'classes'], function () {
//        Route::get('index', [ClassesController::class, 'index'])->name('class');
//        Route::get('create', [ClassesController::class, 'create'])->name('createClass');
//        Route::post('store', [ClassesController::class, 'store'])->name('storeClass');
//        Route::get('show/{id}', [ClassesController::class, 'show'])->name('showClass');
//        Route::get('edit/{id}', [ClassesController::class, 'edit'])->name('editClass');
//        Route::put('update/{id}', [ClassesController::class, 'update'])->name('updateClass');
//        Route::get('destroy/{id}', [ClassesController::class, 'destroy'])->name('destroyClass');
//    });
//});




