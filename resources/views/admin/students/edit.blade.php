@extends('layouts.admin')

@section('content')
<div class="max-w-4xl mx-auto mt-10 bg-white p-8 rounded-lg shadow">
    <h2 class="text-2xl font-bold mb-6">Edit Student Information</h2>

    <form action="{{ route('admin.students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700">Name</label>
            <input type="text" name="name" value="{{ $student->name }}" class="w-full p-2 border rounded">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Student ID</label>
            <input type="text" name="student_id" value="{{ $student->student_id }}" class="w-full p-2 border rounded">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Year Level</label>
            <select name="year_level" class="w-full p-2 border rounded">
                <option value="1st Year" {{ $student->year_level == '1st Year' ? 'selected' : '' }}>1st Year</option>
                <option value="2nd Year" {{ $student->year_level == '2nd Year' ? 'selected' : '' }}>2nd Year</option>
                <option value="3rd Year" {{ $student->year_level == '3rd Year' ? 'selected' : '' }}>3rd Year</option>
                <option value="4th Year" {{ $student->year_level == '4th Year' ? 'selected' : '' }}>4th Year</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Section</label>
            <input type="text" name="section" value="{{ $student->section }}" class="w-full p-2 border rounded">
        </div>

        <div class="flex space-x-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update</button>
            <a href="{{ route('admin.students.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Cancel</a>
        </div>
    </form>
</div>
@endsection
