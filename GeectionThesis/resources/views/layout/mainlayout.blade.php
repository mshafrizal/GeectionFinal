<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.partials.head')
</head>
<body>
    @include('layout.partials.navigation')

    @yield('content')

    @include('layout.partials.footer')

    @include('layout.partials.footerscript')
</body>
</html>