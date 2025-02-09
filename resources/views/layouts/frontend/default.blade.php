<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('includes.frontend.head')

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    @include('includes.frontend.navbar')
    @yield('content')
    @include('includes.frontend.footer')
</body>

</html>
