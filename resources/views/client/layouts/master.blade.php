<!DOCTYPE html>
<html lang="en-us">
<head>
    @include('client.layouts.partials.head')
</head>
<body>
    <!-- navigation -->
    <header class="navigation fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-white">
                @include('client.layouts.partials.nav')
            </nav>
        </div>
    </header>
    <!-- /navigation -->

    <!-- start of banner -->
    <div class="banner text-center">
        @include('client.layouts.partials.banner')
    </div>
    <!-- end of banner -->

    @yield('content')

    <footer class="footer">
        @include('client.layouts.partials.footer')
    </footer>

    @include('client.layouts.partials.js')
</body>
</html>
