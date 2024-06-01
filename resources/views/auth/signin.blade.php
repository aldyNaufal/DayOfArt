@extends('layouts.auth')
@section('content')
<div class="flex flex-col lg:flex-row w-full h-full">
    <div class="w-full h-full lg:w-1/2 lg:h-full relative">
        <img src="{{ asset('assets/images/signin.png') }}" alt="Signin Image" class="w-full h-screen object-cover">
        <div class="w-full h-full absolute inset-0 bg-black bg-opacity-50 flex flex-col text-white">
            <img src="{{ asset('assets/icons/logo DoA transparent 2.png') }}" alt="Logo doa" class="w-[120px] sm:mt-[40px] sm:ml-[470px] md:ml-[570px] lg:ml-[350px] xl:ml-[556px] 2xl:ml-[570px] 2xl:mt-[40px] ">
            <p class="text-4xl mb-4 text-[#F6C5E3] text-left font-extrabold shadow-md 2xl:mt-[350px] 2xl:ml-[70px] sm:mt-[250px] sm:ml-[40px] lg:ml-[20px] xl:ml-[50px]">Where Art Meets Life</p>
            <p class="text-left text-lg xl:text-xl  2xl:w-[550px] 2xl:ml-[80px] sm:w-[500px] sm:ml-[50px] lg:ml-[30px] xl:ml-[60px]">Day of Art connects you with the vibrant world of art, providing unique experiences and inspiration. Dive into creativity with us!</p>
        </div>
    </div>
    <div class="w-full lg:w-1/2 flex items-center justify-center p-4 md:p-8">
    <div class="" >
            <h1 class="text-5xl font-bold mb-10 2xl:text-5xl 2xl:font-bold 2xl:mb-10">Login</h1>
            <form action="" method="POST">
                @csrf
                @method('POST')
                <div class="flex flex-col gap-2">
                    <input type="text" placeholder="Email" name="email" class="w-96 px-4 py-2 border  rounded-md mb-4 shadow-md outline-none">
                    <input type="password" placeholder="Password" name="password" class="w-96 px-4 py-2 border  rounded-md mb-4 shadow-md outline-none">
                    <a href="#" class="text-gray-400 text-sm text-end -mt-5 hover:text-gray-500">Forget Password?</a>
                    <div class="flex flex-row justify-between mb-5 mt-4">
                        <button class="px-12 py-2 flex flex-row gap-5 rounded-md align-middle shadow-md hover:bg-gray-50">
                            <img src="{{ asset('assets/icons/google.png') }}" alt="Google" class="w-5 h-5">
                            <p class="text-sm">Google</p>
                        </button>
                        <button class="px-12 py-2 flex flex-row gap-5 rounded-md shadow-md hover:bg-gray-50">
                            <img src="{{ asset('assets/icons/facebook.png') }}" alt="Facebook" class="w-5 h-5">
                            <p class="text-sm">Facebook</p>
                        </button>
                    </div>
                </div>
                <button type="submit" class="w-full bg-blue-400 text-white font-semibold px-4 py-2 rounded-md hover:bg-blue-500">Login</button>
            </form>
            <p class="text-sm text-gray-400 text-center mt-5">Dont have any account yet? <a href="{{ route('signup') }}" class="hover:text-gray-500">Sign up</a></p>
        </div>
    </div>
</div>
@endsection