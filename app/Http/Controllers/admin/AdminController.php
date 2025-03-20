<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function students()
    {
        return view('admin.students.index');
    }

    public function announcements()
    {
        return view('admin.announcements.index');
    }

    public function calendar()
    {
        return view('admin.calendar.index');
    }
}
