<?php
include('connect.php');
$pdate=trim($_POST['products_dateadded']);
$pid=trim($_POST['products_prodnum']);
$pname=trim($_POST['products_name']);
$pdesc=trim($_POST['products_proddesc']);
$unit=trim($_POST['products_unit']);
$price=trim($_POST['products_price']);
$category=trim($_POST['category']);
$tmp_name=$_FILES['file']['tmp_name'];
$name=$_FILES['file']['name'];
copy($tmp_name, "upload/$name");
/*$filename=null;
$filename= $_FILES['file']['name'];
if($filename!=null)
{
move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" .$filename);
$image_url="upload/" .$filename;
}
else $image_url=null;*/
$sql="insert into product (products_dateadded,products_prodnum,products_name,products_proddesc,products_unit,products_price,Image,Category) values('$pdate','$pid','$pname','$pdesc','$unit','$price','$name','$category')";
mysql_query($sql) or die(mysql_error());
header('location:add.php');
?>