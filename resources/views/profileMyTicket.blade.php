@extends('layouts.app')
@section('content')
<div class="container mx-auto px-4 py-16">
    <div class="flex flex-col lg:flex-row">
        <!-- Sidebar -->
        <div class="w-full lg:ml-20 lg:w-1/4 mb-16 lg:mb-10">
            <ul class="space-y-3 bg-white p-6 rounded-lg shadow-lg">
                <li>
                    <a href="/profile" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                        <img src="/assets/images/avatar.png" class="w-6 h-6">
                        <span class="ml-3">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="/profilePersonalData" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                        <img src="/assets/images/avatar.png" class="w-6 h-6">
                        <span class="ml-3">Personal Data</span>
                    </a>
                </li>
                <li>
                    <a href="/profileMyTicket" class="flex items-center p-2 text-gray-900 rounded-lg bg-pink-50 hover:bg-pink-600">
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
        <!-- Main Content -->
        <div class="w-full lg:mr-20 lg:w-3/4 mb-10 bg-white p-6 rounded-lg shadow-lg lg:ml-4">
            <div class="ml-4">
                <h2 class="text-2xl font-bold mb-10">My Ticket</h2>
                <!-- Kotak dalem ticket -->
                <div class="mt-8 bg-white p-6 stroke-grey rounded-lg shadow-xl mb-4 flex justify-start">
                    <div class="w-1/5">
                        <!-- Gambar ticket -->
                        <img src="/assets/images/RectanglePink.png">
                    </div>
                    <div class="w-4/5 ml-1">
                        <h2 class="text-xl font-bold">Tiramisu Cooking Class</h2>
                        <h3 class="text-md">03 / 06 / 2024</h3>
                        <h3 class="text-md">Venon Education, Malang</h3>
                    </div>
                    <div class="mt-20 mr-4 flex justify-end">
                        <a href="/myticket" class="w-40 h-10 px-10 py-1 bg-pink-500 text-white rounded-lg hover:bg-pink-600 text-center">See ticket</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
