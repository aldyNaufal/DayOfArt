@extends('layouts.app')
@section('content')

<body>
    <main class="p-8">
        <section class="text-center mb-12">
            <h1 class="text-3xl font-bold text-pink-500 mb-4">Activities</h1>
        </section>
        <div class="flex justify-center items-center space-x-4 mb-8">
            <div class="relative" x-data="{ open: false }">
                <form action="{{route('filter.category')}}" method="get" enctype="">
                    <div class="form-group mb-4">
                        <label for="category" class="block">Activities</label>
                        <select name="category" id="category" class="bg-white border border-gray-300 rounded-md py-2 px-4 shadow-sm flex items-center space-x-2" >
                            <option value="bag">bag</option>
                            <option value="pottery">pottery</option>
                            <option value="cooking">cooking</option>
                            <option value="flower">flower</option>
                        </select>
                    </div>
                    <input type="submit" value="apply">
                </form>
            </div>
        </div>

        <div class="justify-start items-center">
        <div class="px-10 py-20 relative overflow-hidden  sm:px-5 xl:mt-5">
            <div class="grid grid-cols-4 gap-10 sm:mt-10 m:flex sm:flex-col sm:gap-5 lg:flex-row ml-20">
                @foreach($events as $e)
                <a href="{{ route('detail')}}">
                    <div class="px-5 py-2 pb-10 shadow-lg rounded-md bg-white h-96 cursor-pointer transform transition-transform duration-300 hover:scale-105">
                        <img src="{{ asset( $e->image ) }}" alt="{{ $e->name }}" class="rounded-md">
                        <div class="flex flex-row justify-between mt-5 items-center">
                            <h1 class="text-xl font-bold">{{$e->name}}</h1>
                            <p class="text-sm text-gray-400">{{ $e->date }}</p>
                        </div>
                        <p class="text-sm text-gray-400 mt-2 mb-3">{{ $e->city }}</p>
                    </div>
                </a>
                @endforeach     
            </div>
        </div>
    </main>
</body>

@endsection