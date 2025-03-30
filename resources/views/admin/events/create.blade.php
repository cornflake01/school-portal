@extends('layouts.admin')

@section('content')
<div class="flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg p-6 w-full max-w-2xl">
        <h2 class="text-2xl font-bold mb-6 text-center">Create KOI University Event</h2>

        <form action="{{ route('admin.events.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block font-poppins text-gray-700">Event Title</label>
                <input type="text" name="title" class="w-full p-2 border rounded-lg" required>
            </div>

            <div class="mb-4">
                <label class="block font-poppins text-gray-700">Description</label>
                <textarea name="description" class="w-full p-2 border rounded-lg"></textarea>
            </div>

            <div class="mb-4">
                <label class="block font-poppins text-gray-700">Date</label>
                <input type="date" name="date" class="w-full p-2 border rounded-lg" required>
            </div>

            <button type="submit" class="bg-sky-900 text-white px-4 py-2 rounded">Save Event</button>
        </form>
    </div>
</div>
@endsection
