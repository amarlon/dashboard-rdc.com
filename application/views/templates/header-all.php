<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  if($this->uri->segment(1)=='En'){
    $segment='Fr';
    $images='France.png';
    $segment2='En';
  }
  else{
    $segment='En';
    $segment2='Fr';
    $images='England.png';
  }

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
              <a class="nav-link waves-effect "  onclick="location.href='<?=base_url()?><?php echo  $segment2;?>/home'" ><?=$this->lang->line('dasrdc_acceuil');?> <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <!-- Social Icon  -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
                <a  href="<?php echo base_url();?><?php echo  $segment;?>/plateforme/apropos" class="nav-link waves-effect waves-light" style="    background: white;border-radius: 15px;color: #0c983f;font-weight: 700;"><?php echo  $segment;?></a>
            </li>
            <li class="nav-item">
                <a  href="<?php echo base_url();?><?php echo  $segment;?>/users" class="nav-link waves-effect waves-light">Forum</a>
            </li>
            <li class="nav-item">
              <a href="https://www.facebook.com/Dashboardrdc/" class="nav-link waves-effect waves-light"><i class="fa fa-facebook"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect waves-light"><i class="fa fa-google-plus"></i></a>
            </li>
            <li class="nav-item">
              <a   class="nav-link waves-effect waves-light"><i class="fa fa-youtube"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
   