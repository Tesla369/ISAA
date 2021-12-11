<?php  
 require('db_connect.php');

if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
	
// Assigning POST values to variables.
$username = mysqli_real_escape_string($connection, $_POST['user_id']);
$password = mysqli_real_escape_string($connection, $_POST['user_pass']);

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `user_login` WHERE username='$username' and Password='$password'";
//$query = sprintf("SELECT * FROM `user_login` WHERE username='%s' AND Password='%s'", mysql_real_escape_string($username), mysql_real_escape_string($password));
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
echo "<script type='text/javascript'>alert('Logged in Successfully')</script>";

}else{
//echo "Invalid Login Credentials";
echo "<script>alert('Invalid Login Credentials')</script>";
}
}
?>
