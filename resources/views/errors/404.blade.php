@extends('layouts.error')
@section('title', '404')

@section('scripts')
<style type="text/css">
    body {
        margin-top: 150px;
        /* background-color: #C4CCD9; */
    }

    .error-main {
        background-color: #fff;
        box-shadow: 0px 10px 10px -10px #5D6572;
    }

    .error-main h1 {
        font-weight: bold;
        color: #444444;
        font-size: 100px;
        text-shadow: 2px 4px 5px #6E6E6E;
    }

    .error-main h6 {
        color: #42494F;
    }

    .error-main p {
        color: #9897A0;
        font-size: 14px;
    }
</style>
@endsection

@section('content')
<div class="row text-center">
    <div class="col-lg-6 offset-lg-3 col-sm-6 offset-sm-3 col-12 p-3 error-main bg-light">
        <div class="row">
            <div class="col-lg-8 col-12 col-sm-10 offset-lg-2 offset-sm-1">
                <h1 class="m-0">404</h1>
                <h6>Page not found - Example Runner App</h6>
                <p>Oops. Nothing here...</p>
                <a href="{{ route('home') }}" class="btn btn-outline-info">Go Home</a>
            </div>
        </div>
    </div>
</div>
@endsection
