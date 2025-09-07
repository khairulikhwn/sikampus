<!DOCTYPE html>
<html lang="en">

<?php
session_start();
include('header.php'); ?>

<?php include('../config/config.php'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <?php include('preloader.php'); ?>

        <!-- Navbar -->
        <?php include('navbar.php'); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <?php include('logo.php'); ?>


            <!-- Sidebar -->
            <?php include('sidebar.php'); ?>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <?php include('content_header.php'); ?>
            <!-- /.content-header -->

            <!-- Main content -->
            <?php
      if (isset($_GET['page'])) {
        if ($_GET['page'] == 'dashboard') {
          include('dashboard.php');
        } elseif ($_GET['page'] == 'data-mahasiswa') {
          include('data_mahasiswa.php');
        } else {
          include('not_found.php');
        }
      } else {
        include('dashboard.php');
      }
      ?>

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include('footer.php'); ?>

</body>

</html>