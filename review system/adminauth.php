<?php

$email = $_POST['authemail'];
$pwd = $_POST['authpws'];


$conn = new mysqli('localhost', 'root','', 'feedback');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM admin WHERE email = '$email' and password = '$pwd'";

$result=mysqli_query($conn,$sql);

$count=mysqli_num_rows($result);

if ($count==1) {

header("location:admin.php");

}
   

else {
	$Message = "authentication failed please chaeck password";

    header("location:loginpage.php?Message=$Message");

}

$conn->close();




?>