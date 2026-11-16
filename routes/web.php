<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/layout', function () {
    return view('layout');
});

// STUDENT
Route::prefix('admin')->group(function () {

    Route::get('/student', [StudentController::class, 'index'])
        ->name('admin.student.index');

    Route::post('/student', [StudentController::class, 'store'])
        ->name('admin.student.store');

});

// ROUTES LAIN
Route::get('/admin/dashboard', [DashboardController::class, 'index']);

Route::get('/admin/about', [AboutController::class, 'index']);

Route::get('/admin/classroom', [ClassroomController::class, 'index']);

Route::get('/admin/teachers', [TeachersController::class, 'index']);

Route::get('/admin/subjects', [SubjectController::class, 'index']);