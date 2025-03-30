@extends('layouts.admin')

@section('content')
<div class="flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-5xl mx-auto">
        <h2 class="text-2xl font-bold mb-6 text-center">Edit Announcement</h2>

        <form action="{{ route('admin.announcements.update', $announcement->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-2 gap-4">
                <div class="col-span-2">
                    <label class="block font-poppins text-gray-700">Announcement</label>
                    <textarea name="announcement" class="w-full p-2 border border-gray-300 rounded-lg" rows="4">{{ $announcement->announcement }}</textarea>
                </div>

                <div>
                    <label class="block font-poppins text-gray-700">Date</label>
                    <input type="date" name="date" value="{{ $announcement->date }}" class="w-full p-2 border border-gray-300 rounded-lg">
                </div>
            </div>

            <div class="flex justify-center mt-6">
                <button type="submit" class="bg-sky-900 text-white hover:bg-orange-700 px-6 py-2 rounded">Update Announcement</button>
            </div>
        </form>
    </div>
</div>
@endsection
