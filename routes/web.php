<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('admin/students', StudentController::class);

// Admin Dashboard
Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

// Student Information
Route::get('/admin/students', function () {
    return view('admin.students');
})->name('admin.students.index');

// School Announcements
Route::get('/admin/announcements', function () {
    return view('admin.announcements');
})->name('admin.announcements.index');

// School Calendar
Route::get('/admin/calendar', function () {
    return view('admin.calendar');
})->name('admin.calendar.index');

// Login Page Route
Route::get('/admin/login', function () {
    return view('auth.login');
})->name('admin.login');

// Logout Route
Route::post('/logout', function (Request $request) {
    Auth::logout();
    return redirect()->route('admin.login');
})->name('logout');
