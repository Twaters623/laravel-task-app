<!DOCTYPE html>
<html lang="en">
    <head>
<meta charset="UTF-8" />
<meta name = "viewport" content ="width=device-width, inital-scale=1.0"/>
<title>Laravel Task App</title>
@vite(['resources/css/app.css'])

    </head>
    <body class="bg-gray-100">
<nav class="bg-white shadow p-4 flex margin-auto">
<h1 class="text-xl font-bold text-purple-600">Taskie:</h1>
<h1 class="text-l font-bold text-purple-600 ">Where productivity equals simplicity.</h1>
</nav>
<main class="p-4">
    @yield('content')
</main>
@vite('resources/js/app.js')

    </body>
</html>