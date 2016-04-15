<!DOCTYPE html>
<html>
    
    <head>
        <link rel="stylesheet" href="../formValidation/style.css"
        type="text/css" />
        <script src="../jquery_latest.js" type="text/javascript"></script>
        <script src="../formValidation/script.js" type="text/javascript"></script>
    </head>
    
    <body>
         <h2><center>Please enter your information</center></h2>

        <div id="form_container"align="center">
            <form id="reg_form" action="registration.php" method="post">
                <label>User Name</label>
                <input type="text" name="username" placeholder="User Name"
                /> <span id="usernameInfo"></span><br>
                 
                <label>Password</label>
                <input type="password" name="password" placeholder="Password"
                /> <span id="PasswordInfo"></span><br>

                <input type="submit" value="Login" />
            </form>
        </div>
    </body>

</html>