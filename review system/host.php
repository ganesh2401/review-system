
<html>




<?php

$conn = new mysqli('localhost', 'root','', 'feedback');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO login (email, password,name,age) VALUES ('".$_GET['val1']."','".$_GET['val2']."','".$_GET['val3']."','".$_GET['val4']."')";

if ($conn->query($sql) === TRUE) {

header("location: home page.php");

}
   

else {
    echo "Error: " . $sql . "<br>" . @$conn->error;
}

$conn->close();
?>




?>
</html>