<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    @vite('resources/css/app.css')
</head>
<body class="h-full">
<header class="text-white bg-indigo-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a href="{{ route('home') }}" class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
            <img src="{{ asset('android-chrome-512x512.png') }}" alt="" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full">
            <span class="ml-3 text-xl">Auto schools</span>
        </a>
        <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
            <a href="/schools" class="mr-5 hover:text-white">Auto schools</a>
            <a href="/instructors" class="mr-5 hover:text-white">Instructors</a>
        </nav>
    </div>
</header>

<div>
    @yield('content')
</div>

</body>
</html>
