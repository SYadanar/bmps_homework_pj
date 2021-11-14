<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zay Shop - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{ url('website/assets/img/apple-icon.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('website/assets/img/favicon.ico') }}">

    <link rel="stylesheet" href="{{ url('website/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('website/assets/css/templatemo.css') }}">
    <link rel="stylesheet" href="{{ url('website/assets/css/custom.css') }}">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{ url('website/assets/css/fontawesome.min.css') }}">
    <!--
        TemplateMo 559 Zay Shop
        https://templatemo.com/tm-559-zay-shop
    -->

    @yield('css')

</head>

<body>
    @include('website.layouts.header')

    @include('website.layouts.modal')




    @yield('content')




    @include('website.layouts.footer')

    <!-- Start Script -->
    <script src="{{ url('website/assets/js/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ url('website/assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ url('website/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('website/assets/js/templatemo.js') }}"></script>
    <script src="{{ url('website/assets/js/custom.js') }}"></script>
    <!-- End Script -->

    @yield('js')
</body>

</html>
