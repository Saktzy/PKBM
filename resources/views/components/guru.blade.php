<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Annex - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Mannatthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="{{ url('public/guru/assets/images/favicon.ico') }}">

    <link href="{{ url('public/guru/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('public/guru/assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('public/guru/assets/css/style.css') }}" rel="stylesheet" type="text/css">

</head>


<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        <x-guru.layout.sidebar />
        <!-- Left Sidebar End -->

        <!-- Start right Content here -->

        <div class="content-page">
            <!-- Start content -->
            <div class="content">

                <!-- Top Bar Start -->
                <x-guru.layout.headbar />
                <!-- Top Bar End -->

                <div class="page-content-wrapper ">

                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <div class="btn-group float-right">
                                        <ol class="breadcrumb hide-phone p-0 m-0">
                                            <li class="breadcrumb-item"><a href="#">Annex</a></li>
                                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                            <li class="breadcrumb-item active">starter</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">starter</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title end breadcrumb -->

                    </div><!-- container -->

                </div> <!-- Page content Wrapper -->

            </div> <!-- content -->

            <x-guru.layout.footer />

        </div>
        <!-- End Right content here -->

    </div>
    <!-- END wrapper -->


    <!-- jQuery  -->
    <script src="{{ url('public/guru/assets/js/jquery.min.js') }}"></script>
    <script src="{{ url('public/guru/assets/js/popper.min.js') }}"></script>
    <script src="{{ url('public/guru/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('public/guru/assets/js/modernizr.min.js') }}"></script>
    <script src="{{ url('public/guru/assets/js/detect.js') }}"></script>
    <script src="{{ url('public/guru/assets/js/fastclick.js') }}"></script>
    <script src="{{ url('public/guru/assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ url('public/guru/assets/js/jquery.blockUI.js') }}"></script>
    <script src="{{ url('public/guru/assets/js/waves.js') }}"></script>
    <script src="{{ url('public/guru/assets/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ url('public/guru/assets/js/jquery.scrollTo.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ url('public/guru/assets/js/app.js') }}"></script>

</body>

</html>
