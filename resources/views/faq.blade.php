@extends('layouts.app')
@section('content')

<body class="bg-white text-gray-900">
    <main class="p-8">
        <section class="max-w-3xl mx-auto text-center">
            <h1 class="text-3xl font-bold mb-4">Frequently Asked Questions</h1>
            <p class="text-gray-500 mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum euismod, odio eget tincidunt molestie.</p>
            <div class="text-left" x-data="{ open: null }">
                <div class="mb-4">
                    <button @click="open = open === 1 ? null : 1" class="w-full p-4 border border-pink-500 bg-white text-left text-gray-800 font-semibold">Question 1</button>
                    <div x-show="open === 1" class="p-4 border border-t-0 border-pink-500 bg-white">
                        <p>Answer to question 1.</p>
                    </div>
                </div>
                <div class="mb-4">
                    <button @click="open = open === 2 ? null : 2" class="w-full p-4 border border-pink-500 bg-white text-left text-gray-800 font-semibold">Question 2</button>
                    <div x-show="open === 2" class="p-4 border border-t-0 border-pink-500 bg-white">
                        <p>Answer to question 2.</p>
                    </div>
                </div>
                <div class="mb-4">
                    <button @click="open = open === 3 ? null : 3" class="w-full p-4 border border-pink-500 bg-white text-left text-gray-800 font-semibold">Question 3</button>
                    <div x-show="open === 3" class="p-4 border border-t-0 border-pink-500 bg-white">
                        <p>Answer to question 3.</p>
                    </div>
                </div>
                <div class="mb-4">
                    <button @click="open = open === 4 ? null : 4" class="w-full p-4 border border-pink-500 bg-white text-left text-gray-800 font-semibold">Question 4</button>
                    <div x-show="open === 4" class="p-4 border border-t-0 border-pink-500 bg-white">
                        <p>Answer to question 4.</p>
                    </div>
                </div>
                <div class="mb-4">
                    <button @click="open = open === 5 ? null : 5" class="w-full p-4 border border-pink-500 bg-white text-left text-gray-800 font-semibold">Question 5</button>
                    <div x-show="open === 5" class="p-4 border border-t-0 border-pink-500 bg-white">
                        <p>Answer to question 5.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
@endsection