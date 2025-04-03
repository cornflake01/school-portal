@extends('layouts.admin')

@section('content')
<div class="flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg p-6 w-full max-w-4xl">
        <h2 class="text-2xl font-bold mb-6 text-center">KOI University Announcements</h2>

        <a href="{{ route('admin.announcements.create') }}"
           class="block mb-4 p-3 bg-sky-900 text-white rounded-lg hover:bg-orange-700 text-center w-48 mx-auto">
            + Create Announcement
        </a>

        @if(session('success'))
        <div class="bg-green-600 text-white p-2 rounded mb-4">
            {{ session('success') }}
        </div>
        @endif

        <table class="w-full border-collapse border border-gray-300 shadow-md rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-teal-800 text-white">
                    <th class="px-4 py-2 text-left border">Announcement</th>
                    <th class="px-4 py-2 text-left border">Date</th>
                    <th class="px-4 py-2 text-left border">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($announcements as $announcement)
                    <tr class="bg-white">
                        <td class="px-4 py-2 border">{{ $announcement->announcement ?? 'No Title' }}</td>
                        <td class="px-4 py-2 border">{{ $announcement->date ?? 'No Date' }}</td>
                        <td class="p-2 flex gap-2">
                            <a href="{{ route('admin.announcements.edit', $announcement->id) }}" class="bg-amber-300 text-black px-3 py-1 rounded">Edit</a>
                            <form action="{{ route('admin.announcements.destroy', $announcement->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-rose-800 text-white px-3 py-1 rounded"
                                        onclick="return confirm('Are you sure you want to delete this announcement?');">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="px-4 py-2 border text-center text-white">
                            No announcements found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
