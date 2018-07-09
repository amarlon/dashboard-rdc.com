<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="Anaelmarlon Luzayamo" content="">
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/img_bcc_imgs/32conv.ico')?>"/>
    <title><?php echo $this->lang->line('bcc_signin_label');?></title>
    <link href="<?= base_url('assets/css/adminbootstrap.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/sign.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/addcss.css')?>" rel="stylesheet">
  </head>
  <body class="text-center bccsign" >

      <?php
             
           $attributes = array('class' => 'form-signin border paddinlr10 ', 'id' => 'myform', 'style'=>'background: white');
           echo form_open($this->uri->segment(1).'/user/login',$attributes);
           
           $this->lang->line('bcc_first_name');
      ?>
      <img class="mb-4 boxshadown" src="<?= base_url('assets/img/img_bcc_imgs/32.png')?>" width="72" height="72" title="<?php echo $this->lang->line('bcc_first_name');?>">
      <h3 class="h3 mb-3 font-weight-normal font-connexion" style=''> <?php echo $this->lang->line('bcc_signin_title');?> !</h3>
      <?php
           //pour les erreurs
           if (validation_errors()){
              echo '<div class="alert alert-danger" role="alert">';
              echo validation_errors();
              echo '</div>';
           }
           if (isset($error)){
              echo '<div class="alert alert-danger" role="alert">';
              echo  $error;
              echo '</div>';
           }
           //fin pour les erreurs
           $attributes = array(
              'class' => 'mycustomclass',
              'class' =>'sr-only'
            );
           echo form_label($this->lang->line('bcc_mail_label'), 'username', $attributes);
           echo form_input(array('id'=>'username','type'=>'text', 'name'=>'username', 'class'=>'form-control',
              'placeholder'=>$this->lang->line('bcc_username') , 'required'=>'required'));
           echo form_password( array('id' =>'password' ,'name'=>'password', 'class'=>'form-control','placeholder'=>$this->lang->line('bcc_password_label') ,'required'=>'required'));
           $attributesubmit=array('class' => 'btn btn-lg btn-dark btn-block', 'title'=>'войти в систему' );
      ?>
      <div class="checkbox mb-3">
          <label>
    <?php
        echo form_checkbox(array('title'=>$this->lang->line('bcc_remember'), 'value'=>'remember-me', 'name'=>'remember'));
        echo $this->lang->line('bcc_remember');
    ?>
          <br>  
          <a style='color: red; font-size: small;' href="<?php echo base_url()?><?php echo $this->uri->segment(1)?>/forget"><?php echo $this->lang->line('bcc_password_forget');?></a> 
          </label>
      </div>
    <?php
        echo form_submit('submit',$this->lang->line('bcc_signin_label'), $attributesubmit);
        echo form_close();
     ?>
  
    <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark violet float-sm-right" >
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
            <a class="nav-link disabled" href="<?php echo base_url()?><?php echo $this->uri->segment(1)?>/register"><?php echo $this->lang->line('bcc_signup_label');?></a>
          </li>
          <li class="nav-item dropup " >
            <a class="nav-link dropdown-toggle" href="https://getbootstrap.com" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Languages</a>
            <div class="dropdown-menu violet " aria-labelledby="dropdown10"  style=" opacity: 0.8">
              <a style=" color: white" class="dropdown-item" href="<?php echo base_url()?>RU/login">RU</a>
              <a style=" color: white" class="dropdown-item " href="<?php echo base_url()?>EN/login">EN</a>
              <a  style=" color: white" class="dropdown-item" href="<?php echo base_url()?>FR/login">FR</a>
              <a style=" color: white" class="dropdown-item" href="<?php echo base_url()?>SP/login">SP</a>
              <a style=" color: white" class="dropdown-item" href="<?php echo base_url()?>POR/login">POR</a>
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
    <script src="<?= base_url('assets/js/bootstrap.minadmin.js')?>"></script>
    
  </body>
</html>
