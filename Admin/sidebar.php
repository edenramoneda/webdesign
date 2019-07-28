<!DOCTYPE html>
<html>
    <head>
        <title>Lorem Inc.</title>
        <?php include('styles.html'); ?> 
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
         <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>L</b>I</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Lorem</b > Inc.</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
    </nav>
  </header>
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Eden Ramoneda</p>
          <span>User</span>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>Employee Management</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="index.php"><i class="fa fa-circle-o"></i> Employee Profiles</a></li>
                    <li><a href="employment.php"><i class="fa fa-circle-o"></i> Employment</a></li>
                </ul>
            </li>
            <li>
                <a href="overview.php">
                    <i class="fa fa-dashboard"></i> <span>Overview</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pencil-square"></i> <span>Filling of Forms</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="leave.php"><i class="fa fa-circle-o"></i>Leave</a></li>
                    <li><a href="overtime.php"><i class="fa fa-circle-o"></i>overtime</a></li>
                    <li><a href="reimbursement.php"><i class="fa fa-circle-o"></i>reimbursement</a></li>
                </ul>
            </li>
            <li>
                <a href="../index.html">
                    <i class="fa fa-user"></i> <span>Logout</span>
                </a>
            </li>
            
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
    <?php include('script.html'); ?>
    </body>
</html>