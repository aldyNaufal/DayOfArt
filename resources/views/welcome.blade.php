@extends('layouts.app')
@section('content')
<div class="w-full ">
    <div class="bg-gray-100 flex items-center justify-start min-h-screen">
        <div class="relative w-full">
            <img src="{{ asset('assets/images/welcome-screen.png') }}" alt="Day of Art" class="w-full object-cover min-h-screen">
            <div class="absolute inset-0 flex flex-col items-center justify-center bg-black bg-opacity-50 text-white">
                <img src="{{ asset('assets/icons/logo DoA transparent 2.png') }}" alt="Logo doa" class="sm:w-[180px] xl:w-[200px] sm:ml-4 ">
                <p class="text-2xl mb-4 lg:text-3xl font-bold">"Unleashing Creativity, One Day at a Time"</p>
            </div>
        </div>
    </div>

    <div class="ml-20 justify-start items-center">
        <div class="px-20 py-20 relative overflow-hidden  sm:px-5 xl:mt-20">
            <h1 class="font-bold lg:text-4xl sm:text-2xl sm:w-[400px] text-left">Upcoming Events</h1>
            <div class="grid grid-cols-4 gap-10 sm:mt-10 m:flex sm:flex-col  sm:gap-5 lg:flex-row">
                <div class="px-5 py-2 pb-10 shadow-lg rounded-md bg-white cursor-pointer transform transition-transform duration-300 hover:scale-105">
                    <img src="" alt="" class="rounded-md w-full">
                    <div class="flex lg:flex-row justify-between mt-5 items-center sm:flex-col">
                        <h1 class="text-xl font-bold"></h1>
                        <p class="text-sm text-gray-400 lg:ml-5"></p>
                    </div>
                    <p class="text-sm text-gray-400 mt-2 mb-3"></p>
                </div>
            </div>
        </div>

        <div class="px-20 py-20 relative overflow-hidden  sm:px-5 xl:mt-20">
            <h1 class="font-bold lg:text-4xl sm:text-2xl sm:w-[400px] text-left">Event Schedule</h1>
            <div class="grid grid-cols-4 gap-10 sm:mt-10 m:flex sm:flex-col sm:gap-5 lg:flex-row">
                <div class="px-5 py-2 pb-10 shadow-lg rounded-md bg-white cursor-pointer transform transition-transform duration-300 hover:scale-105">
                    <img src="" alt="" class="rounded-md w-full">
                    <div class="flex lg:flex-row justify-between mt-5 items-center sm:flex-col">
                        <h1 class="text-xl font-bold"></h1>
                        <p class="text-sm text-gray-400 lg:ml-5"></p>
                    </div>
                    <p class="text-sm text-gray-400 mt-2 mb-3"></p>
                </div>
            </div>
        </div>

        <div class="mt-20 px-20 mb-20 relative overflow-hidden sm:px-5">
            <h1 class="font-bold lg:text-4xl sm:text-2xl text-left">Categories</h1>
            <div class="w-full grid gap-10 mt-10 sm:grid-cols-2 sm:gap-5">
                <div class="relative flex flex-col items-center justify-center p-5 rounded-lg bg-white">
                    <img src="" alt="" class="w-full h-auto rounded-lg shadow-lg cursor-pointer transform transition-transform duration-300 hover:scale-110">
                    <h1 class="text-2xl font-bold mt-5 text-white absolute"></h1>
                </div>
            </div>
        </div>
    </div>
   

</div>
@endsection
