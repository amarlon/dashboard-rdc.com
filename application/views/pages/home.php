<!-- First container -->
    <div id="app" class=" container-fluid" style="margin-top: 60px;width: 100%; min-height: 621.245px;">
      <div class="container mt-3">
      <!-- Section About -->

      <section  class="section mt-1 mb-3" style="margin:0; color: #141924e6;
" >
        <!--Secion heading-->
        <div class="full-bg-img" style="margin:0;">
                <div class="container flex-center">
                    <div class="row flex-center pt-5 mt-3">
                      <div class="col-md-6 wow fadeIn d-flex justify-content-center" data-wow-delay="0.2s">
                            <img src="<?= base_url('assets/images/apropos.png')?>" alt="" class="img-responsive" >
                        </div>
                        <div class="col-md-6 text-center text-md-left margins">
                            <div class="text-black">
                                <h1 class="h1-responsive font-bold wow fadeIn " data-wow-delay="0.2s" style="text-transform: uppercase;"><?=$this->lang->line('dasrdc_propos'); ?></h1>
                                    <hr class="hr-light wow fade" data-wow-delay="0.2s">
                                    <input type="checkbox" class="read-more-state" id="post-1" />
                                    <?=$this->lang->line('dasrdc_comprendre');?>
                                    <br>
                                     <label for="post-1" class=" btn btn-outline-danger wow fadeIn read-more-trigger" onclick="location.href='<?php echo base_url($this->uri->segment(1).'/plateforme/apropos')?>'" data-wow-delay="0.2s" ></label><br><br>                           
                            </div>
                        </div>
                        <div style="background: #06072f; padding: 15px;border-radius: 10px;color: #d6cfcf;border: #0d6b18 solid 2px;">
                        <center><h2 class="h2-responsive font-bold wow fadeIn text-black " data-wow-delay="0.2s"><br><?=$this->lang->line('dasrdc_nosengagements');?> </h2></center><br><br>
                        <p style="font-size: 16px">
                         <?=$this->lang->line('dasrdc_notreoffreest')?>
                        </p>
                      </div>
                        
                        
                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>
    <div id="serv" class=" container-fluid streak streak-photo streak-md hm-indigo-strong" style="margin-top:0;width: 100%; height: auto;background-image:url('<?= base_url('assets/images/rec-header-bac.png')?>'),url('<?= base_url('assets/images/back.jpg')?>')">
      <div class="row">
        <img src="<?= base_url('assets/images/back8.png')?>" alt=""/>
      </div>
        <div class="container">
            <h1 class="h1-responsive font-bold wow fadeIn white-text ap mb-4" data-wow-delay="0.s" style="text-shadow: 0 0 1px #494848; margin-top: 15px; text-transform: Uppercase"> <?=$this->lang->line('nosservices');?></a> <a href="<?= base_url($this->uri->segment(1))?>/plateforme/services"><i class="fa fa-plus-square" aria-hidden="true"></i></a></h1>
            
            <div class="row">

              <div class="col-md-4 mb-r" style="margin:0">
                        <div class="card card-image" style="background-image: url('<?= base_url('assets/images/back8.jpg')?>');">

                            <!-- Content -->
                            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                                <div>
                                    <h6 class="amber-text"><i class="fa fa-pie-chart"></i><strong><?=$this->lang->line('devel');?> </strong></h6>
                                    <h3 class="card-title pt-4 pb-3 font-bold"><strong><?=$this->lang->line('conceptiondes');?></strong></h3>
                                    <p><?=$this->lang->line('conceptiond');?></p>
                                    <div class="mr-auto smooth-scroll">
                                      <a class="btn btn-amber btn-rounded waves-effect  waves-light" href="#real"><i class="fa fa-clone left"></i>  <?=$this->lang->line('voirprojets');?></a>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-r">
                        <div class="card card-image" style="background-image: url('<?= base_url('assets/images/back8.jpg')?>');">
                            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                                <div>
                                    <h6 class="amber-text"><i class="fa fa-pie-chart"></i><strong> <?=$this->lang->line('reseaute');?> </strong></h6>
                                    <h3 class="card-title pt-4 pb-3 font-bold"><strong><?=$this->lang->line('interconnection');?></strong></h3>
                                    <p> <?=$this->lang->line('etapes')?> </p>
                                    <div class="mr-auto smooth-scroll">
                                      <a class="btn btn-amber btn-rounded waves-effect  waves-light" href="#real"><i class="fa fa-clone left"></i> <?=$this->lang->line('voirprojets');?></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Content -->
                        </div>

                        <!-- Card -->

                    </div>
                     <div class="col-md-4 mb-r">

                        <!-- Card -->
                        <div class="card card-image" style="background-image: url('<?= base_url('assets/images/back8.jpg')?>');">

                            <!-- Content -->
                            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                                <div>
                                    <h6 class="amber-text"><i class="fa fa-pie-chart"></i><strong> <?=$this->lang->line('infogr')?> </strong></h6>
                                    <h3 class="card-title pt-4 pb-3 font-bold"><strong><?=$this->lang->line('graphic')?></strong></h3>
                                    <p><?=$this->lang->line('camerade')?></p>
                                   
                                    <div class="mr-auto smooth-scroll">
                                      <a class="btn btn-amber btn-rounded waves-effect  waves-light" href="#real"><i class="fa fa-clone left"></i> <?=$this->lang->line('voirprojets');?></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Content -->
                        </div>
                    </div>
                    <p class="col-lg-12 white-text" style="background: #04354d80;padding-top: 22px; margin-bottom: 15px;"><?=$this->lang->line('notreoffre');?><a href="<?= base_url($this->uri->segment(1))?>/plateforme/services"><i class="fa fa-plus-square" aria-hidden="true"></i></a><br/>
                      <br/><br/></p>
              </div>
        </div>
    </div>
    <div id="real" class=" container-fluid" style="margin-top: 60px;width: 100%; height: auto;">
      <section id="portfolio" class="section mt-2 pb-5 mb-4" style="margin:0">
      <div class="container">
        <!--Section heading-->
        <div class="row mt-4" style="margin:0">
          <div class="col-md-12 ">
            <h1 class="h1-responsive text-center  font-bold wow fadeIn " data-wow-delay="0.2s"><span class="re" style="text-transform: Uppercase"><?=$this->lang->line('NOSRECENTESREALISATIONS');?></span> <a href="<?= base_url($this->uri->segment(1))?>/plateforme/realisation"><i class="fa fa-plus-square" aria-hidden="true"></i></a> </h1>      
            <p class="section-description mt-5 wow fadeIn" data-wow-delay="0.2s">
             <?=$this->lang->line('puisque'); ?></p>
          </div>
        </div>
      </div>
      <!--First row-->
      <div class="row">         
        <!--Tab panels-->
        <div class="tab-content">
          <!--Panel 1-->
          <div class="tab-pane fade show in active" id="panel31" role="tabpanel">
            <br>
            <!--First row-->
            <div class="row ml-5 mr-5 mt-2 tdpan">
              <!--First column-->
              <div class="col-xs-4 col-sm-6 col-md-3 col-lg-3">
                <!--Featured image-->
                <div class="view overlay hm-white-slight hm-zoom z-depth-2">
                  <img data-rel="<?= base_url('assets/images/1.jpg')?>" class="nosimage" src="<?= base_url('assets/images/1.jpg')?>">
                </div>
                <p class="font-up text-center font-bold blue-grey-text mt-4 mb-4"></p>
              </div>
              <!--/First column-->
              <!--Second column-->
              <div class="col-xs-4 col-sm-6 col-md-3 col-lg-3">
                <!--Featured image-->
                <div class="view overlay hm-white-slight hm-zoom z-depth-2">
                  <img data-rel="<?= base_url('assets/images/IMG_0908.JPG')?>" class="nosimage" src="<?= base_url('assets/images/IMG_0908.JPG')?>">
                </div>
                <p class="font-up text-center font-bold blue-grey-text mt-4 mb-4"></p>
              </div>
              <!--/Second column-->
              <!--Third column-->
              <div class="col-xs-4 col-sm-6 col-md-3 col-lg-3">
                <!--Featured image-->
                <div class="view overlay hm-white-slight hm-zoom z-depth-2">
                  <img data-rel="<?= base_url('assets/images/IMG_0909.JPG')?>" class="nosimage" src="<?= base_url('assets/images/IMG_0909.JPG')?>">
                </div>
                <p class="font-up text-center font-bold blue-grey-text mt-4 mb-4"></p>
              </div>
              <!--/Third column-->
              
              <!--Fourth column-->
              <div class="col-xs-4 col-sm-6 col-md-3 col-lg-3">
                <!--Featured image-->
                <div class="view overlay hm-white-slight hm-zoom z-depth-2">
                  <img data-rel="<?= base_url('assets/images/IMG_0910.JPG')?>" class="nosimage" src="<?= base_url('assets/images/IMG_0910.JPG')?>">
                </div>
                <p class="font-up text-center font-bold blue-grey-text mt-4 mb-4"></p>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: 17px; margin-bottom: 25px; color: #53535c!important; font-weight: 500" >
                   <center><?=$this->lang->line('dashboardoffers');?></center>
              </div>
              <div class="col-xs-4 col-sm-6 col-md-3 col-lg-3">
                <!--Featured image-->
                <div class="view overlay hm-white-slight hm-zoom z-depth-2">
                  <img data-rel="<?= base_url('assets/images/dash5.jpeg')?>" class="nosimage" src="<?= base_url('assets/images/dash5.jpeg')?>">
                </div>
                <p class="font-up text-center font-bold blue-grey-text mt-4 mb-4"></p>
              </div>
              <div class="col-xs-4 col-sm-6 col-md-3 col-lg-3">
                <!--Featured image-->
                <div class="view overlay hm-white-slight hm-zoom z-depth-2">
                  <img data-rel="<?= base_url('assets/images/dash4.jpeg')?>" class="nosimage" src="<?= base_url('assets/images/dash4.jpeg')?>">
                </div>
                <p class="font-up text-center font-bold blue-grey-text mt-4 mb-4"></p>
              </div>
              <div class="col-xs-4 col-sm-6 col-md-3 col-lg-3">
                <!--Featured image-->
                <div class="view overlay hm-white-slight hm-zoom z-depth-2">
                  <img data-rel="<?= base_url('assets/images/dash3.jpeg')?>" class="nosimage" src="<?= base_url('assets/images/dash3.jpeg')?>">
                </div>
                <p class="font-up text-center font-bold blue-grey-text mt-4 mb-4"></p>
              </div>
              <div class="col-xs-4 col-sm-6 col-md-3 col-lg-3">
                <!--Featured image-->
                <div class="view overlay hm-white-slight hm-zoom z-depth-2">
                  <img data-rel="<?= base_url('assets/images/dash2.jpeg')?>" class="nosimage" src="<?= base_url('assets/images/dash2.jpeg')?>">
                </div>
                <p class="font-up text-center font-bold blue-grey-text mt-4 mb-4"></p>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: 17px; margin-bottom: 25px; color: #53535c!important; font-weight: 500">
                   <center> <?=$this->lang->line('exper') ;?>  </center>
              </div>
            </div>
      </div>
    </section>
    </div>
    <div id="contact"  class=" container-fluid streak streak-photo streak-md hm-indigo-strong" style="color: white;margin-top: 60px;width: 100%; height: auto;background-image:url('<?= base_url('assets/images/cont.png')?>'),url('<?= base_url('assets/images/conttt.png')?>')">
      <section class="section mb-4" style="margin:0">
        <div class="container" >
        <h1 class="h1-responsive text-center  font-bold my-4 pt-5 wow fadeIn" data-wow-delay="0.2s"><span class="re"><?php echo $this->lang->line('dasrdc_contacternous');?> </span></h1>
        <div class="row wow fadeIn" data-wow-delay="0.4s">
          <!--First column-->
          <div class="col-md-8 mb-r">
            <form method="POST" content-type="multipart/alternative;" action="<?= base_url()?>home/mail" style="background: rgba(159, 152, 7, 0.2) none repeat scroll 0% 0%;padding-top: 10px;color: white;border-radius: 5px;
                 border-radius: 10px;padding-left: 10px">
              <!--First row-->
              <div class="row">
                <!--First column-->
                <div class="col-md-6">
                  <div class="md-form">
                    <div class="md-form">
                      <input type="text" id="form41" style="color:white !important" class="form-control" name="fullname" value="">
                      <label for="form41" class="white-text"><b><?=$this->lang->line('votrenom');?></b></label>
                    </div>
                  </div>
                </div>
                <!--Second column-->
                <div class="col-md-6">
                  <div class="md-form">
                    <div class="md-form">
                      <input type="text" id="form52"  style="color:white !important" class="form-control" name="email" value="">
                      <label for="form52" class="white-text"><?=$this->lang->line('votremail');?></label>
                    </div>
                  </div>
                </div>
              </div>
              <!--/.First row-->
              <!--Second row-->
              <div class="row">
                <div class="col-md-12">
                  <div class="md-form">
                    <input type="text" id="form51" class="form-control" name="sujet" style="color:white !important" value="">
                    <label for="form51" class="white-text"><?=$this->lang->line('sujet');?></label>
                  </div>
                </div>
              </div>
              <!--/Second row-->
              <!--Third row-->
              <div class="row">
                <!--First column-->
                <div class="col-md-12">
                  <div class="md-form">
                    <textarea type="text" id="form76" class="md-textarea" name="message" style="color:white !important" value=""></textarea>
                    <label for="form76" class="white-text"><?=$this->lang->line('votremessage');?></label>
                  </div>
                </div>
              </div>
              <!--/.Third row-->
        
            <div class="center-on-small-only">
              <button class="btn btn-outline-warning btn-rounded" type="submit" style="background: white;"><?=$this->lang->line('dasrdc_envoyer');?></button>
            </div>
                </form>
          </div>
          <!--.First column-->
          <!--Second column-->
          <div class="col-md-4">
            <ul class="contact-icons">
              <li><i class="fa fa-map-marker fa-2x"></i>
                <p> 1 Av. Kimpe Q/Djeo-Binza, C/Ngaliema , RDC</p>
              </li>
              <li><i class="fa fa-phone fa-2x"></i>
                <p>+ 243 84 42 13 359</p>
              </li>
              <li><i class="fa fa-envelope fa-2x"></i>
                <p>contact@dashboard-rdc.com</p>
              </li>
            </ul>
          </div>
          <!--.Second column-->
        </div>
        </div>  
      

      </section>
    </div>


     
              
   