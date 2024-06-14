@extends('components.layout')

@section('title', 'drinks')

@section('content')
<div class="p-8 -mt-20">
    <div class="flex items-center mb-16">
        <img src="{{ asset('img/drinks.png') }}" alt="Foods image" class="w-[4%] h-auto mr-6">
        <h1 class="text-4xl font-bold text-zinc-900" style="font-family: 'Poppins', sans-serif;">Drinks</h1>
    </div>
    <div class="flex justify-center space-x-8">
        <a href="https://wa.me/6282392615968" class="relative bg-gradient-to-br from-yellow-900/80 to-yellow-900/80 rounded-3xl shadow-lg w-[240px] h-[380px] flex flex-col items-center border-8 border-yellow-900 hover:border-neutral-400 transition-all duration-300 transform hover:scale-95">
            <div class="w-full flex flex-col items-center">
                <img src="{{ asset('img/tehobeng.png') }}" alt="Foods image" class="w-[65%] h-auto object-cover mt-8 rounded-2xl">
                <h2 class="mt-7 text-center text-3xl text-sky-50" style="font-weight: bold; font-family: 'Poppins', sans-serif;">Teh Obeng</h2>
                <p class="mt-14 text-center text-lg text-sky-50">Rp 5.000</p>
            </div>
        </a>
        <a href="https://wa.me/6282392615968" class="relative bg-gradient-to-br from-yellow-900/80 to-yellow-900/80 rounded-3xl shadow-lg w-[240px] h-[380px] flex flex-col items-center border-8 border-yellow-900 hover:border-neutral-400 transition-all duration-300 transform hover:scale-95">
            <div class="w-full flex flex-col items-center">
                <img src="{{ asset('img/tehtarik.png') }}" alt="Foods image" class="w-[65%] h-auto object-cover mt-8 rounded-2xl">
                <h2 class="mt-7 text-center text-3xl text-sky-50" style="font-weight: bold; font-family: 'Poppins', sans-serif;">Teh Tarik</h2>
                <p class="mt-14 text-center text-lg text-sky-50">Rp 8.000</p>
            </div>
        </a>
        <a href="https://wa.me/6282392615968" class="relative bg-gradient-to-br from-yellow-900/80 to-yellow-900/80 rounded-3xl shadow-lg w-[240px] h-[380px] flex flex-col items-center border-8 border-yellow-900 hover:border-neutral-400 transition-all duration-300 transform hover:scale-95">
            <div class="w-full flex flex-col items-center">
                <img src="{{ asset('img/kopio.png') }}" alt="Foods image" class="w-[65%] h-auto object-cover mt-8 rounded-2xl">
                <h2 class="mt-7 text-center text-3xl text-sky-50" style="font-weight: bold; font-family: 'Poppins', sans-serif;">Kopi O</h2>
                <p class="mt-14 text-center text-lg text-sky-50">Rp 8.000</p>
            </div>
        </a>
        <a href="https://wa.me/6282392615968" class="relative bg-gradient-to-br from-yellow-900/80 to-yellow-900/80 rounded-3xl shadow-lg w-[240px] h-[380px] flex flex-col items-center border-8 border-yellow-900 hover:border-neutral-400 transition-all duration-300 transform hover:scale-95">
            <div class="w-full flex flex-col items-center">
                <img src="{{ asset('img/kopisusu.png') }}" alt="Foods image" class="w-[65%] h-auto object-cover mt-8 rounded-2xl">
                <h2 class="mt-7 text-center text-3xl text-sky-50" style="font-weight: bold; font-family: 'Poppins', sans-serif;">Kopi Susu</h2>
                <p class="mt-14 text-center text-lg text-sky-50">Rp 5.000</p>
            </div>
        </a>
    </div>
</div>
@endsection
