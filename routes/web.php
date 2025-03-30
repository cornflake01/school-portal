<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AnnouncementController;
use App\Http\Controllers\Admin\EventController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return redirect()->route('admin.dashboard');
});

Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Admin routes 
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    
    // Admin dashboard
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');

    // Students
    Route::resource('students', StudentController::class);

    // Announcements 
    Route::resource('announcements', AnnouncementController::class);

    
    Route::resource('events', EventController::class); 
    

});

// Logout
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');

require __DIR__.'/auth.php';