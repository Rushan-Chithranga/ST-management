<?php

use App\Http\Controllers\StudentController;
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

});
