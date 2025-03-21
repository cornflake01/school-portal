@extends('layouts.admin')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Add Student to UCats</h1>

        <!-- form for studentss -->
        <form action="{{ route('admin.students.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-lg">Name</label>
                <input type="text" id="name" name="name" class="w-full p-2 border rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="student_id" class="block text-lg">Student ID</label>
                <input type="text" id="student_id" name="student_id" class="w-full p-2 border rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="year_level" class="block text-lg">Year Level</label>
                <input type="text" id="year_level" name="year_level" class="w-full p-2 border rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="section" class="block text-lg">Section</label>
                <input type="text" id="section" name="section" class="w-full p-2 border rounded-lg" required>
            </div>

            <div class="mb-4">
                <button type="submit" class="w-full p-3 bg-sky-900 text-white rounded-lg hover:bg-sky-600">Confirm Add Student</button>
            </div>
        </form>
    </div>
@endsection
