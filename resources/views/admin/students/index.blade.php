@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-6 bg-white shadow rounded">
    <h2 class="text-2xl font-bold mb-6">UCats Student Information</h2>

    <!-- add student button -->
    <a href="{{ route('admin.students.create') }}" class="bg-sky-900 text-white px-4 py-2 rounded mb-4 inline-block">+ Add Student</a>


    @if(session('success'))
        <div class="bg-green-600 text-white p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <!-- table -->
    <table class="w-full border-collapse border border-gray-300 rounded mt-4">
        <thead>
            <tr class="bg-teal-800 text-white">
                <th class="border border-gray-300 p-2">Name</th>
                <th class="border border-gray-300 p-2">Student ID</th>
                <th class="border border-gray-300 p-2">Year Level</th>
                <th class="border border-gray-300 p-2">Section</th>
                <th class="border border-gray-300 p-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr class="border border-gray-300">
                    <td class="px-4 p-2 border">{{ $student->name }}</td>
                    <td class="px-4 p-2 border">{{ $student->student_id }}</td>
                    <td class="px-4 p-2 border">{{ $student->year_level }}</td>
                    <td class="px-4 p-2 border">{{ $student->section }}</td>
                    <td class="p-2 flex gap-2">
                        <a href="{{ route('admin.students.edit', $student) }}" class="bg-amber-300 text-black px-3 py-1 rounded">Edit</a>
                        <form action="{{ route('admin.students.destroy', $student) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-rose-800 text-white px-3 py-1 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
