@extends('components.layout')

@section('title', 'Menu')

@section('content')
<div class="flex justify-center space-x-8 p-8 transform -translate-y-4">
    <a href="{{ route('foods') }}" class="relative bg-gradient-to-br from-gray-200/40 to-gray-300/30 rounded-3xl shadow-lg w-[300px] h-[300px] flex flex-col items-center border-8 hover:border-yellow-900 transition-all duration-300 transform hover:-translate-y-3">
        <div class="w-full flex flex-col items-center">
            <img src="{{ asset('img/foods.png') }}" alt="foods img" class="w-[60%] h-auto object-cover mt-8 rounded-t-2xl">
            <h2 class="mt-4 text-center text-5xl text-stone-950" style="font-weight: bold; font-family: 'Poppins', sans-serif;">Foods</h2>
        </div>
    </a>
    <a href="{{ route('drinks') }}" class="relative bg-gradient-to-br from-gray-200/40 to-gray-300/30 rounded-3xl shadow-lg w-[300px] h-[300px] flex flex-col items-center border-8 hover:border-yellow-900 transition-all duration-300 transform hover:-translate-y-3">
        <div class="w-full flex flex-col items-center">
            <img src="{{ asset('img/drinks.png') }}" alt="drinks img" class="w-[60%] h-auto object-cover mt-8 rounded-t-2xl">
            <h2 class="mt-4 text-center text-5xl text-stone-950" style="font-weight: bold; font-family: 'Poppins', sans-serif;">Drinks</h2>
        </div>
    </a>
</div>
@endsection
