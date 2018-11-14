<?php
$rid=$_GET['hidden2'];
$con=mysqli_connect("localhost","root","","feedback");
if(!$con){
	die("Error :".mysqli_error($con));
}

	if(isset($_GET['accept']))
	{
	$sql="UPDATE review set authorize=1 where rid='$rid'";
	header('location:admin.php');
	$result = mysqli_query($con,$sql);
	if(!$result){
		die("query..!".mysqli_error($con));
	}
	else{
		header("location:admin.php");
	}
	}
	else{
		$sql="DELETE from review where rid='$rid'";
		$result = mysqli_query($con,$sql);
		if(!$result){
			die(mysqli_error($con));
		}
		

	}
	/*
	if(mysqli_query($con,$sql))
		echo "Successful";
	else mysqli_error($con);
	}*/
	


?>