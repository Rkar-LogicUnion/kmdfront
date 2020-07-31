<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('user.layouts.head')
    @stack('css')
</head>
<body>
    <div id="app">

        <x-navigation/>

        @yield('content')

        <x-footer/>
    </div>

    @include('user.layouts.script')

</body>
</html>
