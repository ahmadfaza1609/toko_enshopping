<!doctype html>
<html x-data="data()" lang="en">
<head>
    @include('includes.admin.meta')

    <title>@yield('title') | Admin EN-Shopping</title>

    @stack('before-style')

    @include('includes.admin.style')

    @stack('after-style')


</head>
<body id="page-top">
    <div id="wrapper">

        @include('components.admin.sidemenu')

        {{-- content wrapper --}}
        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">
                @include('components.admin.top-menu')

                {{-- page content --}}

                <div class="container-fluid">
                    @yield('content')
                </div>


            </div>

            @include('includes.admin.footer')

        </div>

    </div>


    @stack('before-style')

    @include('includes.admin.script')

    @stack('after-style')
</body>
</html>
