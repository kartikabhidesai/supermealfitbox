<head>
    <title>Super Meal Fit Box</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->	
    <link rel="icon" type="image/png" href="{{ url('public/images/icons/favicon.png') }}"/>
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
    <!--===============================================================================================-->
    <style>#fontSizeWrapper { font-size: 16px; }

        #fontSize {
            width: 100px;
            font-size: 1em;
        }

        /* ————————————————————–
          Tree core styles
        */
        .tree { margin: 1em; }

        .tree input {
            position: absolute;
            clip: rect(0, 0, 0, 0);
        }

        .tree input ~ ul { display: none; }

        .tree input:checked ~ ul { display: block; }

        /* ————————————————————–
          Tree rows
        */
        .tree li {
            line-height: 1.2;
            position: relative;
            padding: 0 0 1em 1em;
        }

        .tree ul li { padding: 1em 0 0 1em; }

        .tree > li:last-child { padding-bottom: 0; }

        /* ————————————————————–
          Tree labels
        */
        .tree_label {
            position: relative;
            display: inline-block;
            background: #fff;
        }

        label.tree_label { cursor: pointer; }

        label.tree_label:hover { color: #666; }

        /* ————————————————————–
          Tree expanded icon
        */
        label.tree_label:before {
            background: #000;
            color: #fff;
            position: relative;
            z-index: 1;
            float: left;
            margin: 0 1em 0 -2em;
            width: 1em;
            height: 1em;
            border-radius: 1em;
            content: '+';
            text-align: center;
            line-height: .9em;
        }

        :checked ~ label.tree_label:before { content: '–'; }

        /* ————————————————————–
          Tree branches
        */
        .tree li:before {
            position: absolute;
            top: 0;
            bottom: 0;
            left: -.5em;
            display: block;
            width: 0;
            border-left: 1px solid #777;
            content: "";
        }

        .tree_label:after {
            position: absolute;
            top: 0;
            left: -1.5em;
            display: block;
            height: 0.5em;
            width: 1em;
            border-bottom: 1px solid #777;
            border-left: 1px solid #777;
            border-radius: 0 0 0 .3em;
            content: '';
        }

        label.tree_label:after { border-bottom: 0; }

        :checked ~ label.tree_label:after {
            border-radius: 0 .3em 0 0;
            border-top: 1px solid #777;
            border-right: 1px solid #777;
            border-bottom: 0;
            border-left: 0;
            bottom: 0;
            top: 0.5em;
            height: auto;
        }

        .tree li:last-child:before {
            height: 1em;
            bottom: auto;
        }

        .tree > li:last-child:before { display: none; }

        .tree_custom {
            display: block;
            background: #eee;
            padding: 1em;
            border-radius: 0.3em;
        }</style>
</head>