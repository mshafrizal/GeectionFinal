<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.partials.head')
</head>
<body style="background:#f8f8f8;">
    @include('layout.partials.nav')

    @yield('content')

    @include('layout.partials.footer')

    @include('layout.partials.footerscript')
</body>
</html>