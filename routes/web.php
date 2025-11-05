<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\EnrollmentsController;
use App\Http\Controllers\InstructorsController;
use App\Http\Controllers\InstrumentsController;
use App\Http\Controllers\LessonsController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\PerformancesController;
use App\Http\Controllers\StudentsController;

Route::resource('courses',CoursesController::class);
Route::resource('enrollments',EnrollmentsController::class);
Route::resource('instructors',InstructorsController::class);
Route::resource('instruments',InstrumentsController::class);
Route::resource('lessons',LessonsController::class);
Route::resource('payments',PaymentsController::class);
Route::resource('performances',PerformancesController::class);
Route::resource('students',StudentsController::class);

Route::get('/',function () {
    return view('welcome');
});
