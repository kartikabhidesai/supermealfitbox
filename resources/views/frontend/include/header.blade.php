<head>
    <title>Super Meal Fit Box</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('public/images/logo-fitbox.png') }}" sizes="4x4">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/fonts/linearicons-v1.0.0/icon-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href="{{ url('public/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href="{{ url('public/vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/vendor/slick/slick.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/vendor/lightbox2/css/lightbox.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/vendor/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/vendor/revolution/css/navigation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/vendor/revolution/css/settings.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/main.css') }}">
    <link href="{{ url('public/css/toastr.min.css') }}" rel="stylesheet">
    <!--===============================================================================================-->
    <script>
        var baseurl = "{{ asset('/') }}";
    </script>
    @if (!empty($plugincss)) 
    @foreach ($plugincss as $value) 
    @if(!empty($value))
    <link rel="stylesheet" href="{{ url('public/css/plugins/'.$value) }}">
    @endif
    @endforeach
    @endif
    @if (!empty($css)) 
    @foreach ($css as $value) 
    @if(!empty($value))
    <link rel="stylesheet" href="{{ url('public/'.$value) }}">
    @endif
    @endforeach
    @endif
</head>