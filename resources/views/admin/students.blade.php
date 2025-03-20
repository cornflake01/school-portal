@extends('layouts.admin')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Student Information</h1>

        <!-- Button to Add Student -->
        <a href="{{ route('admin.students.create') }}" class="inline-block mb-4 p-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
            + Add Student
        </a>

        <!-- Student Table -->
        <table class="min-w-full table-auto border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2 text-left border">Name</th>
                    <th class="px-4 py-2 text-left border">Student ID</th>
                    <th class="px-4 py-2 text-left border">Year Level</th>
                    <th class="px-4 py-2 text-left border">Section</th>
                    <th class="px-4 py-2 text-left border">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td class="px-4 py-2 border">{{ $student->name }}</td>
                        <td class="px-4 py-2 border">{{ $student->student_id }}</td>
                        <td class="px-4 py-2 border">{{ $student->year_level }}</td>
                        <td class="px-4 py-2 border">{{ $student->section }}</td>
                        <td class="px-4 py-2 border">
                            <!-- Edit and Delete Buttons -->
                            <a href="{{ route('admin.students.edit', $student->id) }}" class="text-blue-500 hover:underline">Edit</a>
                            |
                            <form action="{{ route('admin.students.destroy', $student->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
