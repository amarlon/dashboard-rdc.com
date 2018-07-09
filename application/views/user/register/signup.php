
<!doctype html>
<html lang="en">
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
    
    <form class="form-signin border paddinlr10 "  style="background: white" action="<?= base_url()?><?php echo $this->uri->segment(1)?>/register1"  method="POST">
      <img class="mb-4 float-left boxshadown" src="<?= base_url('assets/img/img_bcc_imgs/32.png')?>" width="55" height="55" title="<?php echo $this->lang->line('bcc_first_name');?>">
      <h3 class="h3 mb-3 font-weight-normal font-connexion2 " style='text-transform: uppercase;'> -- <?php echo $this->lang->line('bcc_step');?> 1 --</h3>

      <?php echo '<br>'.validation_errors('<div class="alert alert-danger">', '</div>'); ?>
      <?php if(isset($_SESSION['success'])){?>
           <div class="alert alert-success"><?php echo $_SESSION['success']; ?><br>
               
               <a class="nav-link disabled" href="<?php echo base_url()?><?php echo $this->uri->segment(1)?>/sign"><button type="button" class="btn btn-info"> <?php echo $this->lang->line('bcc_signin_label');?> </button>
               </a>
           </div>
       <?php
         }
       ?>
      <input type="text" id="inputname" name="username" class="form-control" placeholder="<?php echo $this->lang->line('bcc_username');?>" required autofocus>
      <label for="inputEmail" class="sr-only"><?php echo $this->lang->line('bcc_mail_label');?></label>
      <input type="email" id="inputEmail" class="form-control" name="email" placeholder="<?php echo $this->lang->line('bcc_mail_label');?>" required autofocus><br>
       
      <button class="btn btn-lg btn-dark btn-block" type="submit" title="войти в систему" name="register">
       <?php echo $this->lang->line('bcc_step_button');?> </button>
      
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
            <a class="nav-link dropdown-toggle"  id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer">
                <?php
                      $language = $this->lang->line('bcc_signin_label');
                      switch ($language) {
                           case "Login":
                                echo "English";
                           break;
                           case "Войти":
                                echo "Русский";
                           break;
                           case "Se connecter":
                                echo "Français";
                           break;
                           case "Logar":
                                echo "Português";
                           break;
                           case "Conectarse":
                                echo "Español";
                           break;
                           default:
                                echo "Русский";
                      }               
               ?>
             </a>
            <div class="dropdown-menu violet " aria-labelledby="dropdown10"  style=" opacity: 0.8">
              <a style=" color: white" class="dropdown-item" href="<?php echo base_url()?>RU/register">Русский</a>
              <a style=" color: white" class="dropdown-item " href="<?php echo base_url()?>EN/register">English</a>
              <a  style=" color: white" class="dropdown-item" href="<?php echo base_url()?>FR/register">Français</a>
              <a style=" color: white" class="dropdown-item" href="<?php echo base_url()?>SP/register">Español</a>
              <a style=" color: white" class="dropdown-item" href="<?php echo base_url()?>POR/register">Português</a>
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
