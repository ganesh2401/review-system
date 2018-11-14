<?php
session_start();
if(isset($_POST['submit'])){

$name = $_POST['product_name'];
$type = $_POST['product_type'];
$brand = $_POST['product_brand'];
$image = $_POST['image'];
$desc = $_POST['product_Desc'];
$cost = $_POST['cost'];


$conn = new mysqli('localhost', 'root','', 'feedback');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO product_info (name,type,brand,discription,cost,image) VALUES ('$name','$type','$brand','$desc','$cost','$image')";

if ($conn->query($sql) === TRUE) {
  $Message = "product add successfully";

    header("location:adminpanel.php?Message=$Message");



}
   

else {
    echo "Error: " . $sql . "<br>" . @$conn->error;
}


$conn->close();
}
?>


