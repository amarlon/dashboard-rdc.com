<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?= base_url('assets/js/vendor/jquery-slim.min.js') ?>"><\/script>')</script>
    <script src="<?= base_url('assets/js/vendor/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/vendor/holder.min.js') ?>"></script>


    <script src="<?= base_url('assets/js/script.js') ?>"></script>
   <script type="text/javascript"  src="<?= base_url('assets/js/jquery-1.11.1.min.js') ?>"></script>


<script type="text/javascript" language="javascript">
  
       

      
// Ajax post
$(document).ready(function() {
    var dataTable = $('#user_data').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'crud/fetch_user'; ?>",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                },  
           ],  
      });
   $(document).on('submit', "#uploadimage", function(event){
     event.preventDefault();
     var text = $("#text").val();
     var subjet = $("#subjet").val();
     var user_id = $("#user_id").val();
     var extension= $("#my-file").val().split('.').pop().toLowerCase();
       if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
       {
        arlet("Votre image est invalide, veuillez choisir une autre image");
        $("#my-file").val('');
       return false;
       } 
    
     if(subjet !=''){
         $.ajax({
              url:"<?php echo base_url().'users/create_post'?>",
              method: 'POST',
              data:new FormData(this),
              contentType:false,
              processData:false,
              success:function(data)
              {
                alert(data);
               $('#uploadimage')[0].reset();
                dataTable.ajax.reload();

              }
         });
     }
     else{
        alert("Veuillez remplir la case sujet");
     }
  });


   
});
      
    </script>
 

  </body>
</html>
