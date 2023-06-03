<!doctype html>
<html lang="en">

<head>
    @include('includes.head')

    @yield('styles')
</head>

<body>
    <div class="col-lg-8 mx-auto p-3 py-md-5">

        <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
            @include('includes.header')
        </header>

        <main>
            @yield('content')
        </main>

        <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

        @yield('scripts')

        <footer class="pt-5 my-5 text-muted border-top">
            @include('includes.footer')
        </footer>
    </div>
</body>

</html>
