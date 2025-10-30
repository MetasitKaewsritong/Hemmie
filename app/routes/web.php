<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdvisorController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\DepartmentController;

Route::resource('student', StudentController::class);
Route::resource('advisor', AdvisorController::class);
Route::resource('courses', CourseController::class);
Route::resource('registration', RegistrationController::class);
Route::resource('department', DepartmentController::class);

Route::get('/', function () {
    return view('welcome');
});
