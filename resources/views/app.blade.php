<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" property="og:title" content="{{ config('app.name', 'Ana Paiva') }}">
    <meta name="description" property="og:description"
        content="Ana Paiva is an interior designer renowned for her ability to seamlessly blend functionality with aesthetic appeal in every project.">
    <meta name="image" property="og:image" content="{{ asset('/imgs/icons/icon-logo.svg') }}">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" href="/imgs/icons/icon-logo.svg">
    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<body class="antialiased">
    @inertia
</body>

</html>
