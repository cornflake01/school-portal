@extends('layouts.admin')

@section('content')
<div class="flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg p-6 w-full max-w-2xl">
        <h2 class="text-2xl font-bold mb-6 text-center">Post Announcement to KOI University Page</h2>

        <form action="{{ route('admin.announcements.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block font-poppins text-gray-700">Announcement</label>
                <textarea name="announcement" class="w-full p-2 border rounded-lg" required></textarea>
            </div>

            <div class="mb-4">
                <label class="block font-poppins text-gray-700">Date</label>
                <input type="date" name="date" class="w-full p-2 border rounded-lg" required>
            </div>

            <button type="submit" class="bg-sky-900 text-white  hover:bg-orange-700 px-4 py-2 rounded">Save Announcement</button>
        </form>
    </div>
</div>
@endsection
