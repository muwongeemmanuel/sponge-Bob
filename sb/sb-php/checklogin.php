<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="sb"; // Database name 
$tbl_name="login"; // Table name 

// Connect to server and select databse.
$connection = mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'test');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}


// username and password sent from form 
$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 

// To protect MySQL injection (more detail about MySQL injection)
/*$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($myusername);
$mypassword = mysqli_real_escape_string($mypassword);*/

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==0){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myusername");
session_register("mypassword"); 
header("location:admin.php");
}
else {
echo "Wrong Username or Password";
}
?>