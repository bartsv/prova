<!DOCTYPE html>


<html lang="en">
    <head>
        <title>Laravel Quickstart - Basic</title>

        <!-- CSS And JavaScript -->
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Navbar Contents -->
            </nav>
        </div>

        @yield('content', View::make('layouts.tasks'))
        @yield('list', View::make('layouts.list'))

    </body>
</html>
