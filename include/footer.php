
   
  <div class="right_content">
   		<div class="shopping_cart">
        	<div class="cart_title">Shopping cart</div>
            
            <div class="cart_details">
            0 items <br />
            <span class="border_cart"></span>
            Total: <span class="price">350$</span>
            </div>
            
            <div class="cart_icon"><a href="cart.php" title="header=[Checkout] body=[&nbsp;] fade=[on]"><img src="images/shoppingcart.png" alt="" title="" width="48" height="48" border="0" /></a></div>
        
        </div>
   <div class="title_box">What'S New</div>  
     <div class="border_box">
   
      <?php
         //include('connect.php');
         $sql="SELECT* from new order by products_prodnum desc limit 1"; 
         $result=mysql_query($sql) or die(mysql_error());
            while ($row= mysql_fetch_array($result)){
               $imagename=$row['image'];
              $products_name=$row['products_name'];
              $products_price=$row['products_price'];
              echo  "<div class='product_title'><a href='w_new.php'>$products_name</a></div>
             <div class='product_img'><a href='w_new.php'><img src='admin/upload/$imagename' alt='' title='' border='0' /></a></div>
             <div class='prod_price'><span class='price'>$products_price</span></div>
        </div>";
     }

     ?>
     
     
    <div class="title_box">Manufacturers</div>
    
        <ul class="left_menu">
              <?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("my_site", $con);

$result = mysql_query("SELECT * FROM manufacturers order by manu_id desc limit 6");

while($row = mysql_fetch_array($result))
  {
  echo "<li class='even'><a href='product.php?name=$row[manu_name]'>$row[manu_name]</li></a><br>";
  }

?>

        </ul>      
     
     <div class="banner_adds">
     
     <a href="#"><img src="images/bann1.jpg" alt="" title="" border="0" /></a>
     </div>        
     
   </div><!-- end of right content -->   
   
            
   </div><!-- end of main content -->
   
   
   
   <div class="footer">
   

        <div class="left_footer">
        <img src="images/footer_logo.png" alt="" title="" width="170" height="49"/>
        </div>
        
        <div class="center_footer">
        copyright & copy; wahid ullah 2013<br />
        <a href="http://csscreme.com/freecsstemplates/" title="free templates"><img src="images/csscreme.jpg" alt="free templates" title="free templates" border="0" /></a><br />
        <img src="images/payment.gif" alt="" title="" />
        </div>
        
        <div class="right_footer">
        <a href="index.php">home</a>
        <a href="about.php">about</a>
        <a href="log.php">sitemap</a>
        <a href="registration.php">rss</a>
        <a href="contact.php">contact us</a>
        </div>   
   
   </div>                 


</div>
<!-- end of main_container -->
</body>
</html>


   
   
