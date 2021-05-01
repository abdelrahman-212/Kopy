<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="Chernyh Mihail" name="author">
    <meta content="Spedito - All in one place" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=no">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">

    <link rel="shortcut icon" href="{{asset('website-assets/images/favicon.png')}}" type="image/x-icon">
    <link href="{{asset('website2-assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('website2-assets/vendor/slick/slick.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('website2-assets/vendor/slick/slick-theme.min.css')}}" />
    <link href="{{asset('website2-assets/vendor/icons/feather.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('website2-assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('website2-assets/vendor/sidebar/demo.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('website-assets/img/favicon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('website-assets/css/uikit.min.css')}}">
    <link rel="stylesheet" href="{{asset('website-assets/css/main.css')}}">
    <link id="dm-light" rel="stylesheet" href="{{asset('website-assets/css/light.css')}}">
    <link id="dm-dark" rel="stylesheet" href="{{asset('website-assets/css/dark.css')}}" disabled="true">
    @yield('styles')
</head>
