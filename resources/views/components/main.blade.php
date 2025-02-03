<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Website</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Vite directive to include compiled CSS -->
    @vite('resources/css/app.css')
</head>

<body class="font-sans bg-gray-100">

    <!-- Include the header component -->
    @include('components.header')
    <main class="mt-24">
        @yield('content')
    </main>
    <!-- Include the footer component -->
    @include('components.footer')

</body>

</html>
