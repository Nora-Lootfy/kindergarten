<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassesController;

Route::group(['prefix' => 'admin','middleware' => ['verified']], function () {
    Route::group(
        ['prefix' => 'testimonials',], function () {
        Route::get('index', [TestimonialController::class, 'index'])->name('testimonials');
        Route::get('create', [TestimonialController::class, 'create'])->name('createTestimonial');
        Route::post('store', [TestimonialController::class, 'store'])->name('storeTestimonial');
        Route::get('show/{id}', [TestimonialController::class, 'show'])->name('showTestimonial');
        Route::get('edit/{id}', [TestimonialController::class, 'edit'])->name('editTestimonial');
        Route::put('update/{id}', [TestimonialController::class, 'update'])->name('updateTestimonial');
        Route::get('destroy/{id}', [TestimonialController::class, 'destroy'])->name('destroyTestimonial');
    });

    Route::group(
        ['prefix' => 'teachers'], function () {
        Route::get('index', [TeacherController::class, 'index'])->name('teachers');
        Route::get('create', [TeacherController::class, 'create'])->name('createTeacher');
        Route::post('store', [TeacherController::class, 'store'])->name('storeTeacher');
        Route::get('show/{id}', [TeacherController::class, 'show'])->name('showTeacher');
        Route::get('edit/{id}', [TeacherController::class, 'edit'])->name('editTeacher');
        Route::put('update/{id}', [TeacherController::class, 'update'])->name('updateTeacher');
        Route::get('destroy/{id}', [TeacherController::class, 'destroy'])->name('destroyTeacher');
    });

    Route::group(
        ['prefix' => 'classes'], function () {
        Route::get('index', [ClassesController::class, 'index'])->name('class');
        Route::get('create', [ClassesController::class, 'create'])->name('createClass');
        Route::post('store', [ClassesController::class, 'store'])->name('storeClass');
        Route::get('show/{id}', [ClassesController::class, 'show'])->name('showClass');
        Route::get('edit/{id}', [ClassesController::class, 'edit'])->name('editClass');
        Route::put('update/{id}', [ClassesController::class, 'update'])->name('updateClass');
        Route::get('destroy/{id}', [ClassesController::class, 'destroy'])->name('destroyClass');
    });
});
