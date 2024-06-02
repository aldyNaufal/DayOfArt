@extends('layouts.app')
@section('content')

<body>
    <main class="p-8">
        <section class="text-center mb-12">
            <h1 class="text-3xl font-bold text-pink-500 mb-4">Activities</h1>
        </section>
        <div class="flex justify-center items-center space-x-4 mb-8">
            <div class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="bg-white border border-gray-300 rounded-md py-2 px-4 shadow-sm flex items-center space-x-2">
                    <span>All Activities</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" @click.away="open = false" class="absolute mt-2 w-48 bg-white border border-gray-300 rounded-md shadow-lg z-10">
                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">All Activities</a>
                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Chunky Bag</a>
                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Pottery</a>
                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Cooking Class</a>
                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Flower Bucket</a>
                </div>
            </div>
            <div class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="bg-white border border-gray-300 rounded-md py-2 px-4 shadow-sm flex items-center space-x-2">
                    <span>All Location</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" @click.away="open = false" class="absolute mt-2 w-48 bg-white border border-gray-300 rounded-md shadow-lg z-10">
                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">All Location</a>
                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Jakarta</a>
                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Malang</a>
                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Kalimantan</a>
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