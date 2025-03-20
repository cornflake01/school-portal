@extends('layouts.admin')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Edit Student</h1>

        <!-- Edit Student Form -->
        <form action="{{ route('admin.students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-lg">Name</label>
                <input type="text" id="name" name="name" class="w-full p-2 border rounded-lg" value="{{ $student->name }}" required>
            </div>

            <div class="mb-4">
                <label for="student_id" class="block text-lg">Student ID</label>
                <input type="text" id="student_id" name="student_id" class="w-full p-2 border rounded-lg" value="{{ $student->student_id }}" required>
            </div>

            <div class="mb-4">
                <label for="year_level" class="block text-lg">Year Level</label>
                <input type="text" id="year_level" name="year_level" class="w-full p-2 border rounded-lg" value="{{ $student->year_level }}" required>
            </div>

            <div class="mb-4">
                <label for="section" class="block text-lg">Section</label>
                <input type="text" id="section" name="section" class="w-full p-2 border rounded-lg" value="{{ $student->section }}" required>
            </div>

            <div class="mb-4">
                <button type="submit" class="w-full p-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Update Student</button>
            </div>
        </form>
    </div>
@endsection
