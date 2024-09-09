<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
</head>

<body>
    @include('components.header')

    @yield('content')

    @include('components.footer')
    <script src="{{ asset('js/login.js') }}"></script>
    <script src="{{ asset('js/mobile-nav.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
