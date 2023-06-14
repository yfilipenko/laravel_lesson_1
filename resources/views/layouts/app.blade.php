<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        @vite('resources/css/app.css')
        <title>@yield('title')</title>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
