<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Logbook' }}</title>
</head>
    <body>
        <header>
            @include('partials.header')
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            @include('partials.footer')
        </footer>
    </body>
</html>
