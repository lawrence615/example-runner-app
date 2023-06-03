<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@yield('title')</title>


<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

<!-- font awesome  -->
<!-- <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}"> -->

<!--load all Font Awesome styles -->
<link href="{{ asset('css/all.css') }}" rel="stylesheet">

<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
</style>
