<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


    </head>
    <body>

        <header>
            <nav class="bg-gray-700 p-4 text-white">
                <a href="#" class="uppercase text-3xl float-left hover:text-gray-300 ">blog</a>

                <ul class="flex flex-row justify-end items-center float-rig">
                    <li class="p-3 border mx-3"><a href="#">LOGIN</a></li>
                    <li class="p-3 border mx-3"><a href="#">Add new article</a></li>
                </ul>
            </nav>
        </header>
        

        @yield('content')
    </body>
</html>
