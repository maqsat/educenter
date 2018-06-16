<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/material-lite/assets/images/favicon.png">
    <title>Material Pro Admin Template - The Most Complete & Trusted Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="/material-lite/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="/material-lite/assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="/material-lite/assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="/material-lite/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="/material-lite/assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/material-lite/lite/css/style.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="/material-lite/lite/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
    </svg>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    @include('layouts.header')
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    @include('layouts.navbar')
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 col-8 align-self-center">
                    <?php
                        $route_name_copy = $route_name;
                        if(isset($_GET['group'] )) $route_name = $route_name.'.student';
                        if(isset($_GET['cathedra'] )) $route_name = $route_name.'.teachers';
                    ?>
                    <h3 class="text-themecolor">{{ trans('app.'.$route_name) }}</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Главная</a></li>
                        @if(isset($second_route_name))
                            <li class="breadcrumb-item"><a href="javascript:void(0)">{{ trans('app.'.$second_route_name) }}</a></li>
                        @endif
                        <li class="breadcrumb-item active">{{ trans('app.'.$route_name) }}</li>
                    </ol>
                    <?php
                        $route_name= $route_name_copy ;
                    ?>
                </div>
                <div class="col-md-7 col-4 align-self-center">
                    @if(Auth::check())
                    <a href="/{{ $route_name }}/create?@if(isset($_GET['group']))group={{ $_GET['group'] }}@elseif(isset($_GET['cathedra']))cathedra={{ $_GET['cathedra'] }} @endif" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"> Добавить</a>
                    @endif
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <!-- Row -->
            <div class="row">
                @yield('content')
            </div>

            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer"> © 2018 BG Pro. Разработка и поддержка системы управление обучением</footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="/material-lite/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="/material-lite/assets/plugins/bootstrap/js/tether.min.js"></script>
<script src="/material-lite/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="/material-lite/lite/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="/material-lite/lite/js/waves.js"></script>
<!--Menu sidebar -->
<script src="/material-lite/lite/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="/material-lite/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<!--Custom JavaScript -->
<script src="/material-lite/lite/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!-- chartist chart -->
<script src="/material-lite/assets/plugins/chartist-js/dist/chartist.min.js"></script>
<script src="/material-lite/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
<!--c3 JavaScript -->
<script src="/material-lite/assets/plugins/d3/d3.min.js"></script>
<script src="/material-lite/assets/plugins/c3-master/c3.min.js"></script>
<!-- Chart JS -->
<script src="/material-lite/lite/js/dashboard1.js"></script>
</body>

</html>
