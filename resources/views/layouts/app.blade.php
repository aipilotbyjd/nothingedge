<!doctype html>
<html lang="en-US">

<head>

    <title>{{ config('app.name') }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="HandheldFriendly" content="true">
    <meta name="author" content="bslthemes" />

    <!-- Fonts -->
    @include('partials.fonts')

    <!-- CSS STYLES -->
    @include('partials.css')

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body>

    <!-- Page -->
    <div class="onovo-page footer--fixed">

        <!-- Preloader -->
        @include('partials.preloader')

        <!-- Header -->
        @include('partials.header')
        <!-- Wrapper -->
        <div class="wrapper">

            @yield('content')

        </div>

        <!-- Footer -->
        @include('partials.footer')

    </div>

    <!-- Scripts -->
    @include('partials.scripts')
    @yield('script')

</body>

</html>
