<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'UFO Spot Nederland')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-ufo-dark text-ufo-grey font-sans antialiased">

    @include('components.header')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>