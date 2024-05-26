@extends('layouts.app')
@section('content')
<body class="bg-white text-gray-900">
   

    <main>
        <section class="bg-pink-200 py-16">
            <div class="container mx-auto text-center">
                <h1 class="text-5xl font-bold">Day of Art</h1>
                <p class="text-xl mt-4">"Unleashing Creativity, One Day at a Time"</p>
            </div>
        </section>

        <section class="py-16">
            <div class="container mx-auto">
                <h2 class="text-3xl font-bold mb-8">Upcoming Events</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white shadow-lg rounded-lg p-6">
                        <img src="path/to/chunky-bag.jpg" alt="Chunky Bag Workshop" class="w-full h-48 object-cover rounded-md mb-4">
                        <h3 class="text-2xl font-bold mb-2">Chunky Bag Workshop</h3>
                        <p class="text-gray-700 mb-4">Sunday, 5 May 2024</p>
                        <p class="text-pink-500 font-bold">M's Kitchen Magelang</p>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-6">
                        <img src="path/to/tiramisu-class.jpg" alt="Tiramisu Cooking Class" class="w-full h-48 object-cover rounded-md mb-4">
                        <h3 class="text-2xl font-bold mb-2">Tiramisu Cooking Class</h3>
                        <p class="text-gray-700 mb-4">Sunday, 5 May 2024</p>
                        <p class="text-pink-500 font-bold">Vernon Education</p>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-6">
                        <img src="path/to/flower-arrangement.jpg" alt="Flowers Arrangement" class="w-full h-48 object-cover rounded-md mb-4">
                        <h3 class="text-2xl font-bold mb-2">Flowers Arrangement</h3>
                        <p class="text-gray-700 mb-4">Sunday, 5 May 2024</p>
                        <p class="text-pink-500 font-bold">Paradia</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-gray-100 py-16">
            <div class="container mx-auto">
                <h2 class="text-3xl font-bold mb-8">Event Schedule</h2>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <p class="text-gray-700 mb-4">Discover a variety of exciting upcoming events! From inspiring seminars and beautiful art creations to relaxing handcrafted workshops, check out our full schedule on the Events Calendar page and mark your important dates.</p>
                    <a href="#" class="text-pink-500 font-bold">See All Day of Art events</a>
                </div>
            </div>
        </section>

        <section class="py-16">
            <div class="container mx-auto">
                <h2 class="text-3xl font-bold mb-8">Activities</h2>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img src="path/to/flower-bucket.jpg" alt="Flower Bucket" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-2xl font-bold mb-2">Flower Bucket</h3>
                        </div>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img src="path/to/pottery.jpg" alt="Pottery" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-2xl font-bold mb-2">Pottery</h3>
                        </div>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img src="path/to/cooking-class.jpg" alt="Cooking Class" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-2xl font-bold mb-2">Cooking Class</h3>
                        </div>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img src="path/to/chunky-bag.jpg" alt="Chunky Bag" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-2xl font-bold mb-2">Chunky Bag</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
