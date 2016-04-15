<link href="style.css" rel="stylesheet" type="text/css">
<?php
include('connect.php');
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
    <a href='special.php'>Add</a> |
    <a href='sp_delete.php'>Delete</a> |
    <a href='sp_edit.php'>Edit</a>
</div>
     <form action='dospecial.php' method='post' enctype='multipart/form-data'>
                <table>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <p>Enter your Product name,Image AND Unit price:</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Products ID:
                        </td>
                        <td>
                            <input type='text' name='pnum'>
                        </td>
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
                        <td>Product Name:</td>
                        <td><input type='text' name='pname'></td>
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
                        <td>Image:</td>
                        <td><input type='file' name='file'></td>
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
                        <td>Unit Price:</td>
                        <td><input type='text' name='uprice'>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td><input type='submit' value='ADD'>
                    </tr>
                </table>
             <form>