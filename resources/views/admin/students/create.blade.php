@extends('layouts.admin')

@section('content')
<div class="flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-5xl mx-auto">
        <h2 class="text-2xl font-bold mb-6 text-center">Add Student to KOI</h2>

        <form action="{{ route('admin.students.store') }}" method="POST">
            @csrf

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="name" class="block font-poppins text-gray-700">Name</label>
                    <input type="text" id="name" name="name" class="w-full p-2 border rounded-lg" required>
                </div>

                <div>
                    <label for="student_id" class="block font-poppins text-gray-700">Student ID</label>
                    <input type="text" id="student_id" name="student_id" class="w-full p-2 border rounded-lg" required>
                </div>

                <div>
                    <label for="year_level" class="block font-poppins text-gray-700">Year Level</label>
                    <input type="text" id="year_level" name="year_level" class="w-full p-2 border rounded-lg" required>
                </div>

                <div>
                    <label for="section" class="block font-poppins text-gray-700">Section</label>
                    <input type="text" id="section" name="section" class="w-full p-2 border rounded-lg" required>
                </div>
            </div>

            <div class="flex justify-center mt-6">
                <button type="submit" class="bg-sky-900 text-white hover:bg-orange-700 px-6 py-2 rounded">Confirm Add Student</button>
            </div>
        </form>
    </div>
</div>
@endsection
