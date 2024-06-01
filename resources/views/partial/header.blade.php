<div class="w-full bg-[#E145A6] 2xl:py-2 2xl:px-16 xl:px-18 xl:pr-10 lg:py-2 lg:px-12 md:py-2 md:px-10 sm:px-6 sm:py-2 flex flex-row justify-between items-center shadow-md">
    <div class="flex flex-row 2xl:gap-8 xl:gap-6 lg:gap-6 md:gap-6 sm:gap-5 text-[#fcecf6] font-light items-center">
        <img src="{{ asset('assets/icons/logo DoA transparent 2.png') }}" alt="Logo doa" class="sm:w-12 sm:ml-4 md:w-15 lg:w-18 xl:w-20 2xl:w-22 ">
        <a href="#" class="hover:text-[#cb3e95] 2xl:text-xl sm:text-xs md:text-sm lg:text-md xl:text-lg">Home</a>
        <a href="#" class="hover:text-[#cb3e95] 2xl:text-xl sm:text-xs md:text-sm lg:text-md xl:text-lg">About</a>
        <div class="relative group">
            <p class="hover:text-[#cb3e95] 2xl:text-xl sm:text-xs md:text-sm lg:text-md xl:text-lg cursor-pointer">Activities</p>
            <ul class="absolute hidden group-hover:block bg-[#E145A6] text-[#fcecf6] shadow-md rounded-md z-10">
                <li class="px-4 py-2 hover:bg-[#fbe3f2] hover:text-[#972964]"><a href="#">All Activities</a></li>
                <li class="px-4 py-2 hover:bg-[#fbe3f2] hover:text-[#972964]"><a href="#">Pottery</a></li>
                <li class="px-4 py-2 hover:bg-[#fbe3f2] hover:text-[#972964]"><a href="#">Cooking Class</a></li>
                <li class="px-4 py-2 hover:bg-[#fbe3f2] hover:text-[#972964]"><a href="#">Flower Bucket</a></li>
                <li class="px-4 py-2 hover:bg-[#fbe3f2] hover:text-[#972964]"><a href="#">Chunky Bag</a></li>
            </ul>
        </div>
        <a href="#" class="hover:text-[#cb3e95] 2xl:text-xl sm:text-xs md:text-sm lg:text-md xl:text-lg">FaQ</a>
        <a href="#" class="hover:text-[#cb3e95] 2xl:text-xl sm:text-xs md:text-sm lg:text-md xl:text-lg">Profile</a>
    </div>
    <div class="relative w-1/4 xl:w-1/3 sm:ml-2 md:ml-10 lg:ml-[220px] xl:ml-[300px] 2xl:ml-[280px]">
        <input type="text" class="w-full sm:px-2 sm:py-0 xl:py-2 lg:px-4 border border-gray-300 sm:rounded-2xl xl:rounded-6xl outline-none" placeholder="Search for...">
        <img src="{{ asset('assets/icons/search-events.png') }}" alt="Search Icon" class="absolute right-5 top-1/2 transform -translate-y-1/2 sm:w-3 sm:h-3 xl:w-5 xl:h-5">
    </div>
    
    @auth
    <div class="flex flex-row justify-center items-center md:mr-5 lg:mr-15 xl:mr-[50px] 2xl:ml-[20px]">
        <img src="{{ asset('assets/images/profile.png') }}" alt="Profile Icon" class="sm:w-4 sm:h-4 sm:mr-1 xl:w-5 xl:h-5">
        <a href="{{ route('profile') }}" class="text-[#fcecf6] hover:text-[#cb3e95] 2xl:text-xl sm:text-xs md:text-sm lg:text-md xl:text-lg">Profile</a>
    </div>
    @endauth

    @guest
    <div class="flex flex-row justify-center items-center md:mr-5 lg:mr-15 xl:mr-[50px] 2xl:ml-[20px]">
        <img src="{{ asset('assets/icons/Password.png') }}" alt="Password Icon" class="sm:w-4 sm:h-4 sm:mr-1 xl:w-5 xl:h-5">
        <a href="{{ route('signin') }}" class="text-[#fcecf6] hover:text-[#cb3e95] 2xl:text-xl sm:text-xs md:text-sm lg:text-md xl:text-lg">Login</a>
    </div>
    @endguest
</div>
