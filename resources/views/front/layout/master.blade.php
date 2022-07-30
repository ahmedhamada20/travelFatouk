<!DOCTYPE html>
<html lang="ar" dir="{{ app()->getLocale()=='ar'?'rtl':'ltr' }}"  lang="{{ app()->getLocale()=='ar'?'rtl':'ltr' }}">
<head>
@include('front.layout.header')
</head>
<body>
<!-- start preloader area -->
<div id="loading">
    <div class="loader"></div>
</div>
<!-- end preloader area -->

<!-- start header area -->
@include('front.layout.navebar')
<!-- end header area -->
@yield('content')

@include('front.layout.footer')
@include('front.layout.footerjs')
</body>
</html>
