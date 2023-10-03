<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('students', StudentController::class);
Route::get('students', [StudentController::class, 'index'])->name('students.index');
Route::get('add_student', [StudentController::class, 'form']);
Route::post('store-form', [StudentController::class, 'store'])->name('students.store');
Route::get('students/{student}/edit', [StudentController::class, 'edit'])->name('edit_student');
Route::put('students/{student}', [StudentController::class, 'update'])->name('students.update');
Route::delete('students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');

Route::resource('profiles', ProfileController::class);
Route::get('profiles', [ProfileController::class, 'index'])->name('profiles.index');
Route::get('add_profile', [ProfileController::class, 'form']);
Route::post('store-formP', [ProfileController::class, 'store'])->name('profiles.store');
Route::get('profiles/{profile}/edit', [ProfileController::class, 'edit'])->name('edit_profile');
Route::put('profiles/{profile}', [ProfileController::class, 'update'])->name('profiles.update');
Route::delete('profiles/{profile}', [ProfileController::class, 'destroy'])->name('profiles.destroy');
