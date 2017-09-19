<!DOCTYPE html>
<html>
  <head>
    <title>Dentist</title>
    <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
  </head>
  <body>
  <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo base_url()?>home">Dentist(*)</a>
        </div>
        <div id="navbar">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url()?>home">Home</a></li>
            <li><a href="<?php echo base_url()?>auth/login">Login</a></li>
            <li><a href="<?php echo base_url()?>auth/register">Registration</a></li>
            <li><a href="<?php echo base_url()?>appointments/index">Appointments</a></li>
          </ul>
        </div>
      </div>
    </nav>