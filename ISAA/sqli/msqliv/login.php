<!DOCTYPE html >
<html>
<head>
<title>LOGIN</title>
</head>
<body>
<div align="center">

<h1>LOGIN</h1>
    <form id="login-form" method="post" action="authen_login.php" >
        <table class="bottom-container" border="0.5" >
            <tr>
                <td><label for="user_id">User Name</label></td>
                <td><input type="text" name="user_id" id="user_id"></td>
            </tr>
            <tr>
                <td><label class="hh" for="user_pass">Password</label></td>
                <td><input type="password" name="user_pass" id="user_pass"></input></td>
            </tr>
			
            <tr>
				
                <td><center><input class="btn" type="submit" value="Submit" /></center>
                <td><center><input class="btn" type="reset" value="Reset"/></center>
				
            </tr>
        </table>
    </form>
</div>
</body>
</html>
