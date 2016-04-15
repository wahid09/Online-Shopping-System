 <?php
include('connect.php');
$choosen=$_POST['category'];
//echo "You have choosen $choosen";
$sql="insert into category(category_name) values('$choosen')";
mysql_query($sql) or die(mysql_error());
header('location:dropdown.php');
?>