  <?php
require('connect.php');

if (isset ($_POST['username'])&&isset($_POST['password'])){
   // $username =trim($_POST['username']);
    //$password = trim($_POST['password']);
    $sql = mysql_query("SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password'");
	if(mysql_num_rows($sql) > 0){
        echo "Welcome";
        exit();
    }else{
        echo"Please try again";  
		
    }
}