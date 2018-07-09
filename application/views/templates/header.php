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
    <title><?=$this->lang->line('dasrdc_first_welcome');?></title>
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
              <a class="nav-link waves-effect waves-light"  href="index.html"><?=$this->lang->line('dasrdc_acceuil');?> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect waves-light" href="#app" data-offset="100"> <?=$this->lang->line('dasrdc_propos');?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect waves-light" href="#serv" data-offset="90"><?=$this->lang->line('dasrdc_services');?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect waves-light" href="#real" data-offset="100"><?=$this->lang->line('dasrdc_realisation');?></a>
            </li>
             <li class="nav-item">
              <a class="nav-link waves-effect waves-light" href="#contact" data-offset="100"><?=$this->lang->line('dasrdc_contact');?></a>
            </li>
          </ul>
          <!-- Social Icon  -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
                <a  href="<?php echo base_url();?><?php echo  $segment;?>/home" class="nav-link waves-effect waves-light" style="    background: white;border-radius: 15px;color: #0c983f;font-weight: 700;"><?php echo  $segment;?></a>
            </li>
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
    <div id="home" class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-attachment:fixed; background-image:url('<?= base_url("assets/images/trame.png")?>'), url('<?= base_url("assets/images/background5.jpg")?>');">
      <div class="full-bg-img">
        <div class="container flex-center">
          <div class="row smooth-scroll">
            <div class="col-xs-12 col-md-12 " style="background: #39800099;">
              <div class="wow fadeInUp text-center " style="padding: 10px">
                <h3 class="display-4 font-bold white-text mb-3"><b>DASHBOARD-RDCONGO</b></h3>
                <h4 class="font-up font-bold white-text"><b><?php echo $this->lang->line('dasrdc_first_title');?> </b></h4>
                <h5 class=" mt-3 white-text" style="font-size: bolder"><?php echo $this->lang->line('dasrdc_first_welcome');?></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -100;">
      <div style="background-position: 50% 50%; background-size: 100%; background-repeat: no-repeat; background-image: url(&quot;<?= base_url('assets/images/trame.png')?>&quot;) url(&quot;<?= base_url("assets/images/rec-header-bc.png")?>&quot;); position: fixed; top: 0px; left: 0px; width: 1349px; height: 821.245px; overflow: hidden; pointer-events: none; margin-left: 0px; margin-top: -85.1224px; visibility: visible; transform: translateY(4.9px) translateZ(0px);">
        
      </div>
    </div>
  </header>