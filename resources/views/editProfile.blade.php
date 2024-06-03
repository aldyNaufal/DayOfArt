@extends('layouts.app')
@section('content')

<div class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white shadow-lg rounded-lg p-8 max-w-lg w-full">
            <div class="bg-cover bg-center h-40 w-full rounded-t-lg" style="background-image: url('path_to_your_image');">
                <div class="flex justify-center items-center h-full">
                <img src="{{ asset('assets/icons/logo DoA transparent 2.png') }}" alt="Logo doa" class="sm:w-[180px] xl:w-[200px] sm:ml-4 ">
                </div>
            </div>
            <h2 class="text-2xl font-bold my-4">Personal Data</h2>
            <form action="#">
                <div class="mb-4">
                    <label for="fullname" class="block text-sm font-medium text-gray-700">Fullname</label>
                    <input type="text" id="fullname" name="fullname" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Type your fullname here">
                </div>
                <div class="mb-4">
                    <label for="surname" class="block text-sm font-medium text-gray-700">Surname</label>
                    <input type="text" id="surname" name="surname" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Type your surname here">
                </div>
                <div class="mb-4">
                    <label for="birthday" class="block text-sm font-medium text-gray-700">Birthday</label>
                    <div class="flex space-x-2">
                        <input type="text" id="day" name="day" class="mt-1 block w-1/4 px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="DD">
                        <input type="text" id="month" name="month" class="mt-1 block w-1/4 px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="MM">
                        <input type="text" id="year" name="year" class="mt-1 block w-1/2 px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="YYYY">
                    </div>
                </div>
                <div class="mb-6">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone number</label>
                    <input type="text" id="phone" name="phone" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Type your phone number here">
                </div>
                <button type="submit" class="w-full bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded">Create Account</button>
            </form>
        </div>
    </div>
</div>