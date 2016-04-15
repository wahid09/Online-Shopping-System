<?php
include("include/header.php");
?>  
    
   <div class="center_content">
   	<div class="center_title_bar">What`s New</div>

       <?php
      //  $cat_id=null;
        if(isset($_SESSION['username']))
        {
         //echo "<div class='center_title_bar'>What's New</div>";
          $sql="select * FROM new order by products_prodnum desc limit 6";
          $result=mysql_query($sql) or die(mysql_error());
          $n=mysql_num_rows($result);
          echo $n;
          while($row=mysql_fetch_array($result))
          {
            $imagename=$row['image'];
 
       echo "<div class='prod_box'>
          <div class='top_prod_box'></div>
            <div class='center_prod_box'>            
                <div class='product_title1'><a href='w_details.php?prodid=$row[products_prodnum]'>$row[products_name]</a></div>
                <div class='product_img1'><a href='w_details.php?prodid=$row[products_prodnum]'><img src='admin/upload/$imagename' alt='' title='' border='0' /></a></div>
                <div class='prod_description1'><a href='w_details.php?prodid=$row[products_prodnum]'>$row[products_proddesc]</a></div>
                <div class='prod_tunit'>$row[products_unit]</div>
                <div class='prod_uprice'>$row[products_price]</div>                         
            </div>
            <div class='bottom_prod_box'></div>             
            <div class='prod_details_tab'>
            <a href='#' title='header=[Add to cart] body=[&nbsp;] fade=[on]'><img src='images/cart.gif' alt='' title='' border='0' class='left_bt' /></a>
            <a href='#' title='header=[Specials] body=[&nbsp;] fade=[on]'><img src='images/favs.gif' alt='' title='' border='0' class='left_bt' /></a>
            <a href='#' title='header=[Gifts] body=[&nbsp;] fade=[on]'><img src='images/favorites.gif' alt='' title='' border='0' class='left_bt' /></a>           
            <a href='details.php' class='prod_details'>details</a>            
            </div>                     
        </div>";

        }
      }
        else
          echo "<h2>You have to login to view our products</h2>";
         ?>


           
   
   
</div>  <!-- end of center content -->
   

<?php
include("include/footer.php");