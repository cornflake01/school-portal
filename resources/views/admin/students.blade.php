@extends('layouts.admin')

@section('content')
    <div class="container mx-auto p-6 bg-white shadow-md rounded-lg">
        <h1 class="text-3xl font-bold mb-6">KOI Student Information</h1>

        <!-- Add Student -->
        <a href="{{ route('admin.students.create') }}" class="bg-sky-900 text-white hover:bg-orange-700 px-4 py-2 rounded mb-4 inline-block">
            + Add Student to KOI
        </a>

        <!-- Students Table -->
        <table class="min-w-full table-auto border-collapse border border-teal-900">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2 text-left border">Name</th>
                    <th class="px-4 py-2 text-left border">Student ID</th>
                    <th class="px-4 py-2 text-left border">Year Level</th>
                    <th class="px-4 py-2 text-left border">Section</th>
                    <th class="px-4 py-2 text-left border">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($students as $student)
                    <tr>
                        <td class="px-4 py-2 border">{{ $student->name }}</td>
                        <td class="px-4 py-2 border">{{ $student->student_id }}</td>
                        <td class="px-4 py-2 border">{{ $student->year_level }}</td>
                        <td class="px-4 py-2 border">{{ $student->section }}</td>
                        <td class="px-4 py-2 border">
                            <!-- Edit and Delete -->
                            <a href="{{ route('admin.students.edit', $student->id) }}" class="bg-amber-300 text-black px-3 py-1 rounded">Edit</a>
                            |
                            <form action="{{ route('admin.students.destroy', $student->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-700">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-4 text-gray-500">No students found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
