@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-6 bg-white shadow rounded">
    <h2 class="text-2xl font-bold mb-4">Add Student</h2>

    <form method="POST" action="{{ route('admin.students.store') }}">
        @csrf

        <div class="mb-4">
            <label class="block font-bold">Name:</label>
            <input type="text" name="name" class="w-full border p-2 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block font-bold">Student ID:</label>
            <input type="text" name="student_id" class="w-full border p-2 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block font-bold">Year Level:</label>
            <input type="text" name="year_level" class="w-full border p-2 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block font-bold">Section:</label>
            <input type="text" name="section" class="w-full border p-2 rounded" required>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add Student</button>
    </form>
</div>
@endsection
