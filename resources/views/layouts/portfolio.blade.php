<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Portfolio - Web Developer')</title>

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">

    <!-- Font Awesome -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">

        <div class="container">

            <a class="navbar-brand" href="{{ route('portfolio.home') }}">Portfolio</a>

            <div>
            <a class="navbar-brand d-inline text-light px-3" href="#about">About</a>
            <a class="navbar-brand d-inline text-light px-3" href="#projects">Projects</a>
            <a class="navbar-brand d-inline text-light px-3" href="#contacts">Contacts</a> 

            </div>

        </div>

    </nav>

    <!-- Main Content -->

    @yield('content')

    <!-- Footer -->

    <footer>

        <div class="container">

            <p>© {{ date('Y') }} Portfolio. Built with Laravel {{ app()->version() }}</p>

        </div>

    </footer>

</body>

</html>