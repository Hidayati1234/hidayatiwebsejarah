<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>WEBSITE</title>

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?= base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='<?= base_url() ?>assets/https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='<?= base_url() ?>assets/https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="<?= base_url() ?>assets/css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
       <a class=" nav-link "  id="navbardropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><font color="white">
       DESA DARMASARI
          </font></a>
       <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

        <a class="dropdown-item" href="<?php echo base_url('Auth'); ?>">Login Admin</a>
        
      </div>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>Welcome">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>profil">Profil Desa</a>
          </li>
          <li class="nav-item dropdown">
        <a class=" nav-link dropdown-toggle"  id="navbardropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       Kegiatan Desa
          </a>
       <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item" href="<?php echo base_url(); ?>desa">Desa Darmasari</a>
        <a class="dropdown-item" href="<?php echo base_url(); ?>Sejarah"></a>
      </div>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="<?php echo base_url(); ?>auth">Logout</a>
      </li>

      </ul>
      </div>
    </div>
  </nav>