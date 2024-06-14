@extends('components.layout')

@section('title', 'Contact')

@section('content')
<div class="flex flex-col items-center justify-center py-16">
    <h1 class="text-4xl font-bold text-center mb-12" style="font-family: 'Poppins', sans-serif;">Get More Information</h1>
    <div class="flex justify-center space-x-16">
        <!-- WhatsApp -->
        <div class="flex flex-col items-center text-center">
            <a href="https://api.whatsapp.com/send?phone=6282392615968" target="_blank">
                <div class="flex flex-col items-center">
                    <img src="{{ asset('img/whatsapp.png') }}" alt="WhatsApp" class="w-16 h-16 mb-4">
                    <h2 class="text-xl font-bold text-black" style="font-family: 'Poppins', sans-serif;">WHATSAPP</h2>
                </div>
                <p class="text-lg text-black">0823 9261 5968</p>
            </a>
        </div>
        <!-- Instagram -->
        <div class="flex flex-col items-center text-center">
            <a href="https://www.instagram.com/de_satetamkot/" target="_blank">
                <div class="flex flex-col items-center">
                    <img src="{{ asset('img/instagram.png') }}" alt="Instagram" class="w-16 h-16 mb-4">
                    <h2 class="text-xl font-bold text-black" style="font-family: 'Poppins', sans-serif;">INSTAGRAM</h2>
                </div>
                <p class="text-lg text-black">@de_satetamkot</p>
            </a>
        </div>
        <!-- Address -->
        <div class="flex flex-col items-center text-center">
            <a href="https://maps.app.goo.gl/MZ28moJf2KtoErrW6" target="_blank">
                <div class="flex flex-col items-center">
                    <img src="{{ asset('img/location.png') }}" alt="Address" class="w-16 h-16 mb-4">
                    <h2 class="text-xl font-bold text-black" style="font-family: 'Poppins', sans-serif;">ALAMAT</h2>
                </div>
                <p class="text-lg text-black">Taman Kota Mas,<br> Blok BLV, No. 2</p>
            </a>
        </div>
    </div>
</div>
@endsection
