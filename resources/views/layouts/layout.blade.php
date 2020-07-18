<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    @yield('script1')
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

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">

</head>

<body>
    @include('layouts.header')
    @yield('content')
    @yield('script')
</body>

</html>
