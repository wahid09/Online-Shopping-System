<link href="style.css" rel="stylesheet" type="text/css">
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


<link href='style.css' rel='stylesheet' type='text/css'>
<div id='header1'>
	<a href='special.php'>Add</a> |
	<a href='sp_delete.php'>Delete</a> |
	<a href='sp_edit.php'>Edit</a>
</div>

<?php
include('connect.php');
if(isset($_POST['submit']))
{
$product_name=trim($_POST['product_name']);
$sql=mysql_query("DELETE FROM special WHERE product_name='$product_name'");
header('location:sp_delete.php');

}
else
{
$form=<<<EOT
<form action='sp_delete.php' method='post'>
<table>
<tr>
<td>
</td>
<td><p><ul>Enter your product name:</ul></p></td>
</tr>
<tr>
<td>Product Name:</td>
<td><input type='text' name='product_name'><td><br>
</tr>
<tr>
<td>&nbsp</td>
  <td><input type='submit' name='submit' value='delete'></td>
  <table>
</form>
EOT;
echo $form;
}
?>