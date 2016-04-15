<?php
include("include/header.php");
?>  

   
   <div class="center_content">
   	<div class="center_title_bar">Log In</div>
    
    	<div class="prod_box_big">
        	<div class="top_prod_box_big"></div>
            <div class="center_prod_box_big">            
               
  <?php
session_destroy();
echo "<script>alert('Thank you for visiting our site')</script>";

?>             
                                     
            </div>
            <div class="bottom_prod_box_big"></div>                                
        </div>
       
    
   
   </div><!-- end of center content -->
   
  <?php
include("include/footer.php");
?>