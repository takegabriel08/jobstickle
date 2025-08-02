<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jobstickle</title>
        @livewireStyles
        <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
        <link rel="icon" type="image/png" href="{{ asset('images/favicon.svg') }}">
        
    </head>
    <body class="bg-white dark:bg-gray-900">
        @livewire('header')
        {{-- Output--}}
        {{-- @yield('content', $slot) --}}
        {{ $slot }}

        @livewire('flash-message')
        @livewireScripts
        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    </body>
</html>
