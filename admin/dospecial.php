<?php
include('connect.php');
$pnum=trim($_POST['pnum']);
$date=trim($_POST['pdate']);
$pname=trim($_POST['pname']);
$desc=trim($_POST['description']);
$price=trim($_POST['uprice']);
$unit=trim($_POST['tunit']);
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
$sql="insert into special (products_prodnum,products_name,products_proddesc,products_unit,products_price,image,products_dateadded) values('$pnum','$pname','$desc','$unit','$price','$name','$date')";
mysql_query($sql) or die(mysql_error());
header('location:special.php');
?>