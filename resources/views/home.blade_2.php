
<!--
* GenesisUI Bootstrap 4 Admin Template built as framework!
* Version 1.3.3
* https://GenesisUI.com
* Copyright 2016 creativeLabs Łukasz Holeczek
* License : https://GenesisUI.com/license.html
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="LeafUI Admin - UI Admin Kit Powered by Bootstrap 4">
        <meta name="author" content="Lukasz Holeczek">
        <meta name="keyword" content="LeafUI Admin - UI Admin Kit Powered by Bootstrap 4">
        <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->
        <title>Administrator | Profiles</title>
        <!-- Main styles for this application -->
        <link href="../src/theme/css/style.css" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="../src/img/system/profiles.png" />
    </head>

    <body class="navbar-fixed sidebar-nav fixed-nav">
        <header class="navbar">
            <div class="container-fluid">
                <button class="navbar-toggler mobile-toggler hidden-lg-up" type="button">&#9776;</button>
                <a class="navbar-brand" href="#"></a>
                <ul class="nav navbar-nav hidden-md-down">
                    <li class="nav-item">
                        <a class="nav-link navbar-toggler layout-toggler" href="#">☰</a>
                    </li>


                </ul>
                <ul class="nav navbar-nav pull-right hidden-md-down" style="margin-right: 10px;">
                    <li class="nav-item dropdown" >
                        <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <img src="../src/theme/img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            <span class="hidden-md-down">admin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header text-xs-center">
                                <strong>Account</strong>
                            </div>
                            <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> Settings</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-shield"></i> Lock Account</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-lock"></i> Logout</a>
                        </div>
                    </li>

                </ul>
            </div>
        </header>
        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-title">
                        Admin Page
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html"><i class="icon-speedometer"></i> DASHBOARD</a>
                    </li>
                    <li class="divider"></li>
                    <li class="nav-title">
                        Menu
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> REPORTS</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="components-buttons.html"><i class="icon-puzzle"></i> BUTTONS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="components-social-buttons.html"><i class="icon-puzzle"></i> Social Buttons</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="components-cards.html"><i class="icon-puzzle"></i> CARDS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="components-forms.html"><i class="icon-puzzle"></i> FORMS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="components-switches.html"><i class="icon-puzzle"></i> SWITCHES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="components-tables.html"><i class="icon-puzzle"></i> TABLES</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Main content -->
        <main class="main">

            <ol class="breadcrumb r-0">
                <li><a href="#">Administrator</a></li>
                <li><a href="#"></a>Reports</li>
                <li class="active">Main</li>
            </ol>
            <div class="container-fluid">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <h1>Summary</h1>
                                    <div class="pull-right"><i class="icon-plus" data-toggle="collapse" data-target="#collapseOne" ></i></div>
                                    <hr>
                                    @include('reports.main-overall')
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <h3>Senior Citizens</h3>
                                    <div class="pull-right"><i class="icon-plus" data-toggle="collapse" data-target="#collapse2" 
                                                               ></i></div>
                                    <hr>
                                    @include('reports.main-senior-citizen')
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <h3>Registered Voters</h3>
                                    <div class="pull-right"><i class="icon-plus" data-toggle="collapse" data-target="#collapse3" 
                                                               ></i></div>
                                    <hr>
                                    @include('reports.main-registered-voters')
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <h3>Employment Status</h3>
                                    <div class="pull-right"><i class="icon-plus" data-toggle="collapse" data-target="#collapse3" 
                                                               ></i></div>
                                    <hr>
                                    @include('reports.main-employment-status')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <footer class="footer">
            <span class="text-left">
                Made with <i class="fa fa-heart-o" aria-hidden="false" style="color: red;"></i> by Synapse Software Technologies

            </span>
            <span class="pull-right">
                Powered by <a href="http://GenesisUI.com">GenesisUI</a>
            </span>
        </footer>
        <!-- Bootstrap and necessary plugins -->
        <script src="../src/theme/js/libs/jquery.min.js"></script>
      
        <script src="../src/theme/js/libs/tether.min.js"></script>
        <script src="../src/theme/js/libs/bootstrap.min.js"></script>
        <script src="../src/theme/js/libs/pace.min.js"></script>
        <!-- Plugins and scripts required by all views -->
        <!--<script src="../src/theme/js/libs/Chart.min.js"></script>-->
        <script src="../src/theme/js/views/shared.js"></script>
        <!-- GenesisUI main scripts -->
        <script src="../src/theme/js/app.js"></script>
        <!-- Plugins and scripts required by this views -->
        <script src="../src/theme/js/libs/toastr.min.js"></script>
        <script src="../src/theme/js/libs/gauge.min.js"></script>
        <script src="../src/theme/js/libs/moment.min.js"></script>
        <script src="../src/theme/js/libs/daterangepicker.min.js"></script>
        <!-- Custom scripts required by this view -->
        <script src="../src/theme/js/views/main.js"></script>
    </body>
</html>