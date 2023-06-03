<!doctype html>
<html lang="en">

<head>
    @include('includes.head')

    @yield('styles')
</head>

<body>
    <div class="col-lg-8 mx-auto p-3 py-md-5">

        <main>
            @yield('content')
        </main>

        <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

        @yield('scripts')

    </div>
</body>

</html>
