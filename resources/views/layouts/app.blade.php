
<!-- resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel='stylesheet' type='text/css' href='/css/app.css'/>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    </head>
    <body>
        @include('layouts.js')
        @yield('content')
        @section('inline_js')
        @show
    </body>
</html>