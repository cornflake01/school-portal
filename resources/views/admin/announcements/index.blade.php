@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-6 bg-white shadow rounded">
        <h2 class="text-2xl font-bold mb-6">UCats Announcements</h2>


        <a href="{{ url('admin.announcements.create') }}"
           class="bg-sky-900 text-white px-4 py-2 rounded mb-4 inline-block">
            + Create UCats Announcement
        </a>

        @if(session('success'))
        <div class="bg-green-600 text-white p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

        <table class="min-w-full table-auto border-collapse border border-gray-300">
            <thead>
                <tr class="bg-teal-800 text-white">
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
                        <td class="p-2 flex gap-2">
                            <!-- edit/delete -->
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
                        <td colspan="3" class="px-4 py-2 border text-center text-gray-500">
                            No announcements found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
