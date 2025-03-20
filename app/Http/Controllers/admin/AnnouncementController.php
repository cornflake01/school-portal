<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Announcement; // ✅ Import the Announcement model

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $announcements = Announcement::all(); // ✅ Fetch all announcements
        return view('admin.announcements.index', compact('announcements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.announcements.create'); // ✅ Ensure this view exists
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'announcement' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        Announcement::create([
            'announcement' => $request->announcement,
            'date' => $request->date,
        ]);

        return redirect()->route('admin.announcements.index')->with('success', 'Announcement added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announcement $announcement)
    {
        return view('admin.announcements.edit', compact('announcement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Announcement $announcement)
    {
        $request->validate([
            'announcement' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        $announcement->update([
            'announcement' => $request->announcement,
            'date' => $request->date,
        ]);

        return redirect()->route('admin.announcements.index')->with('success', 'Announcement updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announcement $announcement)
    {
        $announcement->delete();
        return redirect()->route('admin.announcements.index')->with('success', 'Announcement deleted successfully.');
    }
}
