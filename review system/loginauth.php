
<?php

session_start();
$email = $_POST['email'];
$pwd = $_POST['password'];


$conn = new mysqli('localhost', 'root','', 'feedback');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM login WHERE email = '$email' and password = '$pwd'";

$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

$count=mysqli_num_rows($result);

$username=$row['name'];
if ($count==1) {
 $_SESSION['user'] ="true";
 

header("location:insert.php?username=$username");
}
   

else {
	$Message = "authentication failed please check email or password";
    header("location:home page.php?Message=$Message");
}

$conn->close();
 $_SESSION['user'] = $username;



?>