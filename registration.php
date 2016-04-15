<?php
include('include/header.php');
?>
   <div class='center_content'>
   	<div class='center_title_bar'>Sign Up</div>
    
    	<div class="prod_box_big">
        	<div class="top_prod_box_big"></div>
            <div class="center_prod_box_big"> 
<?php
$fnameError=$lnameError=$emailError=$userError=$passError=$pass1Error=$countryError="";
$fname=$lname=$uname=$pass=$pass1=$email=$country="";
if(isset($_POST['submit']))
{
    $fname = htmlspecialchars(mysql_escape_string($_POST['firstname']));
    $lname = htmlspecialchars(mysql_escape_string($_POST['lastname']));
    $uname = htmlspecialchars(mysql_escape_string($_POST['username']));
    $email = htmlspecialchars(mysql_escape_string($_POST['email']));
    $pass = htmlspecialchars(mysql_escape_string($_POST['password']));
    $pass1=htmlspecialchars(mysql_escape_string($_POST['password1']));
    $country=htmlspecialchars(mysql_escape_string($_POST['country']));
    $sex=htmlspecialchars(mysql_escape_string($_POST['sex']));
    $submit=true; 
    if(empty($fname))
    {
      $fnameError="Firstname is required";
      $submit=false;
    }
    else if(!preg_match("/^[a-zA-Z]*$/",$fname))
    {
        $fnameError="Only letters and whitespace allowed";
        $submit=false;
    }
    if(empty($lname))
    {
      $lnameError="Lastname is required";
      $submit=false;
    }
    else if(!preg_match("/^[a-zA-Z]*$/",$lname))
    {
        $lnameError="Only letters and whitespace allowed";
        $submit=false;
    }
    if(empty($uname))
    {
      $userError="Username is required";
      $submit=false;
    }
    if(empty($email))
    {
      $emailError="Email is required";
      $submit=false;
    }
   else if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
    {
        $emailError="Invalid email format";
        $submit=false;
    }
   if(empty($pass))
    {
      $passError="Password is required";
      $submit=false;
    }
    else if(strlen($pass)<6)
    {
      $passError="Password is too short";
      $submit=false;
    }
     else if($pass1!=$pass)
    {
      $pass1=htmlspecialchars($pass1);
      $pass1Error='Password does not match';
      $submit=false;
    }
    else
    {
      $pass =htmlspecialchars($pass);
    }
    if(empty($country))
    {
      $countryError="Country name is required";
      $submit=false;
    }
    else if(!preg_match("/^[a-zA-Z]*$/",$country))
    {
        $countryError="Only letters and whitespace allowed";
        $submit=false;
    }
    if($submit)

        {
       $sql = mysql_query("SELECT* FROM user WHERE Username = '$uname'");
        //echo mysql_num_rows($sql);
        if(mysql_num_rows($sql) > 0) {
            $userError="Sorry that user already exists";
        }
        else
        {
       mysql_query("INSERT INTO user (Firstname,Lastname,Email,Username,Password,Country,Sex) VALUES ('$fname','$lname','$email','$uname','$pass','$country','$sex')") or die(mysql_error());
      } 
  }
  }
?>
<form  id='form' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
<table cellpadding="10px" cellspacing="2px">
<tr>
<td id="txt">
<p>First Name*</p><br><span class='error'><?php echo $fnameError;?></span>
</td>
<td><input type="text" name="firstname" value="<?php echo $fname;?>"></td>
</tr>
<tr>
<td id="txt">
<p>Last Name*</p><br><span class='error'><?php echo $lnameError;?></span>
</td>
<td><input type="text" name="lastname" value="<?php echo $lname;?>"></td>
</tr>
<tr>
<td id="txt">
<p>Email*</p><br><span class='error'><?php echo $emailError;?></span>
</td>
<td><input type="text" name="email" value="<?php echo $email;?>"></td>
</tr>
<tr>
<td id="txt">
<p>User name*</p><br><span class='error'><?php echo $userError;?></span>
</td>
<td><input type="text" name="username" value="<?php echo $uname;?>"</td>
</tr>
<tr>
<td id="txt">
<p>Password*</p><br><span class='error'><?php echo $passError;?></span>
</td>
<td>
<input type="password" name="password">
</td>
</tr>
<tr>
<td id="txt">
 <p>Confirm Password*</p><br><span class='error'><?php echo $pass1Error;?></span>
</td>
<td>
<input type="password" name="password1">
</td>
</tr>
<tr>
<td id="txt">
<p>Country*</p><br><span class='error'><?php echo $countryError;?></span>
</td>
<td>
<input type="text" name="country">
</td>
</tr>
<tr>
<td id="txt">
<p>Sex</p>
</td>
<td>
<select name="sex">
  <option value="1">Male
    <option value="2">Female
    </select>
</td>
</tr>
<tr>
<td colspan="2" align="right">
<input type="submit" name="submit" id="login" value="Register">
</td>
</tr>
</table>
</form>                                    
     </div>
</div>  
    </div><!-- end of center content -->


<?php
include('include/footer.php');
?>