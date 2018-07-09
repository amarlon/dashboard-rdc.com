<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="fr" class="full-height">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="icon" href="<?= base_url('assets/images/logo_icone/dash.ico')?>">
    <title><?php echo $title;?></title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link href="<?= base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/mdb.min.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/style.css')?>" rel="stylesheet">
    
  </head>
  <body class="designer">
  <!--Navigation & Intro-->
  <header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" >
      <div class="container">
        <a class="navbar-brand" href="#"><img class="rounded-circle" src="<?= base_url('assets/images/logo_icone/dash.jpg')?>" alt="logo-dashboard-rdc" width="50px" height="50px" style="padding: 2px;
          background: #3cff00;" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto smooth-scroll">
            <li class="nav-item">
              <a class="nav-link waves-effect waves-light"  onclick="location.href='<?php echo base_url('/');?>'">Acceuil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect waves-light" onclick="location.href='<?php echo base_url('plateforme/apropos');?>'" href="#app" data-offset="100"> <?php if($title!="Connaitre plus sur nous..."){;?> À propos <?php }?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect waves-light "  onclick="location.href='<?php echo base_url('plateforme/services');?>'" href="#serv" data-offset="90"> <?php if($title!="#"){;?>Nos services<?php } ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect waves-light" href="#real" data-offset="100"  onclick="location.href='<?php echo base_url('plateforme/realisation');?>'">
                <?php if($title!="Connaitre nos réalisations..."){;?> Nos réalisations <?php } ?></a>
            </li>
             <li class="nav-item">
              <a class="nav-link waves-effect waves-light" href="#contact" data-offset="100">Contact</a>
            </li>
          </ul>
          <!-- Social Icon  -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">

                    <a  href="<?php echo base_url();?>users" class="nav-link waves-effect waves-light">Forum</a>
         
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect waves-light"><i class="fa fa-facebook"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect waves-light"><i class="fa fa-google-plus"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect waves-light"><i class="fa fa-youtube"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
   