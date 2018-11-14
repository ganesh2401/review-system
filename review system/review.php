<?php

$review=$_GET['review'];
$pid=$_GET['hidden'];
$name=$_GET['name1'];
$date=date('y-m-d');
echo $name;

$conn=new mysqli('localhost','root','','feedback');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
    session_start();
$sql="INSERT INTO review (pid, name, review, authorize,time) VALUES ('$pid','$name','$review','0','$date')";
$result=mysqli_query($conn,$sql);
 if(!$result)
    {
        die("Error msg:".mysqli_error($conn));
    }
    else
    {
	echo '<h2><a href="insert.php">go back</a></h2>';
    }

    }
    ?>
    

