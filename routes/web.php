<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('students', StudentController::class);
Route::get('students', [StudentController::class, 'index'])->name('students.index');
Route::get('students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('students', [StudentController::class, 'store'])->name('students.store');
Route::get('students/{student}/edit', [StudentController::class, 'edit'])->name('edit_student');
Route::put('students/{student}', [StudentController::class, 'update'])->name('students.update');
Route::delete('students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');