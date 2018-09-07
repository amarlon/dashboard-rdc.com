<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="Anaelmarlon Luzayamo" content="">
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/img_bcc_imgs/32conv.ico')?>"/>
    <title><?php echo $this->lang->line('bcc_signup_label');?> - БХЦ</title>
    <link href="<?= base_url('assets/css/adminbootstrap.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/success.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/addcss.css')?>" rel="stylesheet">
  </head>
  <body class="text-center" >
    
    <div class="container">
	<div class="row">
		<div class="col-md-12 alert alert-info" >
			<div class="page-header">
				<h1><?php echo $this->lang->line('bcc_success_h1');?>!</h1>
			</div>
			<p><?php echo $this->lang->line('bcc_success_p');?><br>
				<a href="<?php echo base_url()?><?php echo $this->uri->segment(1)?>/login" class="alert-link"><h3><span class="badge badge-info"><?php echo $this->lang->line('bcc_signin_label');?></span></h3></a>
			</p>

		</div>
	</div><!-- .row -->
</div><!-- .container -->
    
    
  </body>
</html>
