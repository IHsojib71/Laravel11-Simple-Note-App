<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Note App</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">

    @include('layouts.navbar')

    <div class="m-12">
        @session('success')
            <div class="p-4 bg-green-200 animate-bounce rounded-lg">
                {{ $value }}
            </div>
        @endsession
        @session('error')
            <div class="p-4 bg-red-200 animate-bounce rounded-lg">
                {{ $value }}
            </div>
        @endsession
    </div>

    <div class="lg:m-12 md:m-10 sm:m-4 rounded-lg bg-gradient-to-r from-indigo-200 via-purple-300 to-pink-200">

        {{ $slot }}
    </div>

</body>

</html>
