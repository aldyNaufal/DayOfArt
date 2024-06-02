@extends('layouts.admin')
@section('content')
<div class="container mx-auto w-11/12 mt-5">
    <h2 class="text-center text-blue-500">Add Event</h2>
    <hr class="my-4">
    <form action="{{ route('admin.event.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-4">
            <label for="name" class="block">Name Event</label>
            <input type="text" id="name" class="form-control border border-gray-300 p-2 w-full" placeholder="Add Event" name="name" required>
        </div>
        <div class="form-group mb-4">
            <label for="category" class="block">Category</label>
            <select name="category" id="category_id" class="form-control border border-gray-300 p-2 w-full" >
                <option value="1">Pottery</option>
                <option value="2">Flower</option>
                <option value="3">Cooking</option>
                <option value="4">Bag</option>
            </select>
        </div>
        <div class="form-group mb-4">
            <label for="city" class="block">City</label>
            <input type="text" id="city" class="form-control border border-gray-300 p-2 w-full" placeholder="Add City" name="city" required>
        </div>
        <div class="form-group mb-4">
            <label for="image" class="block">Images</label>
            <input type="file" id="image" name="image" class="w-full" required multiple>
            <p class="text-red-500 text-sm mt-1">Allowed extensions: .png, .jpg, .jpeg</p>
        </div>
        <div class="form-group mb-4">
            <label for="startReg" class="block">Start Registration</label>
            <input type="date" id="startReg" class="form-control border border-gray-300 p-2 w-full" name="startReg" required>
        </div>
        <div class="form-group mb-4">
            <label for="date" class="block">Date</label>
            <input type="date" id="date" class="form-control border border-gray-300 p-2 w-full" name="date" required>
        </div>
        <div class="form-group mb-4">
            <label for="time" class="block">Time</label>
            <input type="time" id="time" class="form-control border border-gray-300 p-2 w-full" name="time" required>
        </div>
        <div class="form-group mb-4">
            <label for="linkLocation" class="block">Location Map</label>
            <input type="text" id="linkLocation" class="form-control border border-gray-300 p-2 w-full" name="linkLocation" required>
        </div>
        <input type="submit" name="submit" value="Save" class="bg-blue-500 text-white p-2 rounded cursor-pointer mb-4">
    </form>
</div>
@endsection