<div id='main_content'> 
   
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
            </div>

   <link href='style.css' rel='stylesheet' type='text/css'>

<div id='header1'>
	<a href='add.php'>Add</a> |
	<a href='delete.php'>Delete</a> |
	<a href='edit.php'>Edit</a>
</div>

<?PHP
$host = "localhost";
$user = "root";
$db = "my_site";

$link = mysql_connect($host, $user) or die("Couldn't connect".mysql_error());
if ($link) {
    mysql_select_db($db) or die("Couldn't select $db :".mysql_error());
}
$result = mysql_query("SELECT * FROM products");
$num_rows = mysql_num_rows($result);
print "<link href='style1.css' rel='stylesheet' type='text/css'>";
print "<h2>There are currently $num_rows rows in the table.<br/><h2>";
print "<table border=1>";
print "<th>product_id</th>";
print "<th>cat_id</th>";
print "<th>product_name</th>";
print "<th>Description</th>";
print "<th>Total_unit</th>";
print "<th>Unit_price</th>";
print "<th>Image</th>";
print "<th>Category</th>";
print "<th>Edit</th>";
while ($a_row = mysql_fetch_row($result)) {
    print "<tr>";
    foreach ($a_row as $field) {
        print "<td>$field</td>";
    }
    print "<td><a href=\"p_edit.php?id=".$a_row[0]."\">Edit</a></td>";
    print "</tr>";
}
print "</table>";
mysql_close($link);
?>