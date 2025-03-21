<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    @include('partials.nav')

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>&copy; 2025 Laravel App</p>
    </footer>
</body>
</html>
