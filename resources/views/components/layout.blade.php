<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Rozha+One&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default Title')</title>
</head>
<body class="h-full overflow-hidden">
    <div class="min-h-full relative">
        <x-navbar></x-navbar>
        <div class="relative h-screen overflow-hidden">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/img/bg.jpg'); background-position: center top;">
                <div class="absolute inset-0 bg-gradient-to-b from-white to-transparent"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
