<!DOCTYPE html>
<html class="fontawesome-i2svg-active fontawesome-i2svg-complete">

@include('layouts.website.head')

@yield('pageName')

<!-- Loader-->
<div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
<!-- Loader end-->

<div class="page-wrapper">

    @include('layouts.website.header')

    @yield('content')

    @include('layouts.website.footer')

</div>

@include('layouts.website.script')
@yield('scripts')

</body>

</html>
