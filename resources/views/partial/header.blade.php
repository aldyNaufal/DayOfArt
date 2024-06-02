<div class="w-full bg-[#E145A6] 2xl:py-2 2xl:px-32 xl:px-18 xl:pr-10 lg:py-2 lg:px-12 md:py-2 md:px-10 sm:px-6 sm:py-2 flex flex-row justify-between items-center shadow-md">
    <div class="flex flex-row 2xl: 2xl:gap-6 xl:gap-6 lg:gap-6 md:gap-6 sm:gap-5 text-[#fcecf6] font-light items-center">
    <img src="{{ asset('assets/icons/logo DoA transparent 2.png') }}" alt="Logo doa" class="sm:w-12 sm:ml-4 md:w-15 lg:w-18 xl:w-20 2xl:w-22"></img>
        <a href="#" class="font-bold hover:text-[#cb3e95] 2xl:text-xl sm:text-xs md:text-sm lg:text-md xl:text-lg ">Home</a>
        <a href="/about" class="font-bold hover:text-[#cb3e95] 2xl:text-xl sm:text-xs md:text-sm lg:text-md xl:text-lg">About</a>
        <div class="relative group">
            <p class="font-bold hover:text-text-[#cb3e95] 2xl:text-xl sm:text-xs md:text-sm lg:text-md xl:text-lg">Activities</p>
            <ul class="absolute hidden group-hover:block bg-[#E145A6] text-[#fcecf6]   shadow-md rounded-md">
                <li class="px-4 py-2 hover:bg-[#fbe3f2] hover:text-[#972964]"><a href="#">All Activities</a></li>
                <li class="px-4 py-2 hover:bg-[#fbe3f2] hover:text-[#972964]"><a href="#">Pottery</a></li>
                <li class="px-4 py-2 hover:bg-[#fbe3f2] hover:text-[#972964]"><a href="#">Cooking Class</a></li>
                <li class="px-4 py-2 hover:bg-[#fbe3f2] hover:text-[#972964]"><a href="#">Flower Bucket</a></li>
                <li class="px-4 py-2 hover:bg-[#fbe3f2] hover:text-[#972964]"><a href="#">Chunky Bag</a></li>
            </ul>
        </div>
        <a href="/faq" class="font-bold hover:text-[#cb3e95] 2xl:text-xl sm:text-xs md:text-sm lg:text-md xl:text-lg">FaQ</a>
        <a href="#" class="font-bold hover:text-text-[#cb3e95] 2xl:text-xl sm:text-xs md:text-sm lg:text-md xl:text-lg">Profile</a>
        <div class="relative w-1/4 sm:ml-2 md:ml-7 lg:ml-[200px] xl:ml-[400px] 2xl:ml-[500px]">
                <input type="text" class="w-full sm:px-2 sm:py-0 xl:py-2 lg:px-20 border border-gray-300 sm:rounded-2xl xl:rounded-6xl outline-none">
                <img src="{{ asset('assets/icons/search-events.png') }}" alt="Search Icon" class="absolute right-5 top-1/2 transform -translate-y-1/2 sm:w-3 sm:h-3 xl:w-5 xl:h-5">
        </div>
        @auth
        @endauth
        @guest
        <div class="flex flex-row justify-center items-center">
            <img src="{{ asset('assets/icons/Password.png') }}" alt="Password Icon" class="sm:w-4 sm:h-4 sm:mr-1 xl:w-5 xl:h-5"></img> 
            <a href="{{ route('signin') }}" class="font-bold hover:text-text-[#cb3e95] 2xl:text-xl sm:text-xs md:text-sm lg:text-md xl:text-lg">Login</a>
         </div>

        @endguest
    </div>
</div>
