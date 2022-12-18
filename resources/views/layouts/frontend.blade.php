<!DOCTYPE html>
<html dir="ltr" lang="en">
    @include('frontend.manager.header')
<body class="boxed" data-bg-img="{{ url('public/frontend') }}/img/bg-pattern.png">

    <!-- Preloader Start -->
    {{-- <div id="preloader">
        <div class="preloader bg--color-1--b" data-preloader="1">
            <div class="preloader--inner"></div>
        </div>
    </div> --}}
    <!-- Preloader End -->

    <div class="wrapper">
        
        @include('frontend.manager.navbar')

        @yield('main')

        @include('frontend.manager.footer')
    </div>
    <!-- Wrapper End -->

        @include('frontend.manager.sticky')

   

    <!-- Back To Top Button Start -->
    <div id="backToTop">
        <a href="#"><i class="fa fa-angle-double-up"></i></a>
    </div>
    <!-- Back To Top Button End -->

   @include('frontend.manager.link.js')

</body>
</html>
