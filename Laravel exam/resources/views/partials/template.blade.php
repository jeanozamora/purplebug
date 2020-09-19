<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>
    @livewireStyles

</head>
<body class="bg-gray-100">
    @include('partials.header')

    @yield('content')

    {{-- @include('partials.footer') --}}
    
    @livewireScripts

</body>
</html>