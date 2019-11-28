<!DOCTYPE html>
<html lang="en">
    @include('frontend.include.header')
    <body class="animsition">
        @include('frontend.include.bodyheader')
        @yield('content')
        @include('frontend.include.bodyfooter')
        <div class="btn-back-to-top bg0-hov" id="myBtn">
            <span class="symbol-btn-back-to-top">
                <span class="lnr lnr-chevron-up"></span>
            </span>
        </div>
        @include('frontend.include.footer')
    </body>
</html>