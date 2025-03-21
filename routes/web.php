<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AnnouncementController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');


Route::get('/admin/students', [StudentController::class, 'index'])->name('admin.students.index');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('students', StudentController::class);
});


Route::get('/admin/announcements', function () {
    return view('admin.announcements');
})->name('admin.announcements.index');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('announcements', AnnouncementController::class);
});


Route::get('/admin/calendar', function () {
    return view('admin.calendar');
})->name('admin.calendar.index');



Route::get('/logout', function () {
    return redirect('/');
})->name('logout');






