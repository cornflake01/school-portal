@extends('layouts.admin')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">UCats Announcements</h1>


        <a href="{{ route('admin.announcements.create') }}"
           class="inline-block mb-4 p-3 bg-yellow-300 text-black font-semibold rounded-lg hover:bg-yellow-400">
            + Add UCats Announcement
        </a>


        <table class="min-w-full table-auto border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2 text-left border">Announcement</th>
                    <th class="px-4 py-2 text-left border">Date</th>
                    <th class="px-4 py-2 text-left border">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($announcements as $announcement)
                    <tr>
                        <td class="px-4 py-2 border">{{ $announcement->announcement ?? 'No Title' }}</td>
                        <td class="px-4 py-2 border">{{ $announcement->date ?? 'No Date' }}</td>
                        <td class="px-4 py-2 border">
                            <!-- edit/delete -->
                            <a href="{{ route('admin.announcements.edit', $announcement->id) }}" class="text-blue-500 hover:underline">Edit</a>
                            |
                            <form action="{{ route('admin.announcements.destroy', $announcement->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline"
                                        onclick="return confirm('Are you sure you want to delete this announcement?');">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="px-4 py-2 border text-center text-gray-500">
                            No announcements found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
