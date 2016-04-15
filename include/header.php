<?php
session_start();
?>

<html>
<head>
<title>Electronix Store</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<div id="main_container">
	<div class="top_bar">
    	<div class="top_search">
        	<div class="search_text"><a href="#">Advanced Search</a></div>
            <input type="text" class="search_input" name="search" />
            <input type="image" src="images/search.gif" class="search_bt"/>
        </div>
        
        <div class="languages">
        	<div class="lang_text">Languages:</div>
            <a href="#" class="lang"><img src="images/en.gif" alt="" title="" border="0" /></a>
            <a href="#" class="lang"><img src="images/de.gif" alt="" title="" border="0" /></a>       
        </div>
    
    </div>
	<div id="header">
        
        <div id="logo">
            <a href="index.php"><img src="images/logo.png" alt="" title="" border="0" width="237" height="140" /></a>
	    </div>
        
        <div class="oferte_content">
        	<div class="top_divider"><img src="images/header_divider.png" alt="" title="" width="1" height="164" /></div>
        	<div class="oferta">
            
           		<div class="oferta_content">
                	<img src="images/laptop.png" width="94" height="92" border="0" class="oferta_img" />
                	
                    <div class="oferta_details">
                            <div class="oferta_title">Samsung GX 2004 LM</div>
                            <div class="oferta_text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            </div>
                            <a href="details.php" class="details">details</a>
                    </div>
                </div>
                <div class="oferta_pagination">
                
                     <span class="current">1</span>
                     <a href="product.php">2</a>
                     <a href="special.php">3</a>
                     <a href="log.php">4</a>
                     <a href="registration.php">5</a>
                     <a href="contact.php">6</a>  
                             
                </div>        

            </div>
            <div class="top_divider"><img src="images/header_divider.png" alt="" title="" width="1" height="164" /></div>
        	
        </div> 
        

    </div>
    
   <div id="main_content"> 
   
            <div id="menu_tab">
            <div class="left_menu_corner"></div>
                    <ul class="menu">
                         <li><a href="index.php" class="nav1">  Home </a></li>
                         <li class="divider"></li>
                         <li><a href="product.php" class="nav2">Products</a></li>
                         <li class="divider"></li>
                         <li><a href="special.php" class="nav3">Specials</a></li>
                         <li class="divider"></li>
                          <?php
                          if(isset($_SESSION['username'])){
                           echo "<li><a href='logout.php'class='nav4'>Log out</a></li>";
                          echo "<li class='divider'></li>";
                           }
                          else
                             {
                          echo  " <li><a href='log.php' class='nav4'>Log in</a></li>";
                          echo " <li class='divider'></li>";
                             }
                         ?>
                         <li><a href="registration.php" class="nav4">Registration</a></li>
                         <li class="divider"></li>
                         <li><a href="contact.php" class="nav6">Contact Us</a></li>
                         <li class="divider"></li>
                         <li class="currencies">Currencies
                         <select>
                         <option>US Dollar</option>
                         <option>Euro</option>
						 <option>Taka</option>
						  </select>
                         </li>
                    </ul>

             <div class="right_menu_corner"></div>
            </div>
            
    <div class="crumb_navigation">
    Navigation: <span class="current">Home</span>
    
    </div>        
    
    
   <div class="left_content">
    <div class="title_box">Categories</div>
    
        <ul class="left_menu">
        
          <?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("my_site", $con);

$result = mysql_query("SELECT * FROM category order by category_id desc limit 7");

while($row = mysql_fetch_array($result))
  {
  echo "<li class='odd'><a href='product.php?cat_name=$row[category_name]'>$row[category_name]</a></li><br>";
  }

?>

        </ul> 
        
        
     <div class="title_box">Special Products</div>  
     <div class="border_box">
        <?php
include('connect.php');
$sql="SELECT* from special order by products_prodnum desc limit 1"; 
$result=mysql_query($sql) or die(mysql_error());
while ($row= mysql_fetch_array($result)){
 $imagename=$row['image'];
 $products_name=$row['products_name'];
 $products_price=$row['products_price'];
 echo  "<div class='product_title'><a href='special.php'>$products_name</a></div>
         <div class='product_img'><a href='special.php'><img src='admin/upload/$imagename' alt='' title='' border='0' /></a></div>
         <div class='prod_price'><span class='price'>$products_price</span></div>
     </div>";
     }

     ?>

     
     
     <div class="title_box">Newsletter</div>  
     <div class="border_box">
		<input type="text" name="newsletter" class="newsletter_input" value="your email"/>
        <a href="join.php" class="join">join</a>
     </div>  
     
     <div class="banner_adds">
     
     <a href="#"><img src="images/bann2.jpg" alt="" title="" border="0" /></a>
     </div>    
        
    
   </div><!-- end of left content -->
