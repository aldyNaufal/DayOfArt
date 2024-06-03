@extends('layouts.app')
@section('content')

<body>
<main class="p-8">
        <section class="text-center mb-12">
            <h1 class="text-3xl font-bold text-pink-500 mb-4">About Us</h1>
        </section>
        <section class="max-w-5xl mx-auto text-center">
            <div class="mb-12">
                <div class="flex">
                    <div class="w-1/2 justify-center">
                        <h2 class="text-2xl font-bold mb-4">About Day of Art</h2>
                        <p class="text-justify text-black-600 mb-6">
                        Pada Agustus 2023, Day of Art diluncurkan untuk mendorong kreativitas dan memperkaya masyarakat Indonesia melalui workshop akhir pekan dan kolaborasi dengan merek lokal. 
                        Kami percaya seni lokal bisa menciptakan dampak positif dan Day of Art menjadi wadah untuk menggali potensi tersebut. Sejak diluncurkan, Day of Art telah menerima lima tawaran kolaborasi dari merek lokal dan kafe. 
                        Minat ini menunjukkan potensi platform kami sebagai penghubung efektif antara masyarakat dan merek lokal, serta mengubah cara seni, acara, dan merek bekerja sama di Indonesia.
                        </p>
                        <span class="border border-black font-bold bg-white-200 text-pink-500 py-2 px-4 rounded-full">Art</span>
                        <span class="border border-black font-bold bg-white-200 text-pink-500 py-2 px-4 rounded-full">Handicraft</span>
                        <span class="border border-black font-bold bg-white-200 text-pink-500 py-2 px-4 rounded-full">Creativity</span>
                        <span class="border border-black font-bold bg-white-200 text-pink-500 py-2 px-4 rounded-full">Workshop</span>
                    </div>
                    <div class="w-1/2">
                        <img src="{{ asset('assets/images/img_aboutus 1.png') }}" alt="Image 1" class="absolute top-[220px] right-[130px] h-auto rounded-lg shadow-lg">
                        <img src="{{ asset('assets/images/img_aboutus 3.png') }}" alt="Image 1" class="absolute top-[200px] right-[380px] h-auto rounded-lg shadow-lg">
                        <img src="{{ asset('assets/images/img_aboutus 2.png') }}" alt="Image 1" class="absolute top-[280px] right-[250px] h-auto rounded-lg shadow-lg">
                    </div>
                    
                </div>
                
            </div>
            <div class="my-[50px]">
                <h2 class="text-2xl font-bold mb-4 text-center">Our Mission</h2>
                <div class="flex justify-between space-x-4">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <div class="text-4xl text-pink-500 font-bold mb-4">1</div>
                        <p>To foster a vibrant and inclusive arts and culture scene in Indonesia by providing a platform for artists to showcase their work, connect with audiences, and engage in creative dialogue.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <div class="text-4xl text-pink-500 font-bold mb-4">2</div>
                        <p>To cultivate a deep appreciation for arts and culture among the Indonesian public through educational programs, outreach initiatives, and community engagement activities.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <div class="text-4xl text-pink-500 font-bold mb-4">3</div>
                        <p>To advocate for the development of arts infrastructure and facilities across Indonesia, ensuring that everyone has access to spaces where they can experience, create, and learn about art.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

@endsection