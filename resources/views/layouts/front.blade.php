<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.landing.meta')

    <title>@yield('title') | BUMDES Mekar Jaya</title>

    @method('before-style')

    @include('includes.landing.style')

    @method('after-style')

</head>
<body class="bg-light">

    {{-- header --}}
    @include('includes.landing.header')

    {{-- content --}}
    @yield('content')

    {{-- footer --}}
    @include('includes.landing.footer')

    @method('before-script')

    @include('includes.landing.script')

    @method('after-script')
</body>
</html>
