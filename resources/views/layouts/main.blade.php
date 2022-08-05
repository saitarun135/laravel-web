<! DOCKTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css')}}" >
        <link rel="stylesheet" href="{{ asset('frontend/js/bootstrap.bundle.min.js')}}" >
    </head>

    <body>
        <div>
            @yield('content')
        </div>

    </body>

    </html>
