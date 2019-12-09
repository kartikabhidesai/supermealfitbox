<!--===============================================================================================-->	
<script src="{{ url('public/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ url('public/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ url('public/vendor/bootstrap/js/popper.js') }}"></script>
<script src="{{ url('public/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ url('public/vendor/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ url('public/vendor/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ url('public/vendor/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ url('public/vendor/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ url('public/vendor/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ url('public/vendor/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ url('public/vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ url('public/vendor/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ url('public/vendor/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ url('public/vendor/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ url('public/vendor/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ url('public/js/revo-custom.js') }}"></script>

<script src="{{ url('public/js/toastr.min.js') }}" type="text/javascript"></script>
<script src="{{ url('public/js/comman_function.js') }}" ></script>
<script src="{{ url('public/js/bootstrap-datepicker.min.js') }}" ></script>
<!--===============================================================================================-->
<script src="{{ url('public/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ url('public/vendor/daterangepicker/moment.min.js') }}"></script>
<script src="{{ url('public/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ url('public/vendor/slick/slick.min.js') }}"></script>
<script src="{{ url('public/js/slick-custom.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ url('public/vendor/parallax100/parallax100.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ url('public/vendor/lightbox2/js/lightbox.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ url('public/vendor/isotope/isotope.pkgd.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ url('public/vendor/sweetalert/sweetalert.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ url('public/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ url('public/js/main.js') }}"></script>

@if (!empty($pluginjs)) 
@foreach ($pluginjs as $value) 
<script src="{{ url('public/js/customjs/'.$value) }}" type="text/javascript"></script>
@endforeach
@endif
@if (!empty($js)) 
@foreach ($js as $value) 
<script src="{{ url('public/js/customjs/'.$value) }}" type="text/javascript"></script>
@endforeach
@endif



<script>
jQuery(document).ready(function () {
@if (!empty($funinit))
@foreach ($funinit as $value)
        {{ $value }}
@endforeach
@endif
});
</script>