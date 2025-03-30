@extends('layouts.admin')

@section('content')
<div class="flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg p-6 w-full max-w-5xl">
        <h1 class="text-2xl font-bold mb-6 text-center">KOI Student Information</h1>

        <!-- Add Student Button -->
        <a href="{{ route('admin.students.create') }}" 
           class="block mb-4 p-3 bg-sky-900 text-white rounded-lg hover:bg-orange-700 text-center w-48 mx-auto">
            + Add Student to KOI
        </a>

        <!-- Students Table -->
        <table class="w-full border-collapse border border-teal-900 shadow-md rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-teal-800 text-white">
                    <th class="px-4 py-2 text-left border">Name</th>
                    <th class="px-4 py-2 text-left border">Student ID</th>
                    <th class="px-4 py-2 text-left border">Year Level</th>
                    <th class="px-4 py-2 text-left border">Section</th>
                    <th class="px-4 py-2 text-left border">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($students as $student)
                    <tr class="bg-white hover:bg-gray-100">
                        <td class="px-4 py-2 border">{{ $student->name }}</td>
                        <td class="px-4 py-2 border">{{ $student->student_id }}</td>
                        <td class="px-4 py-2 border">{{ $student->year_level }}</td>
                        <td class="px-4 py-2 border">{{ $student->section }}</td>
                        <td class="px-4 py-2 border flex gap-2">
                            <a href="{{ route('admin.students.edit', $student->id) }}" 
                               class="bg-amber-300 text-black px-3 py-1 rounded">
                                Edit
                            </a>
                            <form action="{{ route('admin.students.destroy', $student->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-rose-800 text-white px-3 py-1 rounded"
                                        onclick="return confirm('Are you sure you want to delete this student?');">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-4 text-gray-500">
                            No students found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
