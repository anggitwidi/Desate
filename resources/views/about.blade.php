@extends('components.layout')

@section('title', 'About Page')

@section('content')
<div class="relative min-h-screen flex flex-col items-center justify-start bg-cover bg-center text-black" style="background-image: url('{{ asset('path-to-your-background-image.png') }}'); font-family: 'Poppins', sans-serif;">
    <div class="flex flex-col items-center text-center max-w-2xl px-6 py-6 mt-6">
        <div class="mb-8">
            <img src="{{ asset('img/sate2.png') }}" alt="sate" class="w-40 h-auto md:w-56 lg:w-64">
        </div>
        <div class="text-sm md:text-base leading-relaxed text-black">
            <p class="mb-6">
                Di Desate, kami menggabungkan makanan lezat dengan keramahan hangat. Dekorasi tradisional Indonesia dan staf yang ramah menciptakan suasana yang menyambut, sementara dapur terbuka kami memungkinkan Anda menikmati aroma sate yang baru dipanggang.
            </p>
            <p class="mb-6">
                Kualitas adalah prioritas utama kami di Desate. Kami memastikan standar tertinggi dalam pemilihan bahan dan proses memasak kami, sehingga Anda dapat menikmati hidangan yang lezat dan sehat setiap kali berkunjung.
            </p>
            <p>
                Kami bangga menjadi bagian dari komunitas Batam dan aktif berpartisipasi dalam acara-acara lokal serta inisiatif sosial. Di Desate, kami percaya dalam memberikan kembali dan membuat dampak positif melalui kecintaan kami pada makanan yang lezat. Terima kasih telah memilih Desate. Kami menantikan untuk melayani Anda dan membagikan kebahagiaan melalui sate autentik Indonesia.
            </p>
        </div>
    </div>
</div>
@endsection
