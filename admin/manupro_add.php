<?php
include('connect.php');
$date=trim($_POST['pdate']);
$pname=trim($_POST['pname']);
$description=trim($_POST['description']);
$tunit=trim($_POST['tunit']);
$uprice=trim($_POST['uprice']);
$manu_name=trim($_POST['manu_name']);
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
$sql="insert into manuproducts (products_name,products_proddesc,products_unit,products_price,image,manu_name,products_dateadded) values('$pname','$description','$tunit','$uprice','$name','$manu_name','$date')";
mysql_query($sql) or die(mysql_error());
header('location:manufacture.php');
?>