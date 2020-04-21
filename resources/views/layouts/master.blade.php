<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Qignit Admin Dashboard</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/css/app.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" v-model="search" @keyup ="searchit" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" @click ="searchit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 ">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="./images/qignitlogo.jpg"  class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Qignit Administrator</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./images/userlogo.jpg" class="img-circle elevation-2">
        </div>
        <div class="info">
          <li class="nav-item has-treeview menu-open">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            <ul class="nav nav-treeview">
            </ul>
        </div>
      </div>
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <router-link to="/dashboard" class="nav-link ">
                  <i class="fas fa-power-off"></i>
                  <p>Dashboard</p>
                </router-link>
              </li>
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Manage Accounts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/salesstaff" class="nav-link ">
                  <i class="fas fa-address-card"></i>
                  <p>Sales Staff</p>
                </a>
              </li>
              <li class="nav-item">
                <router-link to="/artist" class="nav-link">
                  <i class="fas fa-tasks"></i>
                  <p>Artist</p>
                </a>
              </li>
              <li class="nav-item">
                <router-link to="/producer" class="nav-link ">
                  <i class="fas fa-power-off"></i>
                  <p>Producer</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <router-link to="/users" class="nav-link ">
              <i class="fas fa-power-off"></i>
              <p>Users</p>
            </a>
          </li>
          <li class="nav-item">
            <router-link to="/managealbums" class="nav-link ">
              <i class="fas fa-power-off"></i>
              <p>Manage Albums</p>
            </a>
          </li>
          <li class="nav-item">
            <router-link to="/statistics" class="nav-link ">
              <i class="fas fa-power-off"></i>
              <p>Statistics</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.logout') }}" class="nav-link ">
              <i class="fas fa-power-off"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <router-view></router-view>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020 <a href="https://Qignitonlinemusicstore.com">Qignit Online Music Store</a>.</strong> All rights reserved.
  </footer>
</div>
<script src="/js/app.js"></script>
</body>
</html>