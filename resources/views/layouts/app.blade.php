<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Logbook' }}</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
    <body class="d-flex flex-column min-vh-100">
        <header>
            @include('partials.header')
        </header>

        <main>
            <div class="container mt-4">
                @yield('content')
            </div>
        </main>

        <footer class="mt-auto">
            @include('partials.footer')
        </footer>
    </body>
</html>
