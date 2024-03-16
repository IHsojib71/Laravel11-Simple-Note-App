<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/css/app.css')
</head>

<body>
    @session('success')
        <div class="p-4 bg-green-200 animate-bounce">
            {{ $value }}
        </div>
    @endsession
    @session('error')
        <div class="p-4 bg-red-200 animate-bounce">
            {{ $value }}
        </div>
    @endsession
    <div class="m-12 rounded-lg bg-gradient-to-r from-indigo-200 via-purple-300 to-pink-200 ">
        <h1 class="text-4xl text-center pt-8 capitalize">Laravel 11 Note App</h1>
        {{ $slot }}
    </div>

</body>

</html>
