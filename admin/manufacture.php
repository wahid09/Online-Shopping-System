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
    <a href='manufacture.php'>Add</a> |
    <a href='manupro_delete.php'>Delete</a> |
    <a href='manupro_edit.php'>Edit</a>
</div>
<form action='manupro_add.php' method='post' enctype='multipart/form-data'>
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
            <input type='text' name='pdate'>
        </td>
    </tr>
    <tr>
        <td>
            Product Id:
        </td>
        <td>
            <input type='text' name='pid'>
        </td>
    </tr>
<tr>
<td>
Product Name:
</td>
<td>
<input type='text' name='pname'>
</td>
</tr>
<tr>
<td>
Description:
</td>
<td>
<textarea name='description' rows='15' cols='100'>
</textarea>
</td>
</tr>
<tr>
<td>
Total Unit:
</td>
<td>
<input type='text' name='tunit'>
</td>
</tr>
<tr>
<td>
Unit Price:
</td>
<td>
<input type='text' name='uprice'>
</td>
</tr>
<tr>
<tr>
<td>
<label for='file'>Image:</label></td>
<td><input type='file' name='file' id='file' /> 
</td>
</tr>
<tr>
<td>
Manufacturers:
</td>
<td>
<?php
include('connect.php');
$query = 'SELECT manu_name FROM manufacturers ORDER BY manu_name';
$result = mysql_query($query) or die(mysql_error());
?>
<select name='manu_name'>
<?php
while($row = mysql_fetch_array($result))
{
$manu_name = $row['manu_name'];
echo '<option>'.$manu_name.'</option>';
}
?>
</select>
</td>
</tr>
<tr>
    <td>
    </td>
<p class='link'><a href='manu_add.php'>Add</a> |
<a href='manu_delete.php'>Delete</a></p>
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