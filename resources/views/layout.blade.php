<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jobstickle</title>
        @livewireStyles
        
    </head>
    <body>
        <h1>Jobstickle</h1>
        {{-- Output--}}
        {{-- @yield('content', $slot) --}}
        {{ $slot }}

        @livewireScripts
    </body>
</html>
