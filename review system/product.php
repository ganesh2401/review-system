<html>
<head>
	<style>
	body  {
    
    background-color: #cccccc;
}
</style>

</head>
<body>
	<tr>
    <th><a href="insert.php">Home</a></th>
    <th><a href="MOBILE.php">&nbsp;&nbsp;&nbsp;Mobile</a>
    <th><a href="camera.php">&nbsp;&nbsp;&nbsp;camera</a></th>
    <th><a href="logout.php">&nbsp;&nbsp;&nbsp;logout</a></th>
    <th><a href="loginpage.php">&nbsp;&nbsp;&nbsp;admin login</a></th>

</th>
  </tr>

<?php
session_start(); 


if(!isset($_SESSION['user'])){
       //send them back
       header("Location: home page.php");
    }

    else{




if(isset($_GET["pid"]))

    {
        $pid = $_GET["pid"];
      

    
    }
// Instructions if $_POST['value'] exist 

$conn=new mysqli('localhost','root','','feedback');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql2="SELECT *from product_info where pid=$pid";
$result=mysqli_query($conn,$sql2);
echo '<h1 align="center">product detail</h1>';
echo'<hr>';
while($row=mysqli_fetch_array($result))
{	$image=$row['image'];
	$name=$row['name'];
	$discription=$row['discription'];
	$cost=$row['cost'];
	echo "<br><br>";
	echo "<table width ='300px' align='center' style='font-size: 15px;'cellspacing='30'>";
	echo "<tr><th><img class='image' src='image/$image' width='100' height='80'></th></tr>";
	echo"<tr><th>Name</th>:<th>$name</th></tr>";
	echo"<tr><th>discription</th>:<th>$discription</th></tr>";
	echo"<tr><th>cost</th>:<th>$cost.RS</th></tr>";
	echo "</table>";
	echo "<div align='center'>";
	echo "<form action ='review.php' method='GET'>";
	echo "<textarea rows='5' cols='30' placeholder='Enter your review' name='review'></textarea>";
	echo "<br>";
	echo "<br>";
	echo "<input type=text name='name1'>name</input>";
	echo "<input type='hidden' name='hidden' value='".$pid."'></br></br>";


	echo "<input type='submit' value='submit'>";
	echo "</form></div>";

}


$sql3= "SELECT * from review where pid='$pid' and authorize=1";
$result1=mysqli_query($conn,$sql3);
	if(!$result1){
		die("query failed".mysqli_error($conn));
	}

	if(mysqli_num_rows($result1)>0)
	{
		while($rows=mysqli_fetch_assoc($result1))
{			
			echo "<table cellspacing='100' align='center'>";
			echo "<tr><th>Name</th><th>Review</th><th>Time</th></tr>";
			echo "<tr><td>".$rows['name']."</td><td>".$rows['review']."</td><td>".$rows['time']."</td></tr>";
			echo "</table>";
			}
		
	}
	else {
		echo "No reviews";
	}

echo "</div>";


}
?>
</body>
</html>
