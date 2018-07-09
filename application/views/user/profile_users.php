<section>
	<div class="container">
		<div class="row">
			<div class="col-8  m-auto border border-left-0 border-top-0 border-right-0"  style=" border-radius: 0px;position:relative; background-image:url('<?= base_url();?><?php echo $avatar;?>');background-repeat:no-repeat;background-position: center; background-size: cover; height: 250px">
                    <div style="background: #01120db3;padding: 10px;overflow-wrap: break-word;color: white;margin-top: 25px; width: "><h4 style="font-size: 18px"><?php echo ucfirst($_SESSION['username']);?> <br>
                    	<span style="font-size: 12px"><?php echo ucfirst($firstname);?> - <?php echo ucfirst($Lastname);?></span></h4>
                    </div>
                   <a class="btn btn-lg btn-success bottom"  style="position: absolute;bottom: 10px; left: 10px" href="../../components/navbar/" role="button"><i class="fa fa-camera" aria-hidden="true"></i>
                    </a>
                     
             </div>
	         <div class="col-8  m-auto"  style="background :white;padding-bottom: 10px">
	         	    <div class="d-flex justify-content-between" style="font-size: 14px">
	         	    	<div class="p-2"><?php echo ucfirst($username);?></div>
                        <div class="p-2"></div>
                        <div class="p-2"></div>
	         	    </div>
	         	    <div class="d-flex justify-content-between" style="font-size: 14px">
	         	    	<div class="p-2"><?php echo ucfirst($Lastname);?></div>
                        <div class="p-2"></div>
                        <div class="p-2"></div>
	         	    </div>
	         	    <div class="d-flex justify-content-between" style="font-size: 14px">
	         	    	<div class="p-2"><?php echo ucfirst($firstname);?></div>
                        <div class="p-2" style="text-align: justify;"></div>
                        <div class="p-2"></div>
	         	    </div>
	         	    <div class="d-flex justify-content-between" style="font-size: 14px">
	         	    	<div class="p-2"><?php echo ucfirst($created_at);?></div>
                        <div class="p-2" style="text-align: justify;"></div>
                        <div class="p-2"></div>
	         	    </div>
	         	     <div class="d-flex justify-content-between" style="font-size: 14px">
	         	    	<div class="p-2"  style="background: darkgray;border-radius: 10px;cursor: pointer;" onclick="update_name();">Changer de données</div>
                        <div class="p-2" style="text-align: justify;"></div>
                        <div class="p-2"></div>
	         	    </div>
                   
             </div>
			
		</div>
		
	</div>
	
	
</section>
<div style="background: #497119b3; width: 100%; height: 100%; position: absolute; top: 0px; z-index: 1000000; display: none;">
</div>
<script type="text/javascript">
	function update_name(){
		alert('allo')
	}
</script>