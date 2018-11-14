<?php
session_start();
 if($_SESSION['user1'] == "false"){
       
              header("Location:home page.php");
       

    }
    else{

    


?>





<html>
<head>
	<h1 style="font-family:courier;font-size:200%;" align="center">Review system</h1>
		<hr>
		<style>



		body  {
    
    background-color: #cccccc;
}
		a
{
   text-decoration:none;
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

$sql = "SELECT *FROM product_info WHERE type='camera'";

$result=mysqli_query($conn,$sql);
 echo"<col width='80px'>";
echo"<tr>";
$rowcount=mysqli_num_rows($result);
$count=0;

while($row=mysqli_fetch_array($result))

{


	$image=$row['image'];
	echo '<div id="id($count+1)" style="float:left; margin-left:30px">';

echo"<td>";

 echo "<img class='image' src='image/$image' width='150' height='150'>";

	echo "<a href='product.php?pid=".$row['pid']."'>".$row['name']."</a>";

echo "</td>";
echo"&nbsp;&nbsp;";
$count++;

}
echo "</tr>";

$conn->close();


}
?>

</body>

</html>

<?php } ?>