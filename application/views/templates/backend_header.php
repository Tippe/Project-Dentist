<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dentist</title>
  <!-- Tell the browser to be responsive to screen width -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="<?php echo base_url () . 'css/bootstrap.min.css';?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url () . 'css/font-awesome.min.css';?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url () . 'css/ionicons.min.css';?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url () . 'css/AdminLTE.min.css';?>">
  <!-- Theme Color -->
  <link rel="stylesheet" href="<?php echo base_url () . 'css/skin-blue.min.css';?>">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url () . 'css/bootstrap.min.css';?>">

  <link rel="stylesheet" href="<?php echo base_url () . 'css/_all-skins.min.css';?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url () . 'css/morris.css';?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url () . 'css/jquery-jvectormap.css';?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url () . 'css/bootstrap-datepicker.min.css';?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url () . 'css/daterangepicker.css';?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url () . 'css/bootstrap3-wysihtml5.min.css';?>">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo site_url('backend/index');?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>B</b>A</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Backend</b>Admin</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only"></span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">          
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs"><?php echo $this->session->userdata('username'); ?></span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
          <!-- Optionally, you can add icons to the links -->
          <li><a href="<?php echo site_url('home');?>"><i class="glyphicon glyphicon-menu-hamburger"></i><span>Frontend</span></a></li>
          <li><a href="<?php echo site_url('backend/index');?>"><i class="glyphicon glyphicon-user"></i><span>Users</span></a></li>
          <li><a href="<?php echo site_url('backend/create');?>"><i class="glyphicon glyphicon-plus"></i><span>Create User</span></a></li>
          <li><a href="#"><i class="fa fa-link"></i><span>Appointments</span></a></li>
          <li><a href="<?php echo site_url('auth/logout');?>"><i class="glyphicon glyphicon-log-out"></i><span>Logout</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Users</h1>
    </section>