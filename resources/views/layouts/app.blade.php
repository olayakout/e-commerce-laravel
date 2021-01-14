<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
{{-- include use for static component which will not be change from page to another --}}
<head>
@include('includes.head')
</head>

<body>
    <div id="app">

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        @include('includes.humberger_menu')
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        @include('includes.header')
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        @include('includes.hero')
    </section>
    <!-- Hero Section End -->
    @yield('content')    
</div>
    <!-- Footer Section Begin -->
    <footer class="footer spad">
        @include('includes.footer')
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    @include('includes.script')


</body>

</html>