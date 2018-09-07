<section>
	<div class="container">
		<div class="row ">
			<div class="col-lg-8 col-md-8 col-sm-12  m-auto border "  style="border: 4px solid black; border-radius: 0px;position:relative; background-image:url('<?= base_url();?><?php echo $avatar;?>');background-repeat:no-repeat;background-position: center; background-size: cover; height: 250px">
                    <div style="background: #01120db3;padding: 10px;overflow-wrap: break-word;color: white;margin-top: 25px; width: "><h4 style="font-size: 18px"><?php echo ucfirst($username);?> <br>
                    	<h4><span style="font-size: 12px"> <?php echo ucfirst($fullname);?></span> <span style="float:right"><h6><?=$website?></h6></span></h4>  
                    </div>
                    <?php if($_SESSION['user_id']==$id){?><a class="btn btn-lg btn-success bottom"  style="position: absolute;bottom: 10px; left: 10px; color: white" onclick="avatar();"  role="button"><i class="fa fa-camera" aria-hidden="true"></i>
                    </a><?php }?>
                     
             </div>
	         <div class="col-lg-8 col-md-8 col-sm-12  m-auto"  style="background :white;padding-bottom: 10px">
	         	    <div class="d-flex justify-content-between" style="font-size: 14px">
	         	    	<div class="p-2"><?php echo ucfirst($username);?></div>
                        <div class="p-2"></div>
                        <div class="p-2"></div>
	         	    </div>
	         	    <div class="d-flex justify-content-between" style="font-size: 14px">
	         	    	<div class="p-2"><?php echo ucfirst($fullname);?></div>
                        <div class="p-2"><?=$email?></div>
                        <div class="p-2"><?=$profession?></div>
	         	    </div>
	         	   
	         	    <div class="d-flex justify-content-between" style="font-size: 14px">
	         	    	<div class="p-2"><?php echo ucfirst($created_at);?></div>
                        <div class="p-2" style="text-align: justify;"></div>
                        <div class="p-2"></div>
	         	    </div>
	         	     <div class="d-flex justify-content-between" style="font-size: 14px">
<?php if($_SESSION['user_id']==$id){?><div class="p-2"  style="background: darkgray;border-radius: 10px;cursor: pointer;" onclick="update_name();">Changer des données</div><?php }?>
                        <div class="p-2" style="text-align: justify;"></div>
                        <div class="p-2"></div>
	         	    </div>
                   
             </div>
			
		</div>
		
	</div>
	
	
</section>
<div style="background: #497119b3; width: 100%; height: 100%; position: absolute; top: 0px; z-index: 1000000; display: none;">
</div>
<div class="upload" style="display: none; position: fixed; top: 0px; width: 100%; height: 100%; background: #00000054; z-index: 1000000">
    <center>
	     <div style="width: 30%; background: white; height: auto; margin-top: 150px; text-align: center; padding: 10px; border-radius: 2px;">
	          <form action="<?php echo base_url(); ?>users/avatar" method="post"  enctype="multipart/form-data"  accept-charset="utf-8" >
                     <div class="form-group" style="text-align:center"><span  onclick="fermer();" style="float: right;cursor: pointer">X</span>
                         <label for="exampleFormControlFile1">Changer votre avatar</label><br>
                         <input type="file" class="form-control-file" id="exampleFormControlFile1" name="userfile"><br>
						 <input type="submit" value="Mettre à jour" class="btn btn-primary" />
			             <input   class="file-upload__input" type="hidden" name="username" value="<?php echo htmlentities($username); ?>" >
                     </div>
               </form>
	     </div>
	</center>
</div>
<div class="uploadM" style="display: none; position: fixed; top: 0px; width: 100%; height: 100%; background: #00000054; z-index: 1000000">
    <center>
	     <div class="col-sm-12 col-md-6 col-lg-6" style=" background: white; height: auto; margin-top: 30px; text-align: center; padding: 10px; border-radius: 2px;">
              <form action="<?php echo base_url(); ?>add/update_resume" method="post">
                 <center>CHANGER MES INFORMATIONS</center><BR>
				 <div class="form-group row">
                   <label for="inputEmail3" class="col-sm-2 col-form-label">Fullname</label>
                   <div class="col-sm-10">
                     <input type="text" name="fullname" class="form-control" id="inputEmail3" value='<?=$fullname?>' placeholder="Write your fullname...">
                   </div>
                 </div>
                 <div class="form-group row">
                   <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                   <div class="col-sm-10">
                     <input type="email" class="form-control" id="inputEmail3" value='<?=$email?>' placeholder="Write your email..." name="email" >
                   </div>
                 </div>
				 <div class="form-group row">
                   <label for="inputEmail3" class="col-sm-2 col-form-label">Profession</label>
                   <div class="col-sm-10">
                     <input type="text" class="form-control" id="inputEmail3" value='<?=$profession?>' placeholder="Your profession..." name="profession" >
                   </div>
                 </div>
				 <div class="form-group row">
                   <label for="inputEmail3" class="col-sm-2 col-form-label">Numero de Phone</label>
                   <div class="col-sm-10">
                     <input type="text" class="form-control" id="inputEmail3" value='<?=$phone?>' placeholder="Your phone number..." name="phone" >
                   </div>
                 </div>
				 <div class="form-group row">
                     <label for="inputEmail3" class="col-sm-2 col-form-label">Votre  website</label>
                     <div class="col-sm-10">
                       <input type="text" class="form-control" id="inputEmail3" value='<?=$website?>' placeholder="ex:www.example.com..." name="website" >
                       <input type="hidden" class="form-control"  value='<?=$id?>'  name="user_id" >
                       <input type="hidden" class="form-control"  value='<?=$username?>'  name="username" >
                     </div>
                 </div>
				  <div class="form-group row">
				     <label for="inputEmail3" class="col-sm-2 col-form-label">Your country</label>
                     <select class="form-control col-sm-9" name="country">
                         <option value="<?=$country?>" selected="selected"><?= (empty($country))? 'Select your country': $country; ?></option>
                         <option value="Afghanistan">Afghanistan </option>
                         <option value="Afrique_Centrale">Afrique_Centrale </option>
                         <option value="Afrique_du_sud">Afrique_du_Sud </option> 
                         <option value="Albanie">Albanie </option>
                         <option value="Algerie">Algerie </option>
                         <option value="Allemagne">Allemagne </option>
                         <option value="Andorre">Andorre </option>
                         <option value="Angola">Angola </option>
                         <option value="Anguilla">Anguilla </option>
                         <option value="Arabie_Saoudite">Arabie_Saoudite </option>
                         <option value="Argentine">Argentine </option>
                         <option value="Armenie">Armenie </option> 
                         <option value="Australie">Australie </option>
                         <option value="Autriche">Autriche </option>
                         <option value="Azerbaidjan">Azerbaidjan </option>
                         <option value="Bahamas">Bahamas </option>
                         <option value="Bangladesh">Bangladesh </option>
                         <option value="Barbade">Barbade </option>
                         <option value="Bahrein">Bahrein </option>
                         <option value="Belgique">Belgique </option>
                         <option value="Belize">Belize </option>
                         <option value="Benin">Benin </option>
                         <option value="Bermudes">Bermudes </option>
                         <option value="Bielorussie">Bielorussie </option>
                         <option value="Bolivie">Bolivie </option>
                         <option value="Botswana">Botswana </option>
                         <option value="Bhoutan">Bhoutan </option>
                         <option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
                         <option value="Bresil">Bresil </option>
                         <option value="Brunei">Brunei </option>
                         <option value="Bulgarie">Bulgarie </option>
                         <option value="Burkina_Faso">Burkina_Faso </option>
                         <option value="Burundi">Burundi </option>
                         
                         <option value="Caiman">Caiman </option>
                         <option value="Cambodge">Cambodge </option>
                         <option value="Cameroun">Cameroun </option>
                         <option value="Canada">Canada </option>
                         <option value="Canaries">Canaries </option>
                         <option value="Cap_vert">Cap_Vert </option>
                         <option value="Chili">Chili </option>
                         <option value="Chine">Chine </option> 
                         <option value="Chypre">Chypre </option> 
                         <option value="Colombie">Colombie </option>
                         <option value="Comores">Colombie </option>
                         <option value="Congo">Congo </option>
                         <option value="Congo_democratique">Congo_democratique </option>
                         <option value="Cook">Cook </option>
                         <option value="Coree_du_Nord">Coree_du_Nord </option>
                         <option value="Coree_du_Sud">Coree_du_Sud </option>
                         <option value="Costa_Rica">Costa_Rica </option>
                         <option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
                         <option value="Croatie">Croatie </option>
                         <option value="Cuba">Cuba </option>
                         
                         <option value="Danemark">Danemark </option>
                         <option value="Djibouti">Djibouti </option>
                         <option value="Dominique">Dominique </option>
                         
                         <option value="Egypte">Egypte </option> 
                         <option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
                         <option value="Equateur">Equateur </option>
                         <option value="Erythree">Erythree </option>
                         <option value="Espagne">Espagne </option>
                         <option value="Estonie">Estonie </option>
                         <option value="Etats_Unis">Etats_Unis </option>
                         <option value="Ethiopie">Ethiopie </option>
                         
                         <option value="Falkland">Falkland </option>
                         <option value="Feroe">Feroe </option>
                         <option value="Fidji">Fidji </option>
                         <option value="Finlande">Finlande </option>
                         <option value="France">France </option>
                         
                         <option value="Gabon">Gabon </option>
                         <option value="Gambie">Gambie </option>
                         <option value="Georgie">Georgie </option>
                         <option value="Ghana">Ghana </option>
                         <option value="Gibraltar">Gibraltar </option>
                         <option value="Grece">Grece </option>
                         <option value="Grenade">Grenade </option>
                         <option value="Groenland">Groenland </option>
                         <option value="Guadeloupe">Guadeloupe </option>
                         <option value="Guam">Guam </option>
                         <option value="Guatemala">Guatemala</option>
                         <option value="Guernesey">Guernesey </option>
                         <option value="Guinee">Guinee </option>
                         <option value="Guinee_Bissau">Guinee_Bissau </option>
                         <option value="Guinee equatoriale">Guinee_Equatoriale </option>
                         <option value="Guyana">Guyana </option>
                         <option value="Guyane_Francaise ">Guyane_Francaise </option>
                         
                         <option value="Haiti">Haiti </option>
                         <option value="Hawaii">Hawaii </option> 
                         <option value="Honduras">Honduras </option>
                         <option value="Hong_Kong">Hong_Kong </option>
                         <option value="Hongrie">Hongrie </option>
                         
                         <option value="Inde">Inde </option>
                         <option value="Indonesie">Indonesie </option>
                         <option value="Iran">Iran </option>
                         <option value="Iraq">Iraq </option>
                         <option value="Irlande">Irlande </option>
                         <option value="Islande">Islande </option>
                         <option value="Israel">Israel </option>
                         <option value="Italie">italie </option>
                         
                         <option value="Jamaique">Jamaique </option>
                         <option value="Jan Mayen">Jan Mayen </option>
                         <option value="Japon">Japon </option>
                         <option value="Jersey">Jersey </option>
                         <option value="Jordanie">Jordanie </option>
                         
                         <option value="Kazakhstan">Kazakhstan </option>
                         <option value="Kenya">Kenya </option>
                         <option value="Kirghizstan">Kirghizistan </option>
                         <option value="Kiribati">Kiribati </option>
                         <option value="Koweit">Koweit </option>
                         
                         <option value="Laos">Laos </option>
                         <option value="Lesotho">Lesotho </option>
                         <option value="Lettonie">Lettonie </option>
                         <option value="Liban">Liban </option>
                         <option value="Liberia">Liberia </option>
                         <option value="Liechtenstein">Liechtenstein </option>
                         <option value="Lituanie">Lituanie </option> 
                         <option value="Luxembourg">Luxembourg </option>
                         <option value="Lybie">Lybie </option>
                         
                         <option value="Macao">Macao </option>
                         <option value="Macedoine">Macedoine </option>
                         <option value="Madagascar">Madagascar </option>
                         <option value="Madère">Madère </option>
                         <option value="Malaisie">Malaisie </option>
                         <option value="Malawi">Malawi </option>
                         <option value="Maldives">Maldives </option>
                         <option value="Mali">Mali </option>
                         <option value="Malte">Malte </option>
                         <option value="Man">Man </option>
                         <option value="Mariannes du Nord">Mariannes du Nord </option>
                         <option value="Maroc">Maroc </option>
                         <option value="Marshall">Marshall </option>
                         <option value="Martinique">Martinique </option>
                         <option value="Maurice">Maurice </option>
                         <option value="Mauritanie">Mauritanie </option>
                         <option value="Mayotte">Mayotte </option>
                         <option value="Mexique">Mexique </option>
                         <option value="Micronesie">Micronesie </option>
                         <option value="Midway">Midway </option>
                         <option value="Moldavie">Moldavie </option>
                         <option value="Monaco">Monaco </option>
                         <option value="Mongolie">Mongolie </option>
                         <option value="Montserrat">Montserrat </option>
                         <option value="Mozambique">Mozambique </option>
                         
                         <option value="Namibie">Namibie </option>
                         <option value="Nauru">Nauru </option>
                         <option value="Nepal">Nepal </option>
                         <option value="Nicaragua">Nicaragua </option>
                         <option value="Niger">Niger </option>
                         <option value="Nigeria">Nigeria </option>
                         <option value="Niue">Niue </option>
                         <option value="Norfolk">Norfolk </option>
                         <option value="Norvege">Norvege </option>
                         <option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
                         <option value="Nouvelle_Zelande">Nouvelle_Zelande </option>
                         
                         <option value="Oman">Oman </option>
                         <option value="Ouganda">Ouganda </option>
                         <option value="Ouzbekistan">Ouzbekistan </option>
                         
                         <option value="Pakistan">Pakistan </option>
                         <option value="Palau">Palau </option>
                         <option value="Palestine">Palestine </option>
                         <option value="Panama">Panama </option>
                         <option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
                         <option value="Paraguay">Paraguay </option>
                         <option value="Pays_Bas">Pays_Bas </option>
                         <option value="Perou">Perou </option>
                         <option value="Philippines">Philippines </option> 
                         <option value="Pologne">Pologne </option>
                         <option value="Polynesie">Polynesie </option>
                         <option value="Porto_Rico">Porto_Rico </option>
                         <option value="Portugal">Portugal </option>
                         <option value="Qatar">Qatar </option>
                         <option value="Republique_Dominicaine">Republique_Dominicaine </option>
                         <option value="Republique_Tcheque">Republique_Tcheque </option>
                         <option value="Reunion">Reunion </option>
                         <option value="Roumanie">Roumanie </option>
                         <option value="Royaume_Uni">Royaume_Uni </option>
                         <option value="Russie">Russie </option>
                         <option value="Rwanda">Rwanda </option>
                         <option value="Sahara Occidental">Sahara Occidental </option>
                         <option value="Sainte_Lucie">Sainte_Lucie </option>
                         <option value="Saint_Marin">Saint_Marin </option>
                         <option value="Salomon">Salomon </option>
                         <option value="Salvador">Salvador </option>
                         <option value="Samoa_Occidentales">Samoa_Occidentales</option>
                         <option value="Samoa_Americaine">Samoa_Americaine </option>
                         <option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option> 
                         <option value="Senegal">Senegal </option> 
                         <option value="Seychelles">Seychelles </option>
                         <option value="Sierra Leone">Sierra Leone </option>
                         <option value="Singapour">Singapour </option>
                         <option value="Slovaquie">Slovaquie </option>
                         <option value="Slovenie">Slovenie</option>
                         <option value="Somalie">Somalie </option>
                         <option value="Soudan">Soudan </option> 
                         <option value="Sri_Lanka">Sri_Lanka </option> 
                         <option value="Suede">Suede </option>
                         <option value="Suisse">Suisse </option>
                         <option value="Surinam">Surinam </option>
                         <option value="Swaziland">Swaziland </option>
                         <option value="Syrie">Syrie </option>
                         <option value="Tadjikistan">Tadjikistan </option>
                         <option value="Taiwan">Taiwan </option>
                         <option value="Tonga">Tonga </option>
                         <option value="Tanzanie">Tanzanie </option>
                         <option value="Tchad">Tchad </option>
                         <option value="Thailande">Thailande </option>
                         <option value="Tibet">Tibet </option>
                         <option value="Timor_Oriental">Timor_Oriental </option>
                         <option value="Togo">Togo </option> 
                         <option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
                         <option value="Tristan da cunha">Tristan de cuncha </option>
                         <option value="Tunisie">Tunisie </option>
                         <option value="Turkmenistan">Turmenistan </option> 
                         <option value="Turquie">Turquie </option>
                         <option value="Ukraine">Ukraine </option>
                         <option value="Uruguay">Uruguay </option>
                         <option value="Vanuatu">Vanuatu </option>
                         <option value="Vatican">Vatican </option>
                         <option value="Venezuela">Venezuela </option>
                         <option value="Vierges_Americaines">Vierges_Americaines </option>
                         <option value="Vierges_Britanniques">Vierges_Britanniques </option>
                         <option value="Vietnam">Vietnam </option>
                         
                         <option value="Wake">Wake </option>
                         <option value="Wallis et Futuma">Wallis et Futuma </option>
                         
                         <option value="Yemen">Yemen </option>
                         <option value="Yougoslavie">Yougoslavie </option>
                         
                         <option value="Zambie">Zambie </option>
                         <option value="Zimbabwe">Zimbabwe </option>
                     </select>
                 </div>
                 <div class="form-group row">
                   <div class="col-sm-10">
                     <button type="submit" class="btn btn-primary">Sauvegarder</button>
                     <span  class="btn btn-secondary" onclick="hide_name();">Fermer</span>
                   </div>
                 </div>

            </form>
	     </div>
	</center>
</div>
<script type="text/javascript">
	function update_name(){
		$('.uploadM').show();
   
	}
  function hide_name(){
    
		$('.uploadM').hide();
	}
	function avatar(){
		$('.upload').show();
	}
	function fermer(){
		$('.upload').hide();
	}
</script>