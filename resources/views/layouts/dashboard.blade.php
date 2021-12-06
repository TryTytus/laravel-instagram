<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <style>
        * {
            margin: 0;
            padding: 0;
        }
        html, body {
            background-color: #FAFAFA;
            height: 100% !important;
        }
    </style>
</head>

<body class="bg-gray-100">
    @include('blocs.header')

    @yield('content')


</body>


</html>
