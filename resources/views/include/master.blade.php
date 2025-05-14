<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body>


    @include('include.header')
    @yield('body-section')
    @include('include.footer')

</body>

</html>
