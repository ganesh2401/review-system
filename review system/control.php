 <html>
 <style>
 body  {
    
    background-color: #cccccc;
}
</style>

<tr>
    
    <th><a href="logout.php">&nbsp;&nbsp;&nbsp;logout</a></th>
  

</th>
  </tr>


 <?php
 session_start();

if(!isset($_SESSION['user'])){
       //send them back
       header("Location: home page.php");
    }




    else{

    	$conn = new mysqli('localhost', 'root','', 'feedback');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
	$sql="SELECT * from review where authorize='0'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_array($result))
		{
			$name=$row['name'];
			$review=$row['review'];
			$rid=$row['rid'];
			echo "<form action='accept.php' method='get'>";
			echo "<table cellspacing='50'><tr><th>Username</th><th>Review</th><th>Result</th></tr>";
			echo "<tr><td>$name</td><td>$review</td>";
			echo "<input type='hidden' name='hidden2' value='".$rid."'>";
			echo "<td><input type='submit' value='accept' name='accept'>&nbsp;&nbsp;<input type='submit' value='reject' name='reject'>";
			echo "</table>";
			echo "</br></br></form>";
		}
	} 


}







         
    }




?>

 </html>   