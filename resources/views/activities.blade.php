@extends('layouts.app')
@section('content')

<body>
    <main class="p-8">
        <section class="text-center mb-12">
            <h1 class="text-3xl font-bold text-pink-500 mb-4">Activities</h1>
        </section>
        <div class="flex justify-center items-center space-x-4 mb-8">
            <div class="relative" x-data="{ open: false }">
                
                <div class="form-group mb-4">
                    <label for="category" class="block">Activities</label>
                    <select name="category" id="category" class="bg-white border border-gray-300 rounded-md py-2 px-4 shadow-sm flex items-center space-x-2" >
                        <option value="1">Chunky Bag</option>
                        <option value="2">Pottery</option>
                        <option value="3">Cooking Class</option>
                        <option value="4">Flower Bucket</option>
                    </select>
                </div>
            </div>
            <div class="relative" x-data="{ open: false }">
                
                <div class="form-group mb-4">
                    <label for="category" class="block">Location</label>
                    <select name="category" id="category" class="bg-white border border-gray-300 rounded-md py-2 px-4 shadow-sm flex items-center space-x-2" >
                        <option value="1">Jakarta</option>
                        <option value="2">Malang</option>
                        <option value="3">Kalimantan</option>
                    </select>
                </div>
            </div>
        </div>
        <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <div class="bg-gray-200 h-48 rounded-lg text-black flex items-center justify-center">
                <p>Workshop</p>
            </div>
        </section>
    </main>
</body>

@endsection