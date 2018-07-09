<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Se connecter sur dashboard-Rdc...</title>
  <link href="<?= base_url('assets/css/users.css')?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
  <link rel="icon" href="<?= base_url('assets/images/logo_icone/dash.ico')?>">

</head>

<body>
  <div class="login-page">
   <div class="form">
    <?php if (validation_errors()) : ?>
        
           <div class="col-md-12">
               <div class="alert alert-danger" role="alert">
                  <?= validation_errors() ?>
                </div>
            </div>

    <?php endif; ?>
    <?php if (isset($error)) : ?>
      <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
          <?= $error ?>
        </div>
      </div>
    <?php endif; ?>

    <form class="register-form" action="<?= base_url()?>users/register"  method="POST">
      <input type="text" name="username" placeholder="Utilisateur" title="Utilisateur" />
      <input type="password" name="password" placeholder="Mot de passe" title="Mot de passe" required />
      <input type="password" name="confirmer-password" placeholder="confirmer votre mot de passe" title="confirmer votre mot de passe" required />
      <input type="mail" name="email" placeholder="Votre adresse email" title="Votre adresse email" required />
      <button type="submit" title="créer un compte">créer un compte</button>
      <span class="message">Déjà enregistré? <a href="#">se connecter</a></span>
      <p class="message">En cliquant sur "Créer un compte", vous acceptez nos conditions d'utilisation et confirmez que vous avez lu notre <span>politique de confidentialité</span>, y compris l'utilisation de cookies.</p>
    </form>

    <form class="login-form" action="<?= base_url()?>users/login"  method="POST">
      <input type="text" placeholder="Utilisateur" name="username" title="Utilisateur" required />
      <input type="password" placeholder="Mot de passe" name="password" title="Mot de passe" required />
      <button type="submit" title="Connexion">Connexion</button>
      <div class=" message "  style="display: none">
        <div class="p-2"><input name="remember" value="remember-me" type="checkbox"  checked="checked" /></div>
           <div class="p-2">Se souvenir de </div>
      </div>
      
      <p class="message">Non enregistré? <a href="#" title="créer un compte">créer un compte</a></p>
    </form>
  </div>
</div>
<div class="confidentialite " >
	<div class="confidentialite-message" style="overflow-y:auto; " >
		<div class="fermer" style=" position: relative; float: right; right: 5px;cursor: pointer;border-radius: 10px; width: 30px; height: 25px; background: #d45b5b; color: white; text-align: center;padding-top:0px; padding-bottom: 5px">X</div><br>
    <div style="padding-left: 5px; text-align: justify; padding-right: 10px"><h5 style="text-transform: uppercase; text-decoration: underline">Conditions générales d'utilisation</h5><br><br>
      <h6>ARTICLE 1 (Objet):</h6><br>
      <p>Les présentes « conditions générales d'utilisation » ont pour objet l'encadrement juridique des modalités de mise à disposition des services du site www.dashboard-rdc.com et leur utilisation par « l'Utilisateur ».</p>
      <p>Les conditions générales d'utilisation doivent être acceptées par tout Utilisateur souhaitant accéder au site. Elles constituent le contrat entre le site et l'Utilisateur. L’accès au site par l’Utilisateur signifie son acceptation des présentes conditions générales d’utilisation.</p>
      <h6>Éventuellement :</h6>
      <p>
        <ul>
          <li style="text-align: justify;">En cas de non-acceptation des conditions générales d'utilisation stipulées dans le présent contrat, l'Utilisateur se doit de renoncer à l'accès des services proposés par le site.</li>
          <li style="text-align: justify;">www.dashboard-rdc.com se réserve le droit de modifier unilatéralement et à tout moment le contenu des présentes conditions générales d'utilisation.</li>
        </ul></p>
        <p><h6>ARTICLE 2 (Définitions): </h6>
        La présente clause a pour objet de définir les différents termes essentiels du contrat :</p>
        <ul>
          <li>Utilisateur : ce terme désigne toute personne qui utilise le site ou l'un des services proposés par le site.</li>
          <li>Contenu utilisateur : ce sont les données transmises par l'Utilisateur au sein du site.</li>
          <li>Membre : l'Utilisateur devient membre lorsqu'il est identifié sur le site.</li>
          <li>Identifiant et mot de passe : c'est l'ensemble des informations nécessaires à l'identification d'un Utilisateur sur le site. L'identifiant et le mot de passe permettent à l'Utilisateur d'accéder à des services réservés aux membres du site. Le mot de passe est confidentiel.</li>
        </ul>
        <p><h6>ARTICLE 3 (accès aux services): </h6>
        Le site permet à l'Utilisateur un accès gratuit aux services suivants :
         <li>articles d’information ;</li>
         <li>annonces classées ;</li>
         <li>mise en relation de personnes ;</li>
         <li>publication de commentaires / d’oeuvres personnelles ;</li>
        </p>
        <p>Le site est accessible gratuitement en tout lieu à tout Utilisateur ayant un accès à
         Internet. Tous les frais supportés par l'Utilisateur pour accéder au service (matériel
           informatique, logiciels, connexion Internet, etc.) sont à sa charge.</p>
           <p>Selon le cas :</p>
        <p>L’Utilisateur non membre n'a pas accès aux services réservés aux membres. Pour
          cela, il doit s'identifier à l'aide de son identifiant et de son mot de passe.</p>
          <p>Le site met en oeuvre tous les moyens mis à sa disposition pour assurer un accès
          de qualité à ses services. L'obligation étant de moyens, le site ne s'engage pas à
           atteindre ce résultat.</p>
           <p>Tout événement dû à un cas de force majeure ayant pour conséquence un
            dysfonctionnement du réseau ou du serveur n'engage pas la responsabilité de
             www.dashboard-rdc.com</p>
          <p>L'accès aux services du site peut à tout moment faire l'objet d'une interruption,
            d'une suspension, d'une modification sans préavis pour une maintenance ou pour
             tout autre cas. L'Utilisateur s'oblige à ne réclamer aucune indemnisation suite à
             l'interruption, à la suspension ou à la modification du présent contrat.</p>
            <p>L'Utilisateur a la possibilité de contacter le site par messagerie électronique à
             l’adresse contact@ dashboard-rdc.com.</p>
             <p><h6>ARTICLE 4 (Propriété intellectuelle): </h6></p>
             <p>Les marques, logos, signes et tout autre contenu du site font l'objet d'une
              protection par le Code de la propriété intellectuelle et plus particulièrement par le
              droit d'auteur.</p>
              <p>L'Utilisateur sollicite l'autorisation préalable du site pour toute reproduction, publication, copie des différents contenus.</p>
              <p>L'Utilisateur s'engage à une utilisation des contenus du site dans un cadre
                strictement privé. Une utilisation des contenus à des fins commerciales est
                strictement interdite.</p>
                <p>strictement interdite.<br>
                 Tout contenu mis en ligne par l'Utilisateur est de sa seule responsabilité.
                 L'Utilisateur s'engage à ne pas mettre en ligne de contenus pouvant porter atteinte
                  aux intérêts de tierces personnes. Tout recours en justice engagé par un tiers lésé
                    contre le site sera pris en charge par l'Utilisateur.</p>
                    <p>Le contenu de l'Utilisateur peut être à tout moment et pour n'importe quelle raison
                    supprimé ou modifié par le site. L'Utilisateur ne reçoit aucune justification et
                   notification préalablement à la suppression ou à la modification du contenu
                      Utilisateur.</p>
                      <p><h6>ARTICLE 5 (Données personnelles): </h6></p>
                      <p>Les informations demandées à l’inscription au site sont nécessaires et obligatoires
pour la création du compte de l'Utilisateur. En particulier, l'adresse électronique
pourra être utilisée par le site pour l'administration, la gestion et l'animation du
service.</p>
<p>Le site assure à l'Utilisateur une collecte et un traitement d'informations
personnelles dans le respect de la vie privée conformément à la loi n°78-17 du 6
janvier 1978 relative à l'informatique, aux fichiers et aux libertés. Le site est
déclaré à la CNIL sous le numéro 3820.</p>
<p>En vertu des articles 39 et 40 de la loi en date du 6 janvier 1978, l'Utilisateur
dispose d'un droit d'accès, de rectification, de suppression et d'opposition de ses
données personnelles. L'Utilisateur exerce ce droit via :
</p>

  <ul><li>son espace personnel ;</li>
 <li>un formulaire de contact ;</li>
  <li>par mail à mtc@dashboard-rdc.com ;</li></ul>
  <p><h6>ARTICLE 6 (Responsabilité et force majeure): </h6>
  </p> 
  <p>Les sources des informations diffusées sur le site sont réputées fiables. Toutefois,
le site se réserve la faculté d'une non-garantie de la fiabilité des sources. Les
informations données sur le site le sont à titre purement informatif. Ainsi,
l'Utilisateur assume seul l'entière responsabilité de l'utilisation des informations
et contenus du présent site.</p>
<p>L'Utilisateur s'assure de garder son mot de passe secret. Toute divulgation du mot
de passe, quelle que soit sa forme, est interdite.</p>
<p>L'Utilisateur assume les risques liés à l'utilisation de son identifiant et mot de
passe. Le site décline toute responsabilité.</p>
<p>Tout usage du service par l'Utilisateur ayant directement ou indirectement pour
conséquence des dommages doit faire l'objet d'une indemnisation au profit du site.
Une garantie optimale de la sécurité et de la confidentialité des données
transmises n'est pas assurée par le site.</p>
 <p>Toutefois, le site s'engage à mettre en
oeuvre tous les moyens nécessaires afin de garantir au mieux la sécurité et la
confidentialité des données.</p>
<p>La responsabilité du site ne peut être engagée en cas de force majeure ou du fait
imprévisible et insurmontable d'un tiers.</p>
<h6>ARTICLE 7 : Liens hypertextes</h6>
<p>De nombreux liens hypertextes sortants sont présents sur le site, cependant les
pages web où mènent ces liens n'engagent en rien la responsabilité de
www.dashboard-rdc.com qui n'a pas le contrôle de ces liens.
</p>
<p>L'Utilisateur s'interdit donc à engager la responsabilité du site concernant le
contenu et les ressources relatives à ces liens hypertextes sortants.</p>
<h6>ARTICLE 8 (Évolution du contrat): </h6>
<p>Le site se réserve à tout moment le droit de modifier les clauses stipulées dans le
présent contrat.</p>
<h6>ARTICLE 9 (Durée): </h6>
<p>La durée du présent contrat est indéterminée. Le contrat produit ses effets à l'égard
de l'Utilisateur à compter de l'utilisation du service.</p>
<h6>ARTICLE 10 ( Droit applicable et juridiction compétente):</h6>
<p>La législation Congolais s'applique au présent contrat. </p>
  <p>En cas d'absence de
résolution amiable d'un litige né entre les parties, seuls les tribunaux du ressort de
la Cour d'appel de la ville de Kinshasa sont compétents.</p>
<h6>Éventuellement</h6>
<p><h6>ARTICLE 11 (Publication par l’Utilisateur): </h6>
<p>Le site permet aux membres de publier des commentaires / des oeuvres
personnelles.</p>
<p>Dans ses publications, le membre s’engage à respecter les règles de la Netiquette
et les règles de droit en vigueur.</p>
<p>Le site exerce une modération a priori / a posteriori sur les publications et se
réserve le droit de refuser leur mise en ligne, sans avoir à s’en justifier auprès du
membre.</p>
<p>Le membre reste titulaire de l’intégralité de ses droits de propriété intellectuelle.</p>
<p>Mais en publiant une publication sur le site, il cède à la société éditrice le droit
non exclusif et gratuit de représenter, reproduire, adapter, modifier, diffuser et
distribuer sa publication, directement ou par un tiers autorisé, dans le monde
entier, sur tout support (numérique ou physique), pour la durée de la propriété
intellectuelle. Le Membre cède notamment le droit d'utiliser sa publication sur
internet et sur les réseaux de téléphonie mobile.</p>
<p>La société éditrice s'engage à faire figurer le nom du membre à proximité de
chaque utilisation de sa publication.</p>
    </div>
		
	</div>
	
</div>
<script type="text/javascript" src="<?= base_url('assets/js/jquery-3.2.1.min.js')?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/scriptuser.js')?>" ></script>

</body>
</html>