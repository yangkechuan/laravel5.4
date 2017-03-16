<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
    <!--Theme -->
    <link rel="stylesheet" type="text/css" href="{{url('css/AdminLTE.css')}}">
    <!--iCheck -->
    <link rel="stylesheet" type="text/css" href="{{url('plugins/iCheck/square/blue.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="{{url('dist/css/AdminLTE.css')}}">
    <!-- AdminLET Skins -->
    <link rel="stylesheet" type="text/css" href="{{url('dist/css/skins/_all-skins.css')}}">
    <!--Messenger-->
    <link rel="stylesheet" type="text/css" href="{{url('css/messenger.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/messenger-theme-future.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/messenger-theme-block.css')}}">

    <!--SweetAlert-->
    <link rel="stylesheet" type="text/css" href="{{url('css/sweetalert.css')}}">

    <!--jQuery-->
    <script  src="{{url('js/jquery-2.2.3.min.js')}}"></script>
    <!--Bootstrap-->
    <script  src="{{url('js/bootstrap.js')}}"></script>
    <!--iCheck-->
    <script src="{{url('plugins/iCheck/icheck.js')}}"></script>

    <!--Messenger-->
    <script src="{{url('js/messenger.js')}}"></script>


    <!--SweetAlert-->
    <script src="{{url('js/sweetalert.min.js')}}"></script>

    <!-- FastClick -->
    <script src="{{url('plugins/fastclick/fastclick.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{url('dist/js/app.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{url('dist/js/demo.js')}}"></script>
    <title>@yield('title')</title>
</head>