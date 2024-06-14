@extends('components.layout')

@section('title', 'Foods')

@section('content')
<div class="p-8 -mt-20">
    <div class="flex items-center mb-16">
        <img src="{{ asset('img/foods.png') }}" alt="Foods image" class="w-[4%] h-auto mr-6">
        <h1 class="text-4xl font-bold text-zinc-900" style="font-family: 'Poppins', sans-serif;">Foods</h1>
    </div>
    <div class="flex justify-center space-x-8">
        <a href="https://wa.me/6282392615968" class="relative bg-gradient-to-br from-yellow-900/80 to-yellow-900/80 rounded-3xl shadow-lg w-[240px] h-[380px] flex flex-col items-center border-8 border-yellow-900 hover:border-neutral-400 transition-all duration-300 transform hover:scale-95">
            <div class="w-full flex flex-col items-center">
                <img src="{{ asset('img/satekoz.png') }}" alt="Foods image" class="w-[80%] h-auto object-cover mt-8 rounded-2xl">
                <h2 class="mt-7 text-center text-3xl text-sky-50" style="font-weight: bold; font-family: 'Poppins', sans-serif;">Sate <br> Koz</h2>
                <p class="mt-auto mb-4 text-center text-lg text-sky-50">Rp 15.000</p>
            </div>
        </a>
        <a href="https://wa.me/6282392615968" class="relative bg-gradient-to-br from-yellow-900/80 to-yellow-900/80 rounded-3xl shadow-lg w-[240px] h-[380px] flex flex-col items-center border-8 border-yellow-900 hover:border-neutral-400 transition-all duration-300 transform hover:scale-95">
            <div class="w-full flex flex-col items-center">
                <img src="{{ asset('img/cabeijo.png') }}" alt="Foods image" class="w-[80%] h-auto object-cover mt-8 rounded-2xl">
                <h2 class="mt-7 text-center text-3xl text-sky-50" style="font-weight: bold; font-family: 'Poppins', sans-serif;">Ayam <br> Cabe Ijo</h2>
                <p class="mt-auto mb-4 text-center text-lg text-sky-50">Rp 20.000</p>
            </div>
        </a>
        <a href="https://wa.me/6282392615968" class="relative bg-gradient-to-br from-yellow-900/80 to-yellow-900/80 rounded-3xl shadow-lg w-[240px] h-[380px] flex flex-col items-center border-8 border-yellow-900 hover:border-neutral-400 transition-all duration-300 transform hover:scale-95">
            <div class="w-full flex flex-col items-center">
                <img src="{{ asset('img/ayamsaos.png') }}" alt="Foods image" class="w-[80%] h-auto object-cover mt-8 rounded-2xl">
                <h2 class="mt-7 text-center text-3xl text-sky-50" style="font-weight: bold; font-family: 'Poppins', sans-serif;">Ayam<br> Saos Taucho</h2>
                <p class="mt-auto mb-4 text-center text-lg text-sky-50">Rp 20.000</p>
            </div>
        </a>
        <a href="https://wa.me/6282392615968" class="relative bg-gradient-to-br from-yellow-900/80 to-yellow-900/80 rounded-3xl shadow-lg w-[240px] h-[380px] flex flex-col items-center border-8 border-yellow-900 hover:border-neutral-400 transition-all duration-300 transform hover:scale-95">
            <div class="w-full flex flex-col items-center">
                <img src="{{ asset('img/ayambakar.png') }}" alt="Foods image" class="w-[80%] h-auto object-cover mt-8 rounded-2xl">
                <h2 class="mt-7 text-center text-3xl text-sky-50" style="font-weight: bold; font-family: 'Poppins', sans-serif;">Ayam <br> Bakar</h2>
                <p class="mt-auto mb-4 text-center text-lg text-sky-50">Rp 20.000</p>
            </div>
        </a>
    </div>
</div>
@endsection
