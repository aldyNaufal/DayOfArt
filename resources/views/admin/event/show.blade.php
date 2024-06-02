@extends('layouts.admin')
@section('content')
<div class="container mx-auto w-11/12 mt-5">
    <h2 class="text-center text-blue-500">Event Details</h2>
    <hr class="my-4">
    <table class="w-full border-collapse mt-5">
        <tr class="border border-gray-300">
            <th class="p-3 border border-gray-300 bg-gray-200 text-center">Name</th>
            <td class="p-3 border border-gray-300 text-center">{{ $event->name }}</td>
        </tr>
        <tr class="border border-gray-300">
            <th class="p-3 border border-gray-300 bg-gray-200 text-center">Category</th>
            <td class="p-3 border border-gray-300 text-center">{{ $event->category }}</td>
        </tr>
        <tr class="border border-gray-300">
            <th class="p-3 border border-gray-300 bg-gray-200 text-center">City</th>
            <td class="p-3 border border-gray-300 text-center">{{ $event->city }}</td>
        </tr>
        <tr class="border border-gray-300">
            <th class="p-3 border border-gray-300 bg-gray-200 text-center">Start Date</th>
            <td class="p-3 border border-gray-300 text-center">{{ $event->startReg }}</td>
        </tr>
        <tr class="border border-gray-300">
            <th class="p-3 border border-gray-300 bg-gray-200 text-center">Date</th>
            <td class="p-3 border border-gray-300 text-center">{{ $event->date }}</td>
        </tr>
        <tr class="border border-gray-300">
            <th class="p-3 border border-gray-300 bg-gray-200 text-center">Time</th>
            <td class="p-3 border border-gray-300 text-center">{{ $event->time }}</td>
        </tr>
        <tr class="border border-gray-300">
            <th class="p-3 border border-gray-300 bg-gray-200 text-center">Images</th>
            <td class="p-3 border border-gray-300 text-center">
                <img src="{{ asset($event->image) }}" alt="" class="w-32 h-32 object-cover">
            </td>
        </tr>
    </table>
    <a href="{{ route('admin.event.index') }}" class="block w-48 mt-4 p-2 bg-blue-500 text-white text-center rounded">Back to Event List</a>
</div>
@endsection