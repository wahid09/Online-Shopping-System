
<link rel="stylesheet" type="text/css" href="style3.css"  />

  <?php
  session_start();
require('connect.php');

/*if (isset ($_POST['submit'])){
    $username =trim($_POST['username']);
    $password = trim($_POST['password']);
    $sql = mysql_query("SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password'");
	if(mysql_num_rows($sql) > 0){
        echo "<h3>Welcome to $username</h3>";
        $_SESSION['username']=$row['username'];
    }else{
        echo"Please try again";  
		
    }


else {*/

$form = <<<EOT
<body> 
<form action="main.php"method="post">
<table>
<center><p>Enter your information</p></center>
<tr>
 </td><td><p> User Name:</p></td> 
 <td><p> <input type="text" name="username"></p></td></br>
</tr>
<tr>
	<td><p>Password:</p></td>
     <td><p><input type="password" name="password"></p></td>
 </tr>
 <tr>
 	<td>
 	</td>
 	<td><p><input type="submit" name="submit" value="Log in"></p></td>
</table>
	</form>
</body>
EOT;

echo $form;

//}
?>  
<?php
session_destroy();
?>           