<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Example ZZZ</title>

        @vite('resources/css/app.css')
    </head>
    <body class="font-sans antialiased text-center">
        {{ $slot }}
    </body>
</html>