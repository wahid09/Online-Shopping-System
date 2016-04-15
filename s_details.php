<?php
include("include/header.php");
?>
   
   <div class="center_content">
   	<div class="center_title_bar">Product Details</div>
    
    	<div class="prod_box_big">
        	<div class="top_prod_box_big"></div>
            <div class="center_prod_box_big">  
<?php
//session_start();
//connect to the database - either include a connection variable file
//or type the following lines:
$connect = mysql_connect('localhost', 'root', '')
or die('Hey loser, check your server connection.');
//make our database active
mysql_select_db("My_site");
//get our variable passed through the URL
$prodid= $_REQUEST['prodid'];
//get information on the specific product we want
$query = "SELECT * FROM special WHERE products_prodnum='$prodid'";
$results = mysql_query($query)
or die(mysql_error());
$row = mysql_fetch_array($results);
extract($row);
           $imagename=$row['image'];         
            echo "<img src='admin/upload/$imagename' alt='' title='' border='0' /></a> ";
            ?>
  
<title><?php echo $products_name; ?></title>
</head>
<body>
  <div class='text'>
<div align='center'>
<table cellpadding='5' width='80%'>
<tr>
<td><strong>Name:<?php echo $products_name; ?></strong><br>
<br>Product Number: <?php echo $products_prodnum; ?><br>
<br>Description:<?php echo $products_proddesc; ?><br \>
<br>Unit: <?php echo $products_unit; ?>
<br>Price:$<?php echo $products_price; ?><br>
<form method='POST' action='modcart.php?action=add'>
Quantity: <input type='text' name='qty' size='2'><br>
<input type='hidden' name='products_prodnum'
value='<?php echo $products_prodnum ?>'>
<input type='submit' name='Submit' value='Add to cart'>
</form>
<form method='POST' action='cart.php'>
<input type='submit' name='Submit' value='View cart'>
</form>
</td>
</tr>
</table>
<hr width='200'>
<p><a href='product.php'>Go back to the product page</a></p>
</div>
</div>
               
            </div>                              
        </div>
 </div>
           <!-- end of center content --> 
<?php
include("include/footer.php");
?>