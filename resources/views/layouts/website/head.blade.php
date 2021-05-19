<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="Chernyh Mihail" name="author">
    <meta content="Spedito - All in one place" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=no">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">

    <link rel="shortcut icon" href="{{asset('website-assets/img/favicon.png')}}" type="image/x-icon">
    <link href="{{asset('website2-assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('website2-assets/vendor/slick/slick.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('website2-assets/vendor/slick/slick-theme.min.css')}}" />
    <link href="{{asset('website2-assets/vendor/icons/feather.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('website2-assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('website2-assets/vendor/sidebar/demo.css')}}" rel="stylesheet">
    <link href="{{asset('website2-assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('website-assets/css/uikit.min.css')}}">
    <link rel="stylesheet" href="{{asset('website-assets/css/main.css')}}">
    <link id="dm-light" rel="stylesheet" href="{{asset('website-assets/css/light.css')}}">
    <link id="dm-dark" rel="stylesheet" href="{{asset('website-assets/css/dark.css')}}" disabled="true">
    <!-- Flag Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" integrity="sha512-Cv93isQdFwaKBV+Z4X8kaVBYWHST58Xb/jVOcV9aRsGSArZsgAnFIhMpDoMDcFNoUtday1hdjn0nGp3+KZyyFw==" crossorigin="anonymous" />
    <!-- Bootstrap RTL -->
    @if(app()->getLocale() == 'ar')
        <link
            rel="stylesheet"
            href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css"
            integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe"
            crossorigin="anonymous" />
        <link id="dm-light" rel="stylesheet" href="{{asset('website-assets/css-rtl/style.css')}}">
    @endif
    @yield('styles')
    <style>
        body{
            overflow-x: hidden;
        }
    </style>
</head>
