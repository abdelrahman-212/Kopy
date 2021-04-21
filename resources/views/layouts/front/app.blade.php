<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ (app()->getLocale() == 'en') ? 'ltr' : 'rtl' }}">

<head>
    <title>  @yield('title')
    </title>
    @include('layouts.front.head')
</head>


@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="wrapper">

    @include('layouts.front.header')


    <div id="app">
        @yield('content')
    </div>
    @include('layouts.front.footer')

</div>

@include('layouts.front.scripts')

</html>
