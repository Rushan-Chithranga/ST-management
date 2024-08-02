<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/student', [StudentController::class, 'index'])->name('student');
    Route::get('/student-create', [StudentController::class, 'create'])->name('student-create');
    Route::post('/student-create', [StudentController::class, 'store'])->name('student-create');
    Route::get('/student-show//{id}', [StudentController::class, 'show'])->name('student-show');
    Route::get('/student-edit/{id}', [StudentController::class, 'edit'])->name('student-edit');
    Route::post('/student-edit/{id}', [StudentController::class, 'update'])->name('student-update');
    Route::delete('/student-delete/{id}', [StudentController::class, 'destroy'])->name('student-delete');

    Route::get('/teacher', [TeacherController::class, 'index'])->name('teacher');
    Route::get('/teacher-create', [TeacherController::class, 'create'])->name('teacher-create');
    Route::post('/teacher-create', [TeacherController::class, 'store'])->name('teacher-create');
    Route::get('/teacher-show//{id}', [TeacherController::class, 'show'])->name('teacher-show');
    Route::get('/teacher-edit/{id}', [TeacherController::class, 'edit'])->name('teacher-edit');
    Route::post('/teacher-edit/{id}', [TeacherController::class, 'update'])->name('teacher-update');
    Route::delete('/teacher-delete/{id}', [TeacherController::class, 'destroy'])->name('teacher-delete');

    Route::get('/course', [CourseController::class, 'index'])->name('course');
    Route::get('/course-create', [CourseController::class, 'create'])->name('course-create');
    Route::post('/course-create', [CourseController::class, 'store'])->name('course-create');
    Route::get('/course-show//{id}', [CourseController::class, 'show'])->name('course-show');
    Route::get('/course-edit/{id}', [CourseController::class, 'edit'])->name('course-edit');
    Route::post('/course-edit/{id}', [CourseController::class, 'update'])->name('course-update');
    Route::delete('/course-delete/{id}', [CourseController::class, 'destroy'])->name('course-delete');
});
