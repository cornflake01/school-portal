@extends('layouts.admin')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Edit Announcement</h1>

        <form action="{{ route('admin.announcements.update', $announcement->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700">Announcement</label>
                <textarea name="announcement" class="w-full p-2 border border-gray-300 rounded-lg">{{ $announcement->announcement }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Date</label>
                <input type="date" name="date" value="{{ $announcement->date }}" class="w-full p-2 border border-gray-300 rounded-lg">
            </div>

            <button type="submit" class="p-3 bg-sky-900 text-white rounded-lg hover:bg-sky-600">Update</button>
        </form>
    </div>
@endsection
