@extends('layouts.app')
@section('content')

<div class="flex justify-center my-10 mx-[150px]">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 w-full max-w-6xl shadow-lg">
        <div class="md:col-span-2 bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-6">Checkout</h2>
            <h3 class="text-xl font-semibold mb-4">Contact Information</h3>
            <form>
                @csrf
                @method('POST')
                <div class="flex flex-col gap-4">
                    <input type="text" id="name" placeholder="First Name" class="mt-1 w-full shadow-md p-2 border rounded">
                    <input type="text" id="phone-number" placeholder="Phone number" class="mt-1 w-full shadow-md p-2 border rounded">
                    <input type="text" id="email" placeholder="Email" class="mt-1 w-full shadow-md p-2 border rounded">
                </div>
            </form>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-6">Order</h2>
            <div class="flex items-center mb-4">
                <img src="{{ asset('images/product.jpg') }}" alt="Product Image" class="w-16 h-16 rounded mr-4">
                <div>
                    <h3 class="text-lg font-semibold">Orkestra a la jawa</h3>
                    <p class="text-gray-600">Section 1</p>
                    <p class="text-gray-600">17 August 2024</p>
                </div>
            </div>
            <div class="flex justify-between items-center mb-6">
                <span class="font-semibold">Subtotal :</span>
                <span class="text-pink-500 font-bold">Rp40.000</span>
            </div>
            <div class="border-t pt-4">
                <div class="flex justify-between items-center mb-2">
                    <span>Subtotal</span>
                    <span>Rp40.000</span>
                </div>
                <div class="flex justify-between items-center mb-2">
                    <span>Tax</span>
                    <span>Rp0.00</span>
                </div>
                <div class="flex justify-between items-center font-semibold">
                    <span>Total</span>
                    <span class="text-pink-500">Rp40.000</span>
                </div>
            </div>
            <button class="w-full bg-pink-500 text-white font-bold py-2 rounded mt-4">Buy Now</button>
        </div>
    </div>
</div>
@endsection
