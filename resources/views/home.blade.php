
<!DOCTYPE html>
<html ng-app="reportsApp">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Profiles | Administrator</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="../src/adminlte/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

        <link rel="stylesheet" href="../src/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
        <link rel="stylesheet" href="../src/adminlte/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="../src/adminlte/dist/css/skins/_all-skins.min.css">

        <style>
            .list-group-horizontal .list-group-item {
                display: inline-block;
                margin-bottom: -30px;
                padding: 0px 0px 0px 0px;
            }
           
           
        </style>
        <!--Chart-->

    </head>
    <body class="hold-transition skin-blue sidebar-mini" >

        <div class="wrapper">

            <header class="main-header" >
                <a href="../../index2.html" class="logo" style="background-color: #B96A9A;">
                    <span class="logo-mini"><img src="../src/img/system/profiles.png" style="width: 25px;height: 25px;" ></span>
                    <img src="../src/img/system/profiles.png" style="width: 25px;height: 25px;" >&nbsp;<b>Profiles</b>
                </a>
                <nav class="navbar navbar-static-top" style="background-color: #c9a2b9;">
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="navbar-custom-menu" style="background-color: #c9a2b9">
                        <ul class="nav navbar-nav" >
                            <li class="dropdown user user-menu" >
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                                    <img src="../src/adminlte/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Alexander Pierce</span>
                                </a>
                                <ul class="dropdown-menu" >
                                    <li class="user-header" style="background-color: #B96A9A">
                                        <img src="../src/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                        <p>
                                            Alexander Pierce - Web Developer
                                            <small>Member since Nov. 2012</small>
                                        </p>
                                    </li>
                                    <li class="user-body">
                                        <div class="row">
                                            <div class="col-xs-4 text-center">
                                                <a href="#"></a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#"></a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#"></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <aside class="main-sidebar">
                <section class="sidebar">
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="../src/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>Alexander Pierce</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-area-chart"></i> <span>Reports</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Reports 1</a></li>
                                <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Reports 2</a></li>
                            </ul>
                        </li>


                    </ul>
                </section>
            </aside>

            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Admin</a></li>
                        <li class="active">Reports</li>
                    </ol>
                </section>

                <section class="content">
                    <div class="row">
                        <div class="col-sm-6 col-md-12" ng-controller="mainCtrl">
                            <div class="box box-info collapsed-box"  style="border-radius: 0px;border-top-color: white;">
                                @include('reports.main-overall')
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6" ng-controller="seniorController">
                            <div class="box box-info  collapsed-box"  style="border-radius: 0px;border-top-color: white;">
                                @include('reports.main-senior-citizen')
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6" ng-controller="votersController">
                            <div class="box box-info collapsed-box "  style="border-radius: 0px;border-top-color: white;">
                                @include('reports.main-registered-voters')
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-12" ng-controller="employmentController">
                            <div class="box box-info  collapsed-box"  style="border-radius: 0px;border-top-color: white;">
                                @include('reports.main-employment-status')
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-12" ng-controller="skillsController">
                            <div class="box box-info "  style="border-radius: 0px;border-top-color: white;">
                                @include('reports.main-skills')
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0.111716
                </div>
                Made with <i class="fa fa-heart-o" aria-hidden="false" style="color: red;"></i> by Synapse Software Technologies
            </footer>
        </div>
        <script src="../src/adminlte/plugins/jQuery/jquery-2.2.3.min.js"></script>
        <script src="../src/adminlte/bootstrap/js/bootstrap.min.js"></script>
        <script src="../src/adminlte/plugins/fastclick/fastclick.js"></script>
        <script src="../src/adminlte/dist/js/app.min.js"></script>
        <script src="../src/adminlte/plugins/sparkline/jquery.sparkline.min.js"></script>
        <script src="../src/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="../src/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="../src/adminlte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.9/angular.min.js"></script>
        <script src="../js/angular/smart-table.debug.js"></script>
        <script src="../js/angular/lrInfiniteScrollPlugin.js"></script>
        <!--Chart-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>
        <script src="../js/angular/angular-chart.min.js"></script>

        <!-- FLOT CHARTS -->
        <script src="../src/adminlte/plugins/flot/jquery.flot.min.js"></script>
        <script src="../src/adminlte/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="../src/adminlte/plugins/flot/jquery.flot.pie.min.js"></script>
        <script src="../src/adminlte/plugins/flot/jquery.flot.categories.min.js"></script>

        <script>
                            var donutData = [{}];
                            var donutData2 = [{}];
                            var donutData3 = [{}];
        </script>
        <script src="../js/angular/reports/main-overall.js"></script>

    </body>
</html>
