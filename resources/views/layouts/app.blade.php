<html style="height: auto; min-height: 100%;"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>JuniorLTE 2 | by mindazub</title>
    <!-- Tell the browser to be responsive to screen width -->
{{--    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">--}}
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style type="text/css">.backpack.dropzone {
            font-family: 'SF UI Display', 'Segoe UI';
            font-size: 15px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 250px;
            height: 150px;
            font-weight: lighter;
            color: white;
            will-change: right;
            z-index: 2147483647;
            bottom: 20%;
            background: #333;
            position: fixed;
            user-select: none;
            transition: left .5s, right .5s;
            right: 0px; }
        .backpack.dropzone .animation {
            height: 80px;
            width: 250px;
            background: url("chrome-extension://lifbcibllhkdhoafpjfnlhfpfgnpldfl/assets/backpack/dropzone/hoverstate.png") left center; }
        .backpack.dropzone .title::before {
            content: 'Save to'; }
        .backpack.dropzone.closed {
            right: -250px; }
        .backpack.dropzone.hover .animation {
            animation: sxt-play-anim-hover 0.91s steps(21);
            animation-fill-mode: forwards;
            background: url("chrome-extension://lifbcibllhkdhoafpjfnlhfpfgnpldfl/assets/backpack/dropzone/hoverstate.png") left center; }

        @keyframes sxt-play-anim-hover {
            from {
                background-position: 0px; }
            to {
                background-position: -5250px; } }
        .backpack.dropzone.saving .title::before {
            content: 'Saving to'; }
        .backpack.dropzone.saving .animation {
            background: url("chrome-extension://lifbcibllhkdhoafpjfnlhfpfgnpldfl/assets/backpack/dropzone/saving_loop.png") left center;
            animation: sxt-play-anim-saving steps(59) 2.46s infinite; }

        @keyframes sxt-play-anim-saving {
            100% {
                background-position: -14750px; } }
        .backpack.dropzone.saved .title::before {
            content: 'Saved to'; }
        .backpack.dropzone.saved .animation {
            background: url("chrome-extension://lifbcibllhkdhoafpjfnlhfpfgnpldfl/assets/backpack/dropzone/saved.png") left center;
            animation: sxt-play-anim-saved steps(20) 0.83s forwards; }

        @keyframes sxt-play-anim-saved {
            100% {
                background-position: -5000px; } }
    </style></head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="skin-blue layout-top-nav" style="height: auto; min-height: 100%;">
<div class="wrapper" style="height: auto; min-height: 100%;">

    <header class="main-header">
        <nav class="navbar navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="{{ url('/') }}" class="navbar-brand"><b>Junior</b>LTE</a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->

                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">


                        <!-- Navbar Right Menu -->
                        <div class="navbar-custom-menu">



                        </div>


                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="{{ route('login', app()->getLocale()) }}" >
                                <!-- The user image in the navbar-->
                                <img src="/dist/img/usermale.png" class="user-image" alt="User Image">
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">Login</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-custom-menu -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>
    <!-- Full Width Column -->
    <div class="content-wrapper" style="min-height: 284px;">
        <div class="container">
            <!-- Section Content Header (Page header) -->


            <!-- Main content -->
            <section class="content">

                <div class="box box-default">

                    <div class="box-body">

                        @yield('content')

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="container">
            <div class="pull-right hidden-xs">
                <b>Version</b> beta-0.0.1
            </div>
            <strong>Copyright © 2019 <a href="http://www.azubalis.lt">mindazub</a>.</strong> All rights
            reserved.
        </div>
        <!-- /.container -->
    </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script async="" src="//www.google-analytics.com/analytics.js"></script><script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>


</body></html>
