<div class="w-full bg-pink-400 2xl:py-5 2xl:px-32 xl:px-18 xl:pr-10 lg:py-5 lg:px-12 md:py-5 md:px-10 sm:px-6 sm:py-5 flex flex-row justify-between items-center shadow-md">
    <a href="#" class="text-white font-bold 2xl:text-3xl sm:text-lg md:text-lg lg:text-xl xl:text-2xl 2xl:ml-10"></a>
    <div class="flex flex-row 2xl: 2xl:gap-6 xl:gap-6 lg:gap-6 md:gap-6 sm:gap-5 text-white font-light items-center">
        <a href="#" class="hover:text-pink-600 2xl:text-xl sm:text-xs md:text-sm lg:text-md xl:text-lg ">Home</a>
        <a href="#" class="hover:text-pink-600 2xl:text-xl sm:text-xs md:text-sm lg:text-md xl:text-lg">About</a>
        <div class="relative group">
            <a href="#" class="hover:text-pink-600 2xl:text-xl sm:text-xs md:text-sm lg:text-md xl:text-lg">Activities</a>
            <ul class="absolute hidden group-hover:block bg-white text-blue-400 shadow-md rounded-md">
                <li class="px-4 py-2 hover:bg-gray-100"><a href="#">All Activities</a></li>
                <li class="px-4 py-2 hover:bg-gray-100"><a href="#">Pottery</a></li>
                <li class="px-4 py-2 hover:bg-gray-100"><a href="#">Cooking Class</a></li>
                <li class="px-4 py-2 hover:bg-gray-100"><a href="#">Flower Bucket</a></li>
                <li class="px-4 py-2 hover:bg-gray-100"><a href="#">Chunky Bag</a></li>
            </ul>
        </div>
        <a href="#" class="hover:text-pink-600 2xl:text-xl sm:text-xs md:text-sm lg:text-md xl:text-lg">FaQ</a>
        @auth
        <a href="#" class="hover:text-pink-600 2xl:text-xl sm:text-xs md:text-sm lg:text-md xl:text-lg">Profile</a>
        @endauth
        @guest
        <button class="flex items-center justify-center bg-white 2xl:w-[150px] 2xl:h-[50px] xl:w-[120px] xl:h-[40px] lg:w-[90px] lg:h-[30px] md:w-[60px] md:h-[20px] sm:w-[60px] sm:h-[20px] 2xl:px-8 2xl:py-2 xl:px-8 xl:py-2 lg:px-8 lg:py-2 md:px-8 md:py-2 sm:px-3 sm:py-1 shadow-md text-blue-400 rounded-md hover:bg-gray-100 2xl:text-xl sm:text-xs md:text-sm lg:text-md xl:text-lg" onclick="location.href='{{ route('login') }}'">Login</button>
        <button class="flex items-center justify-center bg-white 2xl:w-[150px] 2xl:h-[50px] xl:w-[120px] xl:h-[40px] lg:w-[90px] lg:h-[30px] md:w-[60px] md:h-[20px] sm:w-[60px] sm:h-[20px] 2xl:px-8 2xl:py-2 xl:px-8 xl:py-2 lg:px-8 lg:py-2 md:px-8 md:py-2 sm:px-3 sm:py-1 shadow-md text-blue-400 rounded-md hover:bg-gray-100 2xl:text-xl sm:text-xs md:text-sm lg:text-md xl:text-lg">Register</button>
        @endguest
    </div>
</div>
