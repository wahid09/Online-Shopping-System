<?php
include("include/header.php");
?>
<div class="center_content">
   	<div class="center_title_bar">Shopping cart</div>
    
    	<div class="prod_box_big">
        	<div class="top_prod_box_big"></div>
            <div class="center_prod_box_big">  

 <?php
if (!session_id()) 
//connect to the database
$connect = mysql_connect("localhost", "root","")
or die ("Hey loser, check your server connection.");
mysql_select_db("my_site");
?>
<div align="center">
You currently have
<?php
$sessid = session_id();
//display number of products in cart
$query = "SELECT * FROM carttemp WHERE carttemp_sess = '$sessid'";
$results = mysql_query($query)
or die (mysql_query());
$rows = mysql_num_rows($results);
echo $rows;
?>
product(s) in your cart.<br>
<table width="550" border="1" align="center" cellpadding="5">
<tr>
<td>Quantity</td>
<td>Item Name</td>
<td>Price Each</td>
<td>Extended Price</td>
<td></td>
<td></td>
<?php
$total = 0;
while ($row = mysql_fetch_array($results)) {
echo "<tr>";
extract($row);
$prod = "SELECT * FROM product " .
"WHERE products_prodnum='$carttemp_prodnum'";
$prod2 = mysql_query($prod);
$prod3 = mysql_fetch_array($prod2);
extract($prod3);
echo "<td>
<form method=\"POST\" action=\"modcart.php?action=change\">
<input type=\"hidden\" name=\"modified_hidden\"
value=\"$carttemp_hidden\">
<input type=\"text\" name=\"modified_quan\" size=\"2\"
value=\"$carttemp_quan\">";
echo "</td>";
echo "<td>";
echo "<a href=\'details.php?prodid=' .$products_prodnum. '/'>";
echo  $products_name;
echo "</a></td>";
echo "<td align=\"right\">";
echo $products_price;
echo "</td>";
echo "<td align=\"right\">";
//get extended price
$extprice = number_format($products_price * $carttemp_quan, 2);
echo $extprice;
echo "</td>";
echo "<td>";
echo "<input type=\"submit\" name=\"Submit\"
value=\"Change Qty\">
</form></td>";
echo "<td>";
echo "<form method=\"POST\" action=\"modcart.php?action=delete\">
<input type=\"hidden\" name=\"modified_hidden\"
value=\"$carttemp_hidden\">";
echo "<input type=\"submit\" name=\"Submit\"
value=\"Delete Item\">
</form></td>";
echo "</tr>";
//add extended price to total
$total = $extprice + $total;
}
?>
<tr>
<td colspan=\"4\" align=\"right\">
Your total before shipping is:</td>
<td align=\"right\"> <?php echo number_format($total, 2); ?></td>
<td></td>
<td>
<?php
echo "<form method=\"POST\" action=\"modcart.php?action=empty\">
<input type=\"hidden\" name=\"carttemp_hidden\"
value=\"";
if (isset($carttemp_hidden)) {
echo $carttemp_hidden;
}
echo "\">";
echo "<input type=\"submit\" name=\"Submit\" value=\"Empty Cart\">
</form>";
?>
</td>
</tr>
</table>
<form method="POST" action="checkout.php">
<input type="submit" name="Submit" value="Proceed to Checkout">
</form>
</div>
   
   
   </div>                              
        </div>
 </div>
           <!-- end of center content --> 
<?php
include("include/footer.php");
?>