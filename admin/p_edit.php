 <link href='style.css' rel='stylesheet' type='text/css'>
 <div id='main_content'> 
   
            <div id='menu_tab'>
            <div class='left_menu_corner'></div>
                    <ul class='menu'>
                       
                         <li><a href='add.php' class='nav2'>Products</a></li>
                         <li class='divider'></li>
                          <li><a href='manufacture.php' class='nav2'>Manufacturers</a></li>
                         <li class='divider'></li>
                         <li><a href='special.php' class='nav3'>Specials</a></li>
                         <li class='divider'></li>
                          <li><a href='new.php' class='nav3'>New Products</a></li>
                         <li class='divider'></li>
                          <li><a href='news.php' class='nav4'>Newslatter</a></li>
                         <li class='divider'></li>
                          <li><a href='contact.php' class='nav5'>Contact us</a></li>
                         <li class='divider'></li>
                         <li><a href='registration_edit.php' class='nav6'>User Ifo</a></li>
                         <li class='divider'></li>
                         <li><a href='index.php' class='nav1'>Log out</a></li>
                         <li class='divider'></li>
                         </li>
                    </ul>

             <div class='right_menu_corner'></div>
            </div>

<div id='header1'>
	<a href='add.php'>Add</a> |
	<a href='delete.php'>Delete</a> |
	<a href='edit.php'>Edit</a>
</div>

<?php
if (isset($_POST['product_id'])) {
	$product_id = $_POST['product_id'];
	$pname= trim($_POST['pname']);
	$description = trim($_POST['description']);
	$tunit= trim($_POST['tunit']);
	$uprice = trim($_POST['uprice']);
    $file = trim($_POST['file']);
	//$Category=trim($_POST['Category']);
	
	mysql_connect("localhost","root") or die("Could not connect");
	mysql_select_db("my_site");
	$sql = "UPDATE `products` SET `product_id`='$product_id', `Product_name`='$pname', `Description`='$description', `Total_unit`='$tunit', `Unit_price`='$uprice','Image'='$file'";
	mysql_query($sql);
mysql_close();
print "Your record has been updated";
header('location:edit.php');
} 
elseif (isset($_GET['id']))
{
	$id = $_GET['id'];	
	mysql_connect("localhost","root") or die("Couldn't connect");
	mysql_select_db("my_site");
	$sql = "SELECT * FROM products WHERE product_id ='$id'";
	$result = mysql_query($sql);
	$arr = mysql_fetch_array($result);
	$self =$_SERVER['PHP_SELF'];
	echo <<<EOT
	<form action="$self" method="POST">
	<table>
	<tr>
        <td>
        </td>
		<td ><p1>Edit your  products:</p1></td>
	</tr>
	<tr>
	<td><input type='hidden' name='product_id' value='$id'>
	</tr>
<tr>
<td>
Product Name:
</td>
<td>
<input type='text' name='pname' value='$arr[Product_name]'>
</td>
</tr>
<tr>
<td>
Description:
</td>
<td>
<textarea name='description' value='$arr[Description]'rows='15' cols='100'>
</textarea>
</td>
</tr>
<tr>
<td>
Total Unit:
</td>
<td>
<input type='text' name='tunit' value='$arr[Total_unit]'>
</td>
</tr>
<tr>
<td>
Unit Price:
</td>
<td>
<input type='text' name='uprice' value='$arr[Unit_price]'>
</td>
</tr>
<tr>
<tr>
<td>
<enctype='multipart/form-data'>
<label for='file'>Image:</label>
<input type='file' name='file' value='$arr[Image]'id='file' /> 
</td>
</tr>
<tr>
 <td>&nbsp</td>
	  <td><input type="submit" value="Update"/></td>
	</tr>
	</table>
   </form>
EOT;
mysql_close();

} else {
	print "Please try again";
}

?>