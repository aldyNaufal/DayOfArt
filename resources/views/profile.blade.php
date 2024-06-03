@extends('layouts.app')
@section('content')
<div class="container mx-auto px-4 py-16">
    <div class="flex flex-col lg:flex-row">
        <!-- Sidebar -->
        <div class="w-full lg:ml-20 lg:w-1/4 mb-8 lg:mb-0">
            <ul class="space-y-3 bg-white p-6 rounded-lg shadow-lg">
                <li>
                    <a href="/profile" class="flex items-center p-2 text-gray-900 rounded-lg bg-pink-500  hover:bg-pink-600">
                        <img src="/assets/images/avatar.png" class="w-6 h-6">
                        <span class="ml-3">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="profilePersonalData" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                        <img src="/assets/images/avatar.png" class="w-6 h-6">
                        <span class="ml-3">Personal Data</span>
                    </a>
                </li>
                <li>
                    <a href="/profileMyTicket" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                        <img src="/assets/images/ticket-2-fill.png" class="w-6 h-6">
                        <span class="ml-3">Ticket</span>
                    </a>
                </li>
                <li>
                    <a href="/profileBookmark" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                        <img src="/assets/images/file-list-fill.png" class="w-6 h-6">
                        <span class="ml-3">Bookmark</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                        <img src="/assets/images/logout-box-r-fill.png" class="w-6 h-6">
                        <span class="ml-3">Log out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- main content -->
        <div class="lg:w-3/4 md:w-full lg:ml-8 items-start justify-start flex flex-col bg-white rounded-lg shadow-lg">
            <div class="md:mt-18">
                <div class="lg:flex flex-col lg:flex-row">
                    <div class="lg:w-2/4 flex justify-center ml-3 p-5">
                        <img src="/assets/images/fotoProfile.png" class="w-full h-34 rounded-lg mx-auto">
                    </div>
                    <div class="lg:w-3/4 ml-8">
                        <h2 class="text-2xl font-bold mt-4 mb-2">{{$user->fullname}}</h2>
                        <h3 class="text-black font-medium mb-4">{{$user->surname}}</h3>
                        <button class="bg-pink-500 text-white px-4 py-2 rounded-lg mb-4 hover:bg-pink-600">Change Profile Picture</button>
                    </div>
                </div>
            </div>
            <div class="w-2/6 flex flex-row gap-2 ml-8 mb-5">
                <div class="w-full">
                    <div class="mt-4 mb-2">
                        <span class="font-bold">Username </span>
                    </div>
                    <div class="mb-2">
                        <span class="font-bold">Email </span>
                    </div>
                    <div class="mb-2">
                        <span class="font-bold">Phone number </span>
                    </div>
                    <div class="mb-4">
                        <span class="font-bold">Password </span>
                    </div>
                </div>
                <div class="w-full">
                    <div class="mt-4 mb-2">
                        <span>{{$user->fullname}}</span>
                    </div>
                    <div class="mb-2">
                        <span>{{$user->email}}</span>
                    </div>
                    <div class="mb-2">
                        <span>{{$user->phoneNumber}}</span>
                    </div>
                    <div class="mb-4">
                        <span>•••••••</span>
                    </div>
                    <button class="bg-pink-500 text-white px-4 py-2 rounded-lg hover:bg-pink-600">Edit Profile</button>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
