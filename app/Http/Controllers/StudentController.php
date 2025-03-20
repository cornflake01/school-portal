<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('admin.students.index', compact('students'));
    }

    public function create()
    {
        return view('admin.students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'student_id' => 'required|string|unique:students,student_id',
            'year_level' => 'required|string',
            'section' => 'required|string',
        ]);

        Student::create($request->all());

        return redirect()->route('admin.students.index')->with('success', 'Student added successfully.');
    }

    public function edit(Student $student)
    {
        return view('admin.students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'student_id' => 'required|string|unique:students,student_id,' . $student->id,
            'year_level' => 'required|string',
            'section' => 'required|string',
        ]);

        $student->update($request->all());

        return redirect()->route('admin.students.index')->with('success', 'Student updated successfully.');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('admin.students.index')->with('success', 'Student deleted successfully.');
    }
}
