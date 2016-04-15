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

<head>
<style type="text/css">
footer1{
	position: absolute;
	top: 500px;
	width: 770px;
	height:40px;
	background-color: #ffffff;
	text-align: center;
}
</style>
<head>
<?php
include('connect.php');
if(isset($_POST['submit']))
{
$id=trim($_POST['manu_id']);
$sql=mysql_query("DELETE FROM manufacturers WHERE manu_id=$id");
header('location:manu_delete.php');

}
else
{
$form=<<<EOT
<link rel="stylesheet" type="text/css" href="style.css"  />
<div id="header"><p class="outset">Enter your id</p></div>
<form action='manu_delete.php' method='post'>
<table>
<tr>
<td><p>ID:</p></td>
<td><p><input type='text' name='manu_id'></p></td>
</tr>
<tr>
<td>
</td>
 <td></p><input type='submit' name='submit' value='delete'></p></td>
 </tr>
 <table>
</form>
<div id='footer1'><p class='outset'>
	<p><a href='add.php'>Product</a></p>
</p></div>
EOT;
echo $form;
}
?>