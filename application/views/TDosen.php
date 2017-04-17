<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Staff Dosen | <?php echo $title; ?> </title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href="<?php echo base_url('assets/AdminLTE-2.0.5/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="<?php echo base_url('assets/font-awesome-4.3.0/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo base_url('assets/ionicons-2.0.1/css/ionicons.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url('assets/AdminLTE-2.0.5/dist/css/AdminLTE.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins 
             folder instead of downloading all of them to reduce the load. -->
        <link href="<?php echo base_url('assets/AdminLTE-2.0.5/dist/css/skins/_all-skins.min.css') ?>" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- Site wrapper -->
        <div class="wrapper">

            <header class="main-header">
                <a href="#" class="logo"><b>TEST</b>LTE</a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/user2-160x160.jpg') ?>" class="user-image" alt="User Image"/>
                                    <span class="hidden-xs"><?php echo $name?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image" />
                                        <p>
                                            <?php echo $name?> - Web Developer
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Change Password</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo site_url('dosen/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <!-- =============================================== -->
            <!-- Left side column. contains the sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p><?php echo $name?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="treeview">
                            <a href="<?php echo site_url('dosen') ?>">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                            <!-- <ul class="treeview-menu">
                                <li><a href="<?php echo site_url('dashboard1') ?>"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                                <li><a href="<?php echo site_url('dashboard2') ?>"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                            </ul> -->
                        </li>
                        <li class="treeview">
                            <a href="<?php echo site_url('dosen/detformal') ?>">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Data Pribadi</span>
                            </a>
                            <!-- <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Boxed</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Fixed</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
                            </ul> -->
                        </li>
                        <li>
                            <a href="<?php echo site_url('dosen/editformal') ?>">
                                <i class="glyphicon glyphicon-education"></i> <span>Riwayat Pendidikan</span>
                            </a>
                        </li>            
                        <li class="treeview">
                            <a href="<?php echo site_url('dosen/detpribadi') ?>">
                                <i class="glyphicon glyphicon-music"></i>
                                <span>Activity</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-circle-o"></i> Morris</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Flot</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Inline charts</a></li>
                            </ul>
                        </li>            
                        <li class="treeview">
                            <a href="<?php echo site_url('dosen/editpribadi') ?>">
                                <i class="glyphicon glyphicon-star"></i>
                                <span>Achievement star</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-circle-o"></i> General</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Icons</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Buttons</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Sliders</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Timeline</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Modals</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- =============================================== -->
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <div id="contents"><?= $contents ?></div>
            </div><!-- /.content-wrapper -->

            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.0
                </div>
                <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Sandy Studio</a>.</strong> All rights reserved.
            </footer>
            </div><!-- ./wrapper -->

            <!-- jQuery 2.1.3 -->
            <script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jQuery/jQuery-2.1.3.min.js') ?>"></script>
            <!-- Bootstrap 3.3.2 JS -->
            <script src="<?php echo base_url('assets/AdminLTE-2.0.5/bootstrap/js/bootstrap.min.js') ?>" type="text/javascript"></script>
            <!-- SlimScroll -->
            <script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/slimScroll/jquery.slimScroll.min.js') ?>" type="text/javascript"></script>
            <!-- FastClick -->
            <script src='<?php echo base_url('assets/AdminLTE-2.0.5/plugins/fastclick/fastclick.min.js') ?>'></script>
            <!-- AdminLTE App -->
            <script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/app.min.js') ?>" type="text/javascript"></script>
    </body>
</html>