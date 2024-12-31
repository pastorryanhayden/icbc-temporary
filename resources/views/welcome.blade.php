<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark">
    <title>Indian Creek Baptist Camp</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.scss', 'resources/js/app.js'])

</head>

<body>
    @include('includes._dialog')
    <main>
    @include('includes._hero')
    @include('includes._camps')
    @include('includes._how')
    @include('includes._essential')
    @include('includes._footer')

</main>



</body>

</html>
