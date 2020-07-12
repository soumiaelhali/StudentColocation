<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    @yield('style')
    <link rel="icon" href={{asset("img/favicon.png")}}>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href={{asset("css/bootstrap.min.css")}}>
    <!-- animate CSS -->
    <link rel="stylesheet" href={{asset("css/animate.css")}}>
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href={{asset("css/owl.carousel.min.css")}}>
    <!-- themify CSS -->
    <link rel="stylesheet" href={{asset("css/themify-icons.css")}}>
    <!-- flaticon CSS -->
    <link rel="stylesheet" href={{asset("css/flaticon.css")}}>
    <!-- magnific-popup CSS -->
    <link rel="stylesheet" href={{asset("css/magnific-popup.css")}}>
    <!-- font awesome CSS -->
    <link rel="stylesheet" href={{asset("fontawesome/css/all.min.css")}}>
    <!-- style CSS -->
    <link rel="stylesheet" href={{asset("css/style.css")}}>
</head>

<body>
    @include('layouts.header')
    @yield('content')
</body>

</html>
