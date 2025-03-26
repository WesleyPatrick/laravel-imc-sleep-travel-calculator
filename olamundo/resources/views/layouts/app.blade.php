<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Calculadoras')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/global.css', 'resources/css/welcome.css', 'resources/css/forms.css'])
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
    @yield('styles')
</head>

<body>
    <div class="container">
        @yield('content')

        <footer class="mt-8 text-center">
            <a href="{{ route('home') }}" class="btn">← Voltar para Home</a>
        </footer>
    </div>
</body>

</html>