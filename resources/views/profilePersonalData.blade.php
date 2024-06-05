@extends('layouts.app')
@section('content')
<div class="container mx-auto px-4 py-16">
    <div class="flex flex-col lg:flex-row">
        <!-- Sidebar -->
        <div class="w-full lg:ml-20 lg:w-1/4 mb-8 lg:mb-0">
            <ul class="space-y-3 bg-white p-6 rounded-lg shadow-lg">
                <li>
                    <a href="profile" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                        <img src="/assets/images/avatar.png" class="w-6 h-6">
                        <span class="ml-3">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="profilePersonalData" class="flex items-center p-2 text-gray-900 rounded-lg bg-pink-500 hover:bg-pink-600">
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
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
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
        <!-- Main Content -->
        <div class="w-full lg:w-3/4 lg:mr-20 bg-white p-6 rounded-lg shadow-lg lg:ml-4">
            <div class="ml-4">
                <h2 class="text-2xl font-bold mb-8">Personal Data</h2>
                <div class="space-y-6">
                    <div class="flex">
                        <span class="w-1/4 font-semibold">Fullname</span>
                        <span class="w-3/4">Muhammad Aldy Naufal</span>
                    </div>
                    <div class="flex">
                        <span class="w-1/4 font-semibold">Surname</span>
                        <span class="w-3/4">Aldy Ganteng</span>
                    </div>
                    <div class="flex">
                        <span class="w-1/4 font-semibold">Birthday</span>
                        <span class="w-3/4">28 / 02 / 2004</span>
                    </div>
                    <div class="flex">
                        <span class="w-1/4 font-semibold">Phone Number</span>
                        <span class="w-3/4">08123456789</span>
                    </div>
                    <div class="flex">
                        <span class="w-1/4 font-semibold">Location</span>
                        <span class="w-3/4">Jawa Timur, Malang</span>
                    </div>
                </div>
            </div>
            <a href="{{route('profile.edit',['user'=>$user])}}">
                <div class="mt-6 mr-4 flex justify-end">
                    <div class="w-30 px-10 py-2 ml-4 bg-pink-500 text-white rounded-lg hover:bg-pink-600">Edit Profile</div>
                </div>
            </a>
            
        </div>
    </div>
</div>
@endsection
