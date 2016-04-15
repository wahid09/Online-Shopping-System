<?php
include("include/header.php");
?>  

   
    <div class="center_content">
    <div class="center_title_bar">Log In</div>
    
      <div class="prod_box_big">
          <div class="top_prod_box_big"></div>
            <div class="center_prod_box_big">               
               
  <?php
//include('connect.php');

if (isset ($_POST['submit'])){
    $username =htmlspecialchars(mysql_escape_string($_POST['username']));
    $pass =htmlspecialchars(mysql_escape_string($_POST['pass']));
    //$pass=md5($pass);
    $sql = mysql_query("SELECT * FROM `user` WHERE `Username` = '$username' AND `Password` = '$pass'");
	if(mysql_num_rows($sql) > 0){
        echo "<script>alert('Now you can buy products from our store:')</script>";
        $_SESSION['username']=$row['username'];
        exit();
    }
    else{
        echo "<script>alert('Please try again')</script>";  
    }
}
?>

<form action="log.php" method="POST">
<table>
<tr>
<td><p>User Name:</p></td>
<td><input type="text" name="username"/><br /></td>
</tr>
<tr>
<td><p>Password:</p></td> 
<td><input type="password" name="pass"/></td><br />
</tr>
<tr>
<td>
</td>
<td><input type="submit" name="submit" value="Log In"/></td>
</tr>
</table>
</form> 
 </div>                        
        </div>
   </div><!-- end of center content -->
<?php
include("include/footer.php");
?>