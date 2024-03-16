<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body>

    <div class="m-8 rounded-lg bg-gradient-to-r from-indigo-200 via-purple-300 to-pink-200 ">
        <h1 class="text-4xl text-center pt-8 capitalize">Laravel 11 Note App</h1>
        {{ $slot }}
    </div>

</body>

</html>
