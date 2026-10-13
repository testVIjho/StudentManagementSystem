<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>
<body class="d-flex flex-column min-vh-100">
 
<!-- Navbar -->
@include('menu.header')
<main class="flex-grow-1">
@yield('main')
</main>

<!-- footer -->
 @include('menu.footer')
</body>
</html>