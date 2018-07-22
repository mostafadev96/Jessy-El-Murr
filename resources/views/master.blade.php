<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
          integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href={{ asset("css/owl.carousel.min.css") }} rel="stylesheet"/>
    <link href={{ asset("css/owl.theme.default.min.css") }} rel="stylesheet"/>
    <link href={{ asset("css/app.css") }} rel="stylesheet"/>
    <link href={{ asset("css/style.min.css") }} rel="stylesheet"/>
    <link href={{ asset("css/home.css") }} rel="stylesheet"/>
    <link href={{ asset("css/pagination.css") }} rel="stylesheet"/>
    @yield('custom-style')
    <style>
    </style>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>

    <title>Jessy ElMurr</title>
</head>
<body style="font-family: Lato ;font-size: larger;">
@include('navbar')
@yield('content')
@include('footer')

{{--@include('footer')--}}
<script src=" {{ asset("js/jquery-3.3.1.js") }}"></script>
<script src=" {{ asset("js/owl.carousel.min.js") }}"></script>
<script src=" {{ asset("js/bootstrap.min.js") }}"></script>
@yield('custom-src')
<script src=" {{ asset("js/home.js") }}"></script>

</body>
</html>
