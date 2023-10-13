<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'My Laravel App')</title>
</head>
<body>
    <header>
        <!-- Header content goes here -->
    </header>

    <nav>
        <!-- Navigation menu goes here -->
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Footer content goes here -->
    </footer>
</body>
</html>