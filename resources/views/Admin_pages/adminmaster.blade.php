<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Mostafa Mohamed">
    <meta name="keywords" content="au theme template">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title Page-->
    <title>Jessy's Admin</title>
    <!-- Fontfaces CSS-->
    <link href={{ asset("AdminStyles/css/font-face.css") }} rel="stylesheet" media="all" />
    <link href={{ asset("AdminStyles/vendor/mdi-font/css/material-design-iconic-font.min.css") }} rel="stylesheet" media="all" />
    <link href={{ asset("AdminStyles/vendor/font-awesome-4.7/css/font-awesome.min.css") }} rel="stylesheet" media="all" />
    <link href={{ asset("AdminStyles/vendor/font-awesome-5/css/fontawesome-all.min.css") }} rel="stylesheet" media="all" />
    <link href={{ asset("AdminStyles/vendor/bootstrap-4.1/bootstrap.min.css") }} rel="stylesheet" media="all" />
    <link href={{ asset("AdminStyles/vendor/animsition/animsition.min.css") }} rel="stylesheet" media="all" />
    <link href={{ asset("AdminStyles/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css") }} rel="stylesheet" media="all" />
    <link href={{ asset("AdminStyles/vendor/wow/animate.css") }} rel="stylesheet" media="all" />
    <link href={{ asset("AdminStyles/vendor/css-hamburgers/hamburgers.min.css") }} rel="stylesheet" media="all" />
    <link href={{ asset("AdminStyles/vendor/slick/slick.css") }} rel="stylesheet" media="all" />
    <link href={{ asset("AdminStyles/vendor/select2/select2.min.css") }} rel="stylesheet" media="all" />
    <link href={{ asset("AdminStyles/vendor/perfect-scrollbar/perfect-scrollbar.css") }} rel="stylesheet" media="all" />
    @yield('custom_style')
    <link href={{ asset("AdminStyles/css/theme.css") }} rel="stylesheet" media="all" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>

<body class="animsition">
<div class="page-wrapper">
    @if(Auth::guard('admin')->check())
        <aside class="menu-sidebar2">
            @include('Admin_pages.sidebar')
        </aside>
        <!-- END MENU SIDEBAR-->
        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                @include('Admin_pages.header')
            </header>
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                @include('Admin_pages.sidebar')
            </aside>
            <!-- END HEADER DESKTOP-->
        @yield('content')

        <!-- END PAGE CONTAINER-->
        </div>
    @else
    @yield('content')
@endif
    <!-- MENU SIDEBAR-->

</div>

<!-- Jquery JS-->
<script src=" {{ asset("AdminStyles/vendor/jquery-3.2.1.min.js") }}"></script>
<script src=" {{ asset("AdminStyles/vendor/bootstrap-4.1/popper.min.js") }}"></script>
<script src=" {{ asset("AdminStyles/vendor/bootstrap-4.1/bootstrap.min.js") }}"></script>
<script src=" {{ asset("AdminStyles/vendor/slick/slick.min.js") }}"></script>
<script src=" {{ asset("AdminStyles/vendor/wow/wow.min.js") }}"></script>
<script src=" {{ asset("AdminStyles/vendor/animsition/animsition.min.js") }}"></script>
<script src=" {{ asset("AdminStyles/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js") }}"></script>
<script src=" {{ asset("AdminStyles/vendor/counter-up/jquery.waypoints.min.js") }}"></script>
<script src=" {{ asset("AdminStyles/vendor/counter-up/jquery.counterup.min.js") }}"></script>
<script src=" {{ asset("AdminStyles/vendor/circle-progress/circle-progress.min.js") }}"></script>
<script src=" {{ asset("AdminStyles/vendor/perfect-scrollbar/perfect-scrollbar.js") }}"></script>
<script src=" {{ asset("AdminStyles/vendor/chartjs/Chart.bundle.min.js") }}"></script>
<script src=" {{ asset("AdminStyles/vendor/select2/select2.min.js") }}"></script>

@yield('custom_js')

<!-- Main JS-->
<script src=" {{ asset("AdminStyles/js/main.js") }}"></script>
<script type="text/javascript">
    @yield('jscode')
</script>
</body>

</html>
<!-- end document-->