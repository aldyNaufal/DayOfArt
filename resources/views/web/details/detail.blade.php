@extends('layouts.app')
@section('content')

<div class="w-full ">
    <div class="relative w-full h-screen">
        <img src="{{ asset('assets/images/cooking-mama.svg') }}" alt="Day of Art" class="w-full object-cover h-screen">
    </div>

    <div class="w-4/5 mx-auto px-6 py-10 bg-white shadow-md relative">
        <div class="flex justify-start flex-col">
            <h1 class="lg:text-3xl font-bold sm:text-xl">{{$event->name}}</h1>
            <div class="flex flex-row lg:pb-10">
                <img src="{{ asset('assets/icons/location.png') }}" alt="location" class="mb-4 lg:w-6 mt-4 sm:w-4 sm:h-4"/>
                <p class="text-gray-600 ml-2 lg:mt-4 sm:mt-3 lg:text-base sm:text-md">Vernon Education, Malang</p>
            </div>
        </div>

        <div class="absolute bg-white p-5 flex items-start shadow-md justify-start flex-col w-1/5 right-0 top-12 cursor-pointer transform transition-transform duration-300 hover:scale-105">
            <span class="text-black font-semibold lg:text-sm sm:text-[10px]">Start from</span>
            <span class="text-pink-500 font-bold lg:text-xl md:text-sm sm:text-xs">Rp 90.000</span>
        </div>

        <div class="absolute top-0 right-0 mt-4 mr-4 flex space-x-2 sm:mt-2 sm:mr-2 sm:space-x-1">
            <button class="bg-white p-2 rounded shadow-md cursor-pointer transform transition-transform duration-300 hover:scale-105 sm:p-1">
                <img src="{{ asset('assets/icons/bookmark.png') }}" alt="bookmark" class="md:w-4 sm:w-3"/>
            </button>
            <button class="bg-white p-2 rounded shadow-md cursor-pointer transform transition-transform duration-300 hover:scale-105 sm:p-1">
                <img src="{{ asset('assets/icons/share.png') }}" alt="share" class="md:w-4 sm:w-3"/>
            </button>
        </div>
    </div>

    <div class="w-4/5 mx-auto px-6 py-10 flex lg:flex-row gap-14 sm:flex-col">
        <div class="lg:w-2/3 bg-white shadow-md p-5 sm:w-full">
            <div class="mb-6">
                <h2 class=" text-2xl font-bold ">Description</h2>
                <p class="text-gray-700 mt-2 text-left text-justify w-full xl:leading-10 sm:leading-6 lg:leading-7 xl:text-md lg:text-base sm:text-xs">
                Join our Tiramisu Cooking Class and learn to make this classic Italian dessert! Guided by a professional chef, you'll master the art of selecting quality ingredients, crafting the perfect mascarpone layers, and assembling a delicious tiramisu. Suitable for beginners and culinary enthusiasts alike, all materials and equipment are provided. Sign up now and savor the sweet success of your creation!
                </p>
                <div class="flex flex-row gap-10 mt-3">
                    <div class="mb-6 leading-8">
                        <h2 class="xl:text-2xl font-bold sm:text-lg">Agenda</h2>
                        <ul class="list-disc list-inside text-gray-700 mt-2 lg:text-base sm:text-xs leading-5">
                            <li class="mb-3">Opening</li>
                            <li class="mb-3">Workshop</li>
                            <li class="mb-3">Closing</li>
                        </ul>
                    </div>

                    <div class="mb-6 leading-8">
                        <h2 class="text-2xl font-bold sm:text-lg">Benefits</h2>
                        <ul class="list-disc list-inside text-gray-700 mt-2 lg:text-lg sm:text-xs">
                            <li class="mb-3">Certificate</li>
                            <li class="mb-3">Cake</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:w-1/3 bg-white shadow-md h-1/2 p-5 sm:w-full">
            <div class="mb-6 leading-10">
                <h2 class="text-2xl font-bold lg:text-xl xl:text-2xl ">Other Information</h2>
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
                        <p>Vernon Education</p>
                    </div>
            </div>
        </div>
    </div>

    <div class="bg-gray-100 p-4 rounded-md mb-6">
        <div class="w-2/3 mx-auto px-6 py-10 bg-white">
            <h2 class="text-2xl font-bold">Choose your ticket</h2>
            <form id="registerForm" action="{{ route('ticket.create', ['event' => $event]) }}" method="post" class="mt-4">
                @csrf
                @method('post')
                <div class="flex items-center justify-between mb-10 border-2 border-solid p-5 border-black">
                    <label for="ticket" class="text-black font-semibold">Tiramisu Cooking Class</label>
                    <div class="flex flex-row">
                        <span class="text-black "> Rp 90.000</span>
                        <span class="text-gray-500">/pax</span>
                    </div>
                </div>
                <div class="flex justify-between items-end border-t py-10 px-5 mt-10">
                    <div class="flex flex-row gap-2">
                        <span class="md:text-xl font-bold text-[#e145a6] sm:text-sm"> Total Price :</span>
                        <span class="md:text-xl font-bold text-black sm:text-sm"> Rp 90.000</span>
                    </div>
                    <button type="button" id="registerButton" class="bg-pink-500 text-white px-4 py-2 rounded-md cursor-pointer transform transition-transform duration-300 hover:scale-105 md:text-base sm:text-sm">Register to event</button>
                </div>
            </form>
        </div>
    </div>

    <div class="w-2/3 mx-auto px-6 py-10 flex lg:flex-row sm:flex-col lg:gap-14 sm:gap-6">
        <div class="lg:w-2/3 sm:w-4/5 bg-white shadow-md border-none mx-auto my-auto">
            <img src="{{ asset('assets/icons/map.png') }}" alt="map" class="w-full"></img>
        </div>
        <div class="lg:w-1/3 sm:w-4/5 mx-auto my-auto bg-white shadow-md h-1/2 px-5 py-2 cursor-pointer transform transition-transform duration-300 hover:scale-105">
            <div class="mb-6 flex flex-row gap-3">
                <img src="{{ asset('assets/icons/location_in.png') }}" alt="map" class="xl:w-5 xl:h-7 lg:w-4 lg:h-6 mt-2 w-5 h-7"> </img>
                <div class="flex flex-col">
                    <h2 class="font-bold text-[#0C356A] lg:text-sm xl:text-md">Vernon Education</h2>
                    <h3 class="font-bold text-[#0C356A] lg:text-sm xl:text-md">Jalang Glaxy No. 126, Malang</h3>
                    <span class="text-gray-400 mt-5 text-md lg:text-xs xl:text-base">Jl. Veteran No.2, Kota Malang Jawa Timur</span>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('registerButton').addEventListener('click', function() {
    var form = document.getElementById('registerForm');
    form.submit();
    alert('Anda berhasil mendaftar ke akun');
});
</script>

@endsection
