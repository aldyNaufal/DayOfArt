@extends('layouts.app')
@section('content')

<div class="w-full ">
        <div class="relative w-full h-screen">
            <img src="{{ asset('assets/images/cooking-mama.svg') }}" alt="Day of Art" class="w-full object-cover h-screen">
        </div>

        <div class="w-2/3 mx-auto px-6 py-10 bg-white shadow-md relative">
            <div class="flex justify-start flex-col">
                <h1 class="text-3xl font-bold">Tiramisu Cooking Class</h1>
                <div class="flex flex-row pb-10">
                    <img src="{{ asset('assets/icons/location.png') }}" alt="location" class="mb-4 w-6 mt-4"/>
                    <p class="text-gray-600 ml-2 mt-4">Vernon Education, Malang</p>
                </div>
                
            </div>

            <div class="absolute bg-white p-5 flex items-start shadow-md justify-start flex-col w-1/5 right-0 top-12 cursor-pointer transform transition-transform duration-300 hover:scale-105">
                    <span class="text-black font-semibold text-sm ">Start from</span>
                    <span class="text-pink-500 font-bold text-xl">Rp 90.000</span>
            </div>
            <div class="absolute top-0 right-0 mt-4 mr-4 flex space-x-2">
                <div class="bg-white p-2 rounded shadow-md cursor-pointer transform transition-transform duration-300 hover:scale-105">
                    <img src="{{ asset('assets/icons/bookmark.png') }}" alt="bookmark" class="w-4"/>
                </div>
                <div class="bg-white p-2 rounded shadow-md cursor-pointer transform transition-transform duration-300 hover:scale-105">
                    <img src="{{ asset('assets/icons/share.png') }}" alt="share" class="w-4"/>
                </div>  
            </div>  
        </div>

        <div class="w-2/3 mx-auto px-6 py-10 flex flex-row gap-14">
            <div class="w-2/3 bg-white shadow-md p-5"> 
                <div class="mb-6">
                    <h2 class="ml-2 text-2xl font-bold">Description</h2>
                    <p class="text-gray-700 mt-2 text-left w-full leading-10">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                    <div class="flex flex-row gap-10 mt-3">
                        <div class="mb-6 leading-8">
                            <h2 class="text-2xl font-bold">Agenda</h2>
                            <ul class="list-disc list-inside text-gray-700 mt-2">
                                <li>Opening</li>
                                <li>Workshop</li>
                                <li>Closing</li>
                            </ul>
                        </div>

                        <div class="mb-6 leading-8">
                            <h2 class="text-2xl font-bold">Benefits</h2>
                            <ul class="list-disc list-inside text-gray-700 mt-2">
                                <li>Certificate</li>
                                <li>Cake</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/3 bg-white shadow-md h-1/2 p-5">
                <div class="mb-6 leading-10">
                    <h2 class="text-2xl font-bold ">Other Information</h2>
                    <p class="text-gray-700 mt-2">
                        <div class="flex flex-row gap-2">
                            <img src="{{ asset('assets/icons/calendar.png') }}" alt="calender" class="w-4 h-4 mt-3">
                            <p>05 May 2024</p>
                        </div>
                        <div class="flex flex-row gap-2">
                            <img src="{{ asset('assets/icons/time.png') }}" alt="calender" class="w-4 h-4 mt-3">
                            <p>07:00 PM</p>
                        </div>
                        <div class="flex flex-row gap-2">
                            <img src="{{ asset('assets/icons/location_on.png') }}" alt="calender" class="w-4 h-5 mt-3">
                            <p >Vernon Education</p>
                        </div>
                </div>
            </div>            
        </div>

        <div class="bg-gray-100 p-4 rounded-md mb-6">
            <div class="w-2/3 mx-auto px-6 py-10 bg-white">
                <h2 class="text-2xl font-bold">Choose your ticket</h2>
                <form action="#" method="POST" class="mt-4">
                    @csrf
                    <div class="flex items-center justify-between mb-10 border-2 border-solid p-5 border-black">
                        <label for="ticket" class="text-black font-semibold">Tiramisu Cooking Class</label>
                        <div class="flex flex-row">
                            <span class="text-black"> Rp 90.000</span>
                            <span class="text-gray-500">/pax</span>
                        </div> 

                    </div>
                    <div class="flex justify-between items-end border-t py-10 px-5 mt-10">
                        <div class="flex flex-row gap-2">
                            <span class="text-xl font-bold text-[#e145a6]"> Total Price :</span>
                            <span class="text-xl font-bold text-black"> Rp 90.000</span>
                        </div>    
                        <button type="submit" class="bg-pink-500 text-white px-4 py-2 rounded-md cursor-pointer transform transition-transform duration-300 hover:scale-105">Register to event</button>
                    </div>
            </form>

            </div>
            
        </div>

        <div class="w-2/3 mx-auto px-6 py-10 flex flex-row gap-14">
            <div class="w-2/3 bg-white shadow-md border-none"> 
                <img src="{{ asset('assets/icons/map.png') }}" alt="map" class="w-full"></img>
            </div>
            <div class="w-1/3 bg-white shadow-md h-1/2 px-5 py-2 cursor-pointer transform transition-transform duration-300 hover:scale-105">
                <div class="mb-6 flex flex-row gap-3">
                    <img src="{{ asset('assets/icons/location_in.png') }}" alt="map" class="w-5 h-7 mt-2"> </img>
                    <div class="flex flex-col">
                        <h2 class="font-bold text-[#0C356A]">Vernon Education</h2>
                        <h3 class="font-bold text-[#0C356A] text-sm">Jalang Glaxy No. 126, Malang</h3>
                        <span class="text-gray-400 mt-5 text-md">Jl. Veteran No.2, Kota Malang Jawa Timur</span>
                    </div>
                </div>
            </div>            
        </div>
        
        
</div>


@endsection