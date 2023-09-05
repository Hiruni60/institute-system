<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <title>student dashboard </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/js/app.js')

</head>

<body>

    

<div class="container">

    @yield('content')

</div>

    

</body>

</html>