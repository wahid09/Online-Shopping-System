<?php
//connect to the database - either include a connection variable file
//or type the following lines:
$connect = mysql_connect("localhost", "root","")
or die("Hey loser, check your server connection.");
mysql_select_db("my_site");
//Define the temp table
$query = "CREATE TABLE manuproducts(
products_prodnum INT(10) NOT NULL  AUTO_INCREMENT,
products_name VARCHAR(20) NOT NULL,
products_proddesc TEXT NOT NULL,
products_unit INT(10) NOT NULL,
products_price DEC (6,2) NOT NULL,
image VARCHAR(100) NOT NULL,
manu_name VARCHAR(20) NOT NULL,
products_dateadded DATE NOT NULL,
PRIMARY KEY(products_prodnum))";
$manuproduct = mysql_query($query)
or die(mysql_error());
echo "Temporary cart table created successfully!";
?>