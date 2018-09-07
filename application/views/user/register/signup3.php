<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="Anaelmarlon Luzayamo" content="">
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/img_bcc_imgs/32conv.ico')?>"/>
    <title><?php echo $this->lang->line('bcc_signup_label');?> - БХЦ</title>
    <link href="<?= base_url('assets/css/adminbootstrap.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/signup.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/addcss.css')?>" rel="stylesheet">
  </head>
  <body class="text-center" >
    
    <form class="form-signin border paddinlr10 "  style="background: white" action="<?= base_url()?><?php echo $this->uri->segment(1)?>/register4"  method="POST">
      <img class="mb-4 float-left boxshadown" src="<?= base_url('assets/img/img_bcc_imgs/32.png')?>" width="55" height="55" title="<?php echo $this->lang->line('bcc_first_name');?>">
      <h3 class="h3 mb-3 font-weight-normal font-connexion2 " > <?php echo $this->lang->line('bcc_signup_label');?> !</h3><br>
      
      <input type="hidden" name="username" class="form-control" value="<?php echo $username ;?>" autofocus >
      <input type="hidden"  class="form-control" name="email" value="<?php echo $email ;?>" autofocus> 
       <input type="hidden" name="password" class="form-control" value="<?php echo $password ;?>" autofocus >
      <input type="hidden"  class="form-control" name="password_confirm" value="<?php echo $password_confirm ;?>" autofocus> 
      <input type="hidden"  class="form-control" name="church" value="<?php echo $church ;?>" autofocus> 
       <input type="hidden" name="telephone" class="form-control" value="<?php echo $telephone;?>" autofocus > <input type="hidden" name="gender" class="form-control" value="<?php echo $gender;?>" autofocus >     <!--tous ce qui c'est fait voir-->
    
       <div class="alert alert-success" role="alert" style="font-size: 11px; line-height: 1.34;font-family: inherit;">
           <?php echo $this->lang->line('bcc_politic_registre');?> 
      </div>
      <button class="btn btn-lg btn-dark btn-block" type="submit" title="войти в систему" name="register">
       <?php echo $this->lang->line('bcc_signup_label2');?> 
     </button>
      
    </form>

    <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark violet float-sm-right" style=>
      <div class="mx-auto">
      <span class="nav-item text-light" >&copy; <?php echo $this->lang->line('bcc');?> , 2018</span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarCollapse">
        <ul class="navbar-nav mr-auto ">
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?><?php echo $this->uri->segment(1)?>/home"><?php echo $this->lang->line('bcc_home');?><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><?php echo $this->lang->line('bcc_politic');?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="<?php echo base_url()?><?php echo $this->uri->segment(1)?>/login"><?php echo $this->lang->line('bcc_signin_label');?></a>
          </li>
          <li class="nav-item dropup " >
            <a class="nav-link dropdown-toggle" href="" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Languages</a>
            <div class="dropdown-menu violet " aria-labelledby="dropdown10"  style=" opacity: 0.8">
              <a style=" color: white" class="dropdown-item" href="<?php echo base_url()?>RU/register3">RU</a>
              <a style=" color: white" class="dropdown-item " href="<?php echo base_url()?>EN/register3">EN</a>
              <a  style=" color: white" class="dropdown-item" href="<?php echo base_url()?>FR/register3">FR</a>
              <a style=" color: white" class="dropdown-item" href="<?php echo base_url()?>SP/register3">SP</a>
              <a style=" color: white" class="dropdown-item" href="<?php echo base_url()?>POR/register3">POR</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
    </nav>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<?= base_url('assets/js/vendor/jquery-slim.min.js')?>"><\/script>')</script>
    <script src="<?= base_url('assets/js/vendor/popper.min.js')?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.minadmin.js')?>"></script>
    
  </body>
</html>
