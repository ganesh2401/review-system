<?php
session_start();


    


?>


<html>
<head>
	<div style="background-color:#ccbbaa;padding:auto;border-radius: 25px;">
	<h1 style="font-family:courier;font-size:200%;" align="center">Review system</h1> </div>
	 <?php
    
    if(isset($_GET['username'])){
      $username=$_GET['username'];
      echo "<h4 align='right'>Welcome, $username &nbsp</h4>";


}   
?>

		<hr>
		<style>


		body  {
    
    background-color: #cccccc;
}
		a
{
   text-decoration:none;
}

#div {
height: 40px;
    width: 100%;
    background-color: powderblue;
}

    }
	</style>

<body>
	
<table>

  <tr>


    <th><a href="insert.php">Home</a></th>
    <th><a href="MOBILE.php">&nbsp;&nbsp;&nbsp;Mobile</a>
    <th><a href="camera.php">&nbsp;&nbsp;&nbsp;camera</a></th>
    <th><a href="logout.php">&nbsp;&nbsp;&nbsp;logout</a></th>
    <th><a href="loginpage.php">&nbsp;&nbsp;&nbsp;admin login</a></th>

</th>
  </tr>
</table>

<?php



		$conn = new mysqli('localhost', 'root','', 'feedback');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT *FROM product_info";
$sql4="SELECT name FROM login";
$name2=mysqli_query($conn,$sql);

$result=mysqli_query($conn,$sql);
 echo"<col width='80px'>";
//echo"<tr>";
$rowcount=mysqli_num_rows($result);
$count=0;

while($row=mysqli_fetch_array($result))

{


	$image=$row['image'];
	echo '<div id="id($count+1)" style="float:left; margin-left:30px">';
echo "<tr>";
echo"<td>";


 echo "<img class='image' src='image/$image' width='50' height='50'>";
echo "<td>";
 echo "</tr>";
 echo "<tr>";
 echo "<td>";
	echo "<a href='product.php?pid=".$row['pid']."'>".$row['name']."</a>";

echo "</td>";
echo "</tr>";
$count++;

}
//echo "</tr>";

$conn->close();



?>

</body>

</html>

