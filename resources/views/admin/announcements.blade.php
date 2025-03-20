@extends('layouts.admin')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">UCats School Announcements</h1>

        <!-- add announcem -->
        <a href="{{ route('admin.announcements.create') }}" class="inline-block mb-4 p-3 bg-yellow-300 text-white rounded-lg hover:bg-black-600">
            + Add Announcement
        </a>

        <!-- this is the table -->
        <table class="min-w-full table-auto border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2 text-left border">Announcement</th>
                    <th class="px-4 py-2 text-left border">Date</th>
                    <th class="px-4 py-2 text-left border">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($announcements as $announcement)
                    <tr>
                        <td class="px-4 py-2 border">{{ $announcement->announcement }}</td>
                        <td class="px-4 py-2 border">{{ $announcement->date }}</td>
                        <td class="px-4 py-2 border">
                            <!-- edit and delete hwere -->
                            <a href="{{ route('admin.announcements.edit', $announcement->id) }}" class="text-blue-500 hover:underline">Edit</a>
                            |
                            <form action="{{ route('admin.announcements.destroy', $announcement->id) }}" method="POST" class="inline">
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
