@extends('layouts.admin')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Post Announcement to UCats</h1>

        <form action="{{ route('admin.announcements.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700">Announcement</label>
                <textarea name="announcement" class="w-full p-2 border border-gray-300 rounded-lg"></textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Date</label>
                <input type="date" name="date" class="w-full p-2 border border-gray-300 rounded-lg">
            </div>

            <button type="submit" class="p-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Save</button>
        </form>
    </div>
@endsection
