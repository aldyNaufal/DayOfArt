@extends('layouts.auth')
@section('content')
<div class="flex flex-col lg:flex-row w-full h-full">
    <div class="w-full h-full lg:w-1/2 relative">
        <img src="{{ asset('assets/images/signup.png') }}" alt="Signup Image" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col text-white">
            <img src="{{ asset('assets/icons/logo DoA transparent 2.png') }}" alt="Logo doa" class="w-[120px] sm:mt-[40px] sm:ml-[470px] md:ml-[570px] lg:ml-[350px] xl:ml-[556px] 2xl:ml-[570px] 2xl:mt-[40px] ">
            <p class="text-4xl mb-4 text-[#F6C5E3] text-left font-extrabold shadow-md 2xl:mt-[350px] 2xl:ml-[70px] sm:mt-[250px] sm:ml-[40px] lg:ml-[20px] xl:ml-[50px]">Embrace Art, Inspire Life</p>
            <p class="text-left text-lg xl:text-xl xl:w-[550px] 2xl:ml-[80px] sm:w-[500px] lg:w-[400px] sm:ml-[50px] lg:ml-[30px] xl:ml-[60px]">Day of Art brings beauty and inspiration through exhibitions, workshops, and creative content. Discover and celebrate art with us!</p>
        </div>
    </div>
    <div class="lg:w-1/2 flex items-center justify-center p-8">
        <div>
            <h1 class="text-5xl font-bold mb-10 mt-5">Sign Up</h1>
            <form action="{{ route('signup-post') }}" method="POST">
                @csrf
                @method('post')
                <div class="flex flex-col gap-4">
                    <input type="text" placeholder="Full Name" name="fullname" class="w-96 px-4 py-2 border rounded-md shadow-md outline-none" required>
                    <input type="text" placeholder="Surname" name="surname" class="w-96 px-4 py-2 border rounded-md shadow-md outline-none" required>
                    <input type="email" placeholder="Email" name="email" class="w-96 px-4 py-2 border rounded-md shadow-md outline-none" required>
                    <input type="password" placeholder="Password" name="password" class="w-96 px-4 py-2 border rounded-md shadow-md outline-none" required>
                    <input type="password" placeholder="Re-enter Password" name="password_confirmation" class="w-96 px-4 py-2 border rounded-md shadow-md outline-none" required>
                    <input type="date" placeholder="Birthdate" name="birthdate" class="w-96 px-4 py-2 border rounded-md shadow-md outline-none" required>
                    <input type="tel" placeholder="Phone Number" name="phone_number" class="w-96 px-4 py-2 border rounded-md shadow-md outline-none" required>
                    <div class="flex flex-row justify-between mb-5 mt-2">
                        <button type="button" class="px-12 py-2 flex flex-row gap-5 rounded-md align-middle shadow-md hover:bg-gray-50">
                            <img src="{{ asset('assets/icons/google.png') }}" alt="Google" class="w-5 h-5">
                            <p class="text-sm">Google</p>
                        </button>
                        <button type="button" class="px-12 py-2 flex flex-row gap-5 rounded-md shadow-md hover:bg-gray-50">
                            <img src="{{ asset('assets/icons/facebook.png') }}" alt="Facebook" class="w-5 h-5">
                            <p class="text-sm">Facebook</p>
                        </button>
                    </div>
                </div>
                <button type="submit" class="w-full bg-blue-400 text-white font-medium px-4 py-2 rounded-md hover:bg-blue-500">Create Account</button>
            </form>
            <p class="text-sm text-gray-400 text-center mt-5 mb-5">Already have an account? <a href="{{ route('signin') }}" class="hover:text-gray-500">Sign in</a></p>
        </div>
    </div>
</div>
@endsection
