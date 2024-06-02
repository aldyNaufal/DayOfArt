@extends('layouts.app')
@section('content')

<body class="w-full">
    <div class="bg-gray-100 flex items-center justify-center min-h-screen p-4">
        <div class="max-w-3xl w-full bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-pink-500 text-pink-100 text-center py-4">
                <h2 class="text-xl font-bold">E-Ticket</h2>
            </div>
            <div class="flex p-6">
                <div class="w-1/2 pr-4">
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold">Event Title :</h3>
                        <p class="text-xl">Tiramisu Cooking Class</p>
                    </div>
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold">Event Date and Time :</h3>
                        <p class="text-xl">05 May 2024, 19:00</p>
                    </div>
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold">Price :</h3>
                        <p class="text-xl">Rp 90.000,00</p>
                    </div>
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold">Location :</h3>
                        <p class="text-xl">Vernon Education</p>
                    </div>
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold">Id Ticket :</h3>
                        <p class="text-xl">22354113</p>
                    </div>
                </div>
                <div class="w-1/2 flex flex-col items-end justify-end border-l pl-44 mr-3xl">
                    <div class="w-full flex justify-end mb-4 mr-3xl">
                        <img src="{{ asset('assets/images/qrcode.png') }}" alt="QR Code" class="w-20 h-20 transition-transform transform hover:scale-110">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
