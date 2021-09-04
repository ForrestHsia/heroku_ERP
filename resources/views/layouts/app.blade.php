
<!-- resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel='stylesheet' type='text/css' href='css/app.css'/>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
        app.blade測試文字，來自app.blade
    </body>
</html>