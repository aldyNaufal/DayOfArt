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

    <div class="justify-start items-center">
        <div class="px-10 py-20 relative overflow-hidden  sm:px-5 xl:mt-5">
            <div class="grid grid-cols-4 gap-10 sm:mt-10 m:flex sm:flex-col sm:gap-5 lg:flex-row ml-20">
                @foreach($events->take(4) as $e)
                <a href="{{ route('details', ['event'=>$e])}}">
                    <div class="px-5 py-2 pb-10 shadow-lg rounded-md bg-white h-96 cursor-pointer transform transition-transform duration-300 hover:scale-105">
                        <img src="{{ asset( $e->image ) }}" alt="{{ $e->name }}" class="rounded-md">
                        <div class="flex flex-row justify-between mt-5 items-center">
                            <h1 class="text-xl font-bold">{{$e->name}}</h1>
                            <p class="text-sm text-gray-400">{{ $e->date }}</p>
                        </div>
                        <p class="text-sm text-gray-400 mt-2 mb-3">{{ $e->city }}</p>
                    </div>
                </a>
                @endforeach     
            </div>
        </div>


        <div class="w-full p-5 overflow-hidden sm:px-5 xl:mt-20 bg-gray-200">
        <h2 class="text-2xl font-bold mb-5 lg:text-4xl ml-20">Event Schedule</h2>
            <div class="mx-auto my-auto bg-white shadow-md rounded-md w-4/5 flex flex-row">
                <div class="w-1/3">
                    <img src="{{ asset('assets/images/pottery.png') }}" class="w-full"></img>
                </div>
                <div class="w-2/3 ml-5 mt-1 leading-5 flex flex-col justify-between xl:mt-3 xl:ml-10 xl:leading-10">
                    <div>
                        <span class="text-lg font-semibold text-left xl:text-xl">See All Day of Art events</span>
                        <p class="md:w-4/5 ml-1 text-[9px] md:text-md lg:text-base xl:text-lg text-left xl:ml-3">
                            Discover a variety of exciting upcoming events! From inspiring seminars and beautiful art creations to relaxing handcrafted workshops, check out our full schedule on the Events Calendar page and mark your important dates.
                        </p>
                    </div>
                    <div class="flex justify-end items-end text-white text-xs mb-3 mr-3 lg:text-lg ">
                        <button class="bg-[#e145a6] hover:bg-[#cb3e95] rounded-xl px-5 py-1">See Calendar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full p-5 overflow-hidden sm:px-5 xl:mt-20 bg-white">
        <h2 class="text-2xl font-bold mb-5 lg:text-4xl">Activities</h2>
        <div class="w-full px-5 py-10 bg-white shadow-md rounded-md mx-auto my-auto">
                
                <div class="grid grid-cols-2 gap-4 lg:grid-cols-4">
                    <div class="relative bg-white shadow-md rounded-md overflow-hidden cursor-pointer transform transition-transform duration-300 hover:scale-105">
                        <img src="{{ asset('assets/images/flower-bucket.png') }}" alt="Flower Bucket" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                            <span class="text-white text-xl font-semibold">Flower Bucket</span>
                        </div>
                    </div>
                    <div class="relative bg-white shadow-md rounded-md overflow-hidden cursor-pointer transform transition-transform duration-300 hover:scale-105">
                        <img src="{{ asset('assets/images/potrey-w.png') }}" alt="Pottery" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                            <span class="text-white text-xl font-semibold">Pottery</span>
                        </div>
                    </div>
                    <div class="relative bg-white shadow-md rounded-md overflow-hidden cursor-pointer transform transition-transform duration-300 hover:scale-105">
                        <img src="{{ asset('assets/images/cooking-class.png') }}" alt="Cooking Class" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                            <span class="text-white text-xl font-semibold">Cooking Class</span>
                        </div>
                    </div>
                    <div class="relative bg-white shadow-md rounded-md overflow-hidden cursor-pointer transform transition-transform duration-300 hover:scale-105">
                        <img src="{{ asset('assets/images/chunky-bag.png') }}" alt="Chunky Bag" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                            <span class="text-white text-xl font-semibold">Chunky Bag</span>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end mt-4">
                    <button class="bg-pink-500 hover:bg-pink-600 text-white text-xs lg:text-lg font-semibold py-2 px-5 rounded-md">See all activities</button>
                </div>
            </div>
        </div>
   

</div>
@endsection
