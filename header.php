<?php  
    require_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

     
    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <?php
        if(!isset($_SESSION['sms'])):
        ?>
        <li class="nav-item">
          <a class="nav-link" href="register.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Register</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Login</span></a>
        </li>
        <?php  
        endif;
        ?>

        <?php
        if(isset($_SESSION['sms'])):
        ?>
        <li class="nav-item">
          <a class="nav-link" href="library.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Add Library</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="group.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Add Group</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="message.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Add Message</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Add Contact</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="send_message.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Send Message</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Logout</span></a>
        </li>
        <?php 
      endif;
         ?>

      </ul>
