<?php

echo "<h1 align='center'>admin page</h1>";
echo "<hr>";

echo "<a href='insert.php'><h3>home</h3></a>";echo "<a href='adminpanel.php'><h3>addproduct</h3></a>";echo "<a href='logout.php'><h3>logout</h3></a>";






 session_start();

  if($_SESSION['user'] == "false"){
       
              header("Location:loginpage.php");
       

    }
    else{

	$conn=mysqli_connect('localhost','root','');
if(!mysqli_select_db($conn,'feedback'))
{
	die(mysqli_error($conn));
}
else
{
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