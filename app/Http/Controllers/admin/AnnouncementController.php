<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $announcements = Announcement::orderBy('date', 'desc')->get();
    
        // 
        if ($announcements->isEmpty()) {
            return back()->with('error', 'No announcements found.');
        }
    
        return view('admin.announcements.index', compact('announcements'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.announcements.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'announcement' => 'required|string|max:255',
            'date' => 'required|date',
        ]);
    
        try {
            $announcement = Announcement::create($validatedData);
    
            if (!$announcement) {
                return back()->with('error', 'Announcement was not saved. Please try again.');
            }
    
            return redirect()->route('admin.announcements.index')->with('success', 'Announcement added successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Error saving announcement: ' . $e->getMessage());
        }
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
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'announcement' => 'required|string|max:255',
            'date' => 'required|date',
        ]);
    
        try {
            $announcement = Announcement::findOrFail($id);
            $announcement->update($validatedData);
    
            return redirect()->route('admin.announcements.index')->with('success', 'Announcement updated successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Error updating announcement: ' . $e->getMessage());
        }
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
