@extends('layouts.admin')

@section('content')
<div class="flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-5xl mx-auto">
        <h2 class="text-2xl font-bold mb-6 text-center">Edit KOI University Event</h2>

        <form action="{{ route('admin.events.update', $event->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-2 gap-4">
                <div class="col-span-2">
                    <label class="block font-poppins text-gray-700">Event Title</label>
                    <input type="text" name="title" class="w-full p-2 border rounded-lg" value="{{ old('title', $event->title) }}" required>
                </div>

                <div class="col-span-2">
                    <label class="block font-poppins text-gray-700">Description</label>
                    <textarea name="description" class="w-full p-2 border rounded-lg" rows="4">{{ old('description', $event->description) }}</textarea>
                </div>

                <div>
                    <label class="block font-poppins text-gray-700">Date</label>
                    <input type="date" name="date" class="w-full p-2 border rounded-lg" value="{{ old('date', $event->date) }}" required>
                </div>
            </div>

            <div class="flex justify-center mt-6">
                <button type="submit" class="bg-sky-900 text-white hover:bg-orange-700 px-6 py-2 rounded">Update Event</button>
            </div>
        </form>
    </div>
</div>
@endsection
