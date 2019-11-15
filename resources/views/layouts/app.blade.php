<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{ asset('css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app_style.css') }}" rel="stylesheet">

    <!-- Data tables -->
    <link href="{{ asset('css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/dataTables/select.dataTables.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/dataTables/select.dataTables.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/footable/footable.core.css') }}" rel="stylesheet">

    <!-- Chosen -->
    <link href="{{ asset('/css/plugins/chosen/bootstrap-chosen.css') }}" rel="stylesheet">

    <!-- Sweet Alert -->
    <link href="{{ asset('css/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">

    <!-- jsTree -->
    <link href="{{ asset('css/themes/default/style.css') }}" rel="stylesheet">

    <!-- daterangepicker -->
    <link href="{{ asset('css/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datepicker3.css') }}" rel="stylesheet">

    <link href="{{ asset('css/plugins/blueimp/css/blueimp-gallery.min.css') }}" rel="stylesheet">

    @include('Partials/includesJs')
    @include('Partials/jsFunctions')

</head>

<body class="md-skin fixed-sidebar fixed-nav ">
<div id="wrapper">
    <!-- sidebar-->
    @include('Partials/sidebar')


    <div id="page-wrapper" class="gray-bg">

        <!-- top navbar-->
        @include('Partials/header')

        <div class="wrapper wrapper-content ">
            @yield('content')
        </div>

        <!-- footer -->
        @include('Partials/footer')

    </div>
</div>
@stack('scripts')

</body>
</html>
