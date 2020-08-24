<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('user.layouts.head')
    @stack('css')
</head>
<body class=" bg-gray-200">
    <div id="load-Box" class=" fixed top-0 left-0 w-full h-full bg-white z-2max flex items-center justify-center">
        <div class=" loading-box">
            <div class=" loading-bar bar-1"></div>
            <div class=" loading-bar bar-2"></div>
            <div class=" loading-bar bar-3"></div>
            <div class=" loading-bar bar-4"></div>
        </div>
        <div class=" absolute top-0 left-0 w-full h-full flex items-center justify-center">
            <img src="{{ asset('images/logo-3.svg') }}" class=" w-32" alt="">
        </div>
    </div>
    <div id="app">

        <x-navigation/>

        @yield('content')

        <x-footer/>
    </div>



    @include('user.layouts.script')
</body>
</html>
