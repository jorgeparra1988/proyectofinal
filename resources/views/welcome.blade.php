<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Proyecto</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">



        @livewireStyles
    </head>
    <body>
        @yield('content')
        @livewireScripts
    </body>
</html>
