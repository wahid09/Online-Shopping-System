<?php
session_start();
$connect = mysql_connect("localhost", "root","")
or die("Hey loser, check your server connection.");
mysql_select_db("my_site");
if (isset($_POST['qty'])) {
$qty = $_POST['qty'];
}
if (isset($_POST['products_prodnum'])) {
	$prodnum = $_POST['products_prodnum'];
}
if (isset($_POST['modified_hidden'])) {
$modified_hidden = $_POST['modified_hidden'];
}
if (isset($_POST['modified_quan'])) {
$modified_quan = $_POST['modified_quan'];
}
$sess = session_id();
$action = $_REQUEST['action'];
switch ($action) {
case "add":
$query = "INSERT INTO carttemp (
carttemp_sess,
carttemp_quan,
carttemp_prodnum)
VALUES ('$sess','$qty','$prodnum')";
//$message = "<div align=\"center\"><strong>Item
//added.</strong></div>";
echo "<script>alert('Item Added')</script>";
break;
case "change":
$query = "UPDATE carttemp
SET carttemp_quan = '$modified_quan'
WHERE carttemp_hidden = '$modified_hidden'";
//$message = "<div align='center'><strong>Quantity
//changed.</strong></div>";
echo "<script>alert('Quantity changed')</script>";
break;
case "delete":
$query = "DELETE FROM carttemp
WHERE carttemp_hidden = '$modified_hidden'";
//$message = "<div align='center'><strong>Item
//deleted.</strong></div>";
echo "<script>alert('Item deleted')</script>";
break;
case "empty":
$query = "DELETE FROM carttemp WHERE carttemp_sess = '$sess'";
//$message = "<div align='center'><strong>Cart
//emptied.</strong></div>";
echo "<script>alert('Cart emptied')</script>";
break;
}
$results = mysql_query($query)
or die(mysql_error());
//echo $message;
include("cart.php");
?>
