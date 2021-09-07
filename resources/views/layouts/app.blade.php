
<!-- resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>App Name - @yield('title')</title>
        <!-- <link rel='stylesheet' type='text/css' href='/css/all.min.css'/> -->
        <link rel='stylesheet' type='text/css' href='/css/app.css'/>
        <!-- <link rel='stylesheet' type='text/css' href='/css/show.scss'/> -->

        <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js"></script>
        <script src="/js/app.js"></script>
    </head>
    <body>
        @include('layouts.js')
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>