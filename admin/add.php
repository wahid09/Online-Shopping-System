<?php
//include('connect.php');
session_start();
if (isset ($_POST['submit'])){
    $username =trim($_POST['username']);
    $password = trim($_POST['password']);
    $sql = mysql_query("SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password'")  or die(mysql_error());
    $array=mysql_fetch_array($sql);
    //$con=mysql_num_rows(sql) 
    if(mysql_num_rows($sql) > 0){
        $_SESSION['username']=$array['username'];
    }
    }    
    
if(isset($_SESSION['username']))
{
    echo   "<div id='main_content'> 
   
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
            </div>";
       }
        else
        {
        echo "<h3>Please try again</h3>";
    } 
    ?>    
       
<link href='style.css' rel='stylesheet' type='text/css'>
<div id='header1'>
	<a href='add.php'>Add</a> |
	<a href='delete.php'>Delete</a> |
	<a href='edit.php'>Edit</a>
</div>
<form action='doadd.php' method='post' enctype='multipart/form-data'>
<table>
	<tr>
        <td>
        </td>
		<td ><p1>Add your new product:</p1></td>
	</tr>
    <tr>
        <td>
            Date:
        </td>
        <td>
            <input type='text' name='products_dateadded'>
        </td>
    </tr>
<tr>
    <td>
        Product_id:
    </td>
    <td>
        <input type='text' name='products_prodnum'>
    </td>
</tr>
<tr>
<td>
Product Name:
</td>
<td>
<input type='text' name='products_name'>
</td>
</tr>
<tr>
<td>
Description:
</td>
<td>
<textarea name='products_proddesc' rows='15' cols='100'>
</textarea>
</td>
</tr>
<tr>
<td>
Total Unit:
</td>
<td>
<input type='text' name='products_unit'>
</td>
</tr>
<tr>
<td>
Unit Price:
</td>
<td>
<input type='text' name='products_price'>
</td>
</tr>
<tr>
<tr>
<td>
<label for='file'>Image:</label>
</td>
<td>
<input type='file' name='file' id='file' /> 
</td>
</tr>
<tr>
<td>
Category:
</td>
<td>
<?php
include('connect.php');
$query = 'SELECT category_name FROM category ORDER BY category_name';
$result = mysql_query($query) or die(mysql_error());
?>
<select name='category'>
<?php
while($row = mysql_fetch_array($result))
{
$category_name = $row['category_name'];
echo '<option>'.$category_name.'</option>';
}
?>
</select>
</td>
</tr>
<tr>
	<td>
	</td>
<p class='link'><a href='cat_add.php'>Add</a> |
<a href='cat_delete.php'>Delete</a></p>
</tr>
<tr>
	<td>
	</td>
	</tr>
<tr>
<td colspan='2' align='center'>
<input type='submit' value='add' >
</td>
</tr>
</form>