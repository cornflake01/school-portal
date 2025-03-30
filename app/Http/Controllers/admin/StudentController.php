<?php

namespace App\Http\Controllers\Admin;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    // Display the list of students
    public function index()
    {
        // Fetch all students from the database
        $students = Student::all();

        // Pass the students data to the view
        return view('admin.students.index', compact('students'));
    }


    // Show the form to create a new student
    public function create()
    {
        return view('admin.students.create');
    }

    // Store the newly created student
    public function store(Request $request)
    { 
        $request->validate([
            'name' => 'required|string|max:255',
            'student_id' => 'required|unique:students,student_id',
            'year_level' => 'required|string|max:255',
            'section' => 'required|string|max:255',
        ]);

        Student::create([
            'name' => $request->name,
            'student_id' => $request->student_id,
            'year_level' => $request->year_level,
            'section' => $request->section,
        ]);

        return redirect()->route('admin.students.index')->with('success', 'Student added successfully.');
    }

    // Show the form to edit a student
    public function edit(Student $student)
    {
        return view('admin.students.edit', compact('student'));
    }

    // Update the student's information
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'student_id' => 'required|unique:students,student_id,' . $student->id,
            'year_level' => 'required|string|max:255',
            'section' => 'required|string|max:255',
        ]);

        $student->update([
            'name' => $request->name,
            'student_id' => $request->student_id,
            'year_level' => $request->year_level,
            'section' => $request->section,
        ]);

        return redirect()->route('admin.students.index')->with('success', 'Student updated successfully.');
    }

    // Delete a student
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('admin.students.index')->with('success', 'Student deleted successfully.');
    }
}
