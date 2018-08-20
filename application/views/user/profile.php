<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<style type="text/css">
  /* Texte défilant */
.messagedefilant {
  display: block;
  margin: -5px auto;
  overflow: hidden;
  position: relative;
  width: 100%;
  max-width: 640px;
  height: 60px;
  padding-left: 5px;
  padding-right: 5px;
}
 
.messagedefilant div {
  position: absolute;
  min-width: 100%; /* au minimum la largeur du conteneur */
}
 
.messagedefilant div span, 
.messagedefilant div:after {
  position: relative;
  display: inline-block;
  font-size: 1rem;
  white-space: nowrap;
  top:0;
  padding-left: 5px
}
 
.messagedefilant div span {
  animation: defilement 10s infinite linear;
  background: #10758a;
  color: white
}
 
.messagedefilant div:after {
  position: absolute;
  top:0; left:0;
  content:attr(data-text);
  animation: defilement2 10s infinite linear;
  background: green;
  color: white
}
 
@keyframes defilement {
  0% { margin-left: 0; }
  100% { margin-left: -100%; }
}
 
@keyframes defilement2 {
  0% { margin-left: 100%; }
  100% { margin-left: 0%; }
}

textarea {
    border: 0 none white;
    overflow: hidden;
    padding: 0;
    padding-left: 10px;
    padding-top: 10px;
    outline: none;
    background-color: white;
}
</style>

<div class="container-fluid">
   <div class="row">
      <nav class="col-md-3 col-lg-2 d-none d-md-block  sidebar text-truncate"  style="position: fixed; height: 100%">
          <div class="sidebar-sticky">
                   <ul class="nav flex-column"><br>
                       <li class="nav-item " style="    margin-bottom: -17px;">
                           <a class="nav-link active text-dark system_nav" href="#" style="">
                            <img src="<?= base_url('assets/images/logo_icone/dash.jpg')?>" class="rounded-circle" width="20" height="20" alt=""> <span style="margin-top:10px;">&nbsp; Dashboard </span> </a>
                       </li><br>
                       <li class="nav-item">
                           <a class="nav-link  text-dark system_nav_actif  border border-left-0 border-right-0 border-bottom-0 border-secondary " href="#" style="margin-bottom: 10px">Actualité</a>
                        </li><br>
                       <li class="nav-item" style="margin-top: -20px;">
                           <a class="nav-link  text-dark system_nav" href="#"><i class=" fa fa-comments-o fa-lg " aria-hidden="true"></i> Forum </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-dark system_nav" href="<?php echo base_url();?>users/profile">
                              <i class=" fa fa-user fa-lg " aria-hidden="true"></i> Mon Profile</a>
                        </li>
                       <li class="nav-item" style="margin-bottom: 10px">
                            <a class="nav-link text-dark system_nav" href="#">
                              <i class=" fa fa-list-alt fa-lg " aria-hidden="true"></i>
                            Mes nouvelles</a>
                       </li>
                      
                       <li class="nav-item">
                           <a class="nav-link  text-dark system_nav_actif border border-left-0 border-right-0 border-bottom-0 border-secondary " href="#">Our contact </a>
                        </li><br>
                       <li class="nav-item">
                           <a class="nav-link  text-dark system_nav" href="#"></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-dark system_nav" href="https://m.facebook.com/jonathanmcmwema/?refid=11&__xts__%5B0%5D=11.%7B%22event%22%3A%22visit_page_tab%22%2C%22user_id%22%3A100011980723144%2C%22page_id%22%3A881717528659285%7D" title="nous voir sur facebook!">
                               <i class=" fa fa-facebook-square  fa-lg " aria-hidden="true" style="color: #10758a;"></i>&nbsp; Facebook
                             </a>
                        </li>
                       <li class="nav-item">
                            <a class="nav-link text-dark system_nav" href="https://www.instagram.com/dashboard6774/" title="Nous voir sur  Instagram!">
                           <i class=" fa fa-instagram   fa-lg " aria-hidden="true" style="color: #10758a;"></i>&nbsp; Instagram</a>
                       </li>
                       <li class="nav-item">
                            <a class="nav-link text-dark system_nav" href="https://mobile.twitter.com/account"  title="Nous voir sur  Twitter!">
                             <i class=" fa fa-twitter-square    fa-lg " aria-hidden="true" style="color: #10758a;"></i>&nbsp; Twitter</a>
                       </li>
                    </ul>
               
          </div>
      </nav>
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 " style="min-height:3000px;">
        <div class="col-12">
          <div class="row">
            <div class="col-md-6 col-sm-12" style="min-height: 500px; padding-top: 20px">
              <form method="post" id="uploadimage" action="<?php echo base_url(); ?>n-pos" method="post"  enctype="multipart/form-data"  accept-charset="utf-8" >
              <div class="row">
                <div class="col-12 system_white col-sm-12" style=" min-height :180px ;padding: 0px; ">
                    <div class="d-flex flex-row-reverse bg-light border">
                        <div class=" p-2 system_nav" style=" ">
                           <div class="input-group input-group-sm mb-3" style="height: 10px">
                              <div class="input-group-prepend">
                                 <span class="input-group-text" id="inputGroup-sizing-sm" style="height: 29px;" >Sujet</span>
                               </div>
                              <input type="text"  class="form-control " name="subjet" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="votre sujet..."  id="subjet" style="height: 29px;border-radius: 0px 10px 10px 0px;" />
                           </div>
                        </div>
                        <div class="p-2 " style="color: #5e9555;">
                            <span class="btn btn-default btn-file" style=" margin-top: -7px;">
                                 <i class="fa fa-camera "></i> Photos 
                                 <input  id="my-file" type="file" name="file_upload[]" multiple="multiple" accept="image/*">
                            </span>
                        </div>
                    </div>
                    <textarea  placeholder='Exprimez-vous' name="text"  id="text" rows="4"></textarea>
                    <div class="d-flex justify-content-center bg-light border overflow">
                        <div class="mr-auto p-2" style="font-size: 12px;margin-top: 7px;
                            word-wrap: break-word;">
                            <img src="<?= base_url();?><?php echo $avatar;?>" width="30" height="30" alt="<?php echo $username;?>" title="<?php echo $username;?>" class="rounded-circle bg-secondary" style="padding: 2px; background: white">
                        </div>
                        <div class="p-2">  <button type="submit" class="btn reinitialiser inputGroup-sizing-sm" onclick="annuler();">Annuler</button></div>
                        <div class="p-2">
                           <button  class="btn publier submit" type="submit" >Publier <i class="fa fa-spinner fa-spin  fa-fw load " style="display: none" ></i>
                           <span class="sr-only">Загрузка...</span></button>
                        </div>
                    </div>
                  </form>
                </div>
                <div class="col-12 system_white " style=" height :450px ; ">
                  <div class="show">h</div>
                </div>
                
              </div>
              
            </div>
            <div class="col-6 d-none d-md-block" style="min-height: 700px">
                <div class="col-12 system_white" style=" min-height :430px ; background-image:url('<?= base_url('assets/images/back.jpg')?>');background-repeat:no-repeat;  background-size: cover;" >
                  <h4 class="h1-responsive font-bold wow fadeIn white-text ap mb-4" data-wow-delay="0.s" style="text-shadow: 0 0 1px #494848; margin-top: 20px; color: white; top: 11px;position: relative;">Nos services</a> <a href="<?= base_url()?>/plateforme/services"><i class="fa fa-plus-square" aria-hidden="true"></i></a></h4>
                  <div class="row">

              <div class="col-md-6 mb-r" style="margin:0">
                        <div class="card card-image" style="background-image: url('<?= base_url('assets/images/back8.jpg')?>');background-repeat:no-repeat;  background-size: 100% 100%;border: none">
                            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4" style=" background-color: rgba(0,0,0,.7) !important;overflow-wrap: break-word;">
                                <div>
                                    <h6 class="card-title pt-4 pb-3 font-bold"><strong>CREATION GRAPHIQUE</strong></h6>
                                    <p style="font-size: 13px;">Conception des solutions innovantes pour la creation de site internet sur mesure, des applications mobile.</p>
                                    <div class="mr-auto smooth-scroll" style="background: #ffa000;;border-radius: 29px;color: white;">
                                      <a class="btn btn-amber btn-rounded waves-effect  waves-light" href=" <?= base_url()?>/plateforme/services" style="color: white; font-size: 12px"><i class="fa fa-clone left"></i> Voir les projets</a>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-r">
                        <div class="card card-image" style="background-image: url('<?= base_url('assets/images/back8.jpg')?>');background-repeat:no-repeat;  background-size: cover; border: none">
                            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4" style=" background-color: rgba(0,0,0,.7) !important;overflow-wrap: break-word;">
                                <div>
                                    <h6 class="card-title pt-4 pb-3 font-bold"><strong>INTERCONNEXION</strong></h6>
                                    <p style="font-size: 13px;">Cette étape est dédié aux reseaux, à la télécommunication et à la reparation des appareils informatiques </p>
                                    <div class="mr-auto smooth-scroll" style="background: #ffa000;border-radius: 29px;color: white;">
                                      <a class="btn btn-amber btn-rounded waves-effect  waves-light" href="<?= base_url()?>/plateforme/services" style="color: white;font-size: 12px"><i class="fa fa-clone left"></i> Voir les projets</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Content -->
                        </div>

                    </div>

              </div>
                  
                 </div>
                 <div class="col-12 system_white bg-light" style=" min-height :400px ;padding-top:10px; padding-bottom: 10px">
                    <div class="input-group mb-3 ">
                        <input type="text" class="form-control" placeholder="Publiciter, juste le lien youtube..." aria-label="Publiciter, juste le lien youtube..." aria-describedby="basic-addon2" style="font-size: 0.8em">
                        <div class="input-group-append">
                           <button class="btn btn-outline publier " type="button">Publier <i class="fa fa-spinner fa-spin  fa-fw load-pub " style="display: none" ></i></button>
                        </div>
                    </div>
                    <hr>
                    <div class="input-group mb-3 ">
                      <div class="messagedefilant">
                           <div data-text="Dashboard propose à ses clients un ensemble des prestations qui couvrent tout type de système d’information (Progiciels, Logiciels, par informatique conseil, infographies, formation, assistances etc…) avec 3 pôles. ">
                            <span>Conception des solutions innovantes pour la creation de site internet sur mesure, des applications mobile.</span></div>
                      </div>    
                    </div>
                    <div class="row">
                      <div class="col-12" style="top: -20px; margin-bottom: 15px">
                        <h6 style="color: #10758a;">Videos</h6></div><br>
                      <div class="col-6">
                        <div class="embed-responsive embed-responsive-4by3">
                          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tgbNymZ7vqY?"></iframe>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="embed-responsive embed-responsive-4by3">
                          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tgbNymZ7vqY?"></iframe>
                        </div>
                      </div>
                      
                    </div>
                 </div>
            </div>
       
            </div>
            
          </div>
        </div>
      </main>
  </div>
</div>




  