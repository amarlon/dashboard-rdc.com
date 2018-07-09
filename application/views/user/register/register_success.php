<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Success</title>
  <link href="<?= base_url('assets/css/users.css')?>" rel="stylesheet">
</head>
<body>
  <div class="login-page">
     <div class="form">
            <div class="page-header">
               <h1>Merci d'avoir enregistré votre nouveau compte!</h1>
            </div>
            <p>Vous êtes inscrit avec succès. S'il vous plaît vérifier votre boîte e-mail pour confirmer votre adresse e-mail.<br>
              <a href="<?php echo base_url()?>users" class="alert-link"><h3><span class="badge badge-info">Se connecter</span></h3></a>
            </p>
     </div>
  </div>
<script type="text/javascript" src="<?= base_url('assets/js/jquery-3.2.1.min.js')?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/scriptuser.js')?>" ></script>

</body>
</html>

  