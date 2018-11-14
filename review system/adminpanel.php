<?php
session_start();
 if($_SESSION['user'] == "false"){
       
              header("Location:home page.php");
       

    }
    else{

    


?>






<html>
<head>
	<div style="background-color:#ccbbcc;padding:auto;border-radius: 25px;">
	<h1 style="font-family:courier;font-size:200%;" align="center">WELCOME TO ADMIN PANEL </h1> </div>
<style type="text/css"> 
a{
	text-decoration:none;
	align:center; 
}

label {
   
    text-align: right;
    clear: both;
    float:left;
    margin-right:15px;
}

form { 
margin: auto; 
width:500px;
padding-left: 200px;
}



</style>



<?php
    
    if(isset($_GET['Message'])){
      $Message=$_GET['Message'];

}   
?>
<script>

  alert ('<?php echo $Message; ?>');

  </script>

<?php $Message ="" ?>


</head>
<hr>
<div style="background-color:#ccbbcc;padding:10px;border-radius: 10px; ">
<a href="insert.php" >&nbsp;&nbsp;&nbsp;HOME</a>
<a href="control.php" >&nbsp;&nbsp;&nbsp;ADMIN PANEL</a>

</div>
<hr>
<h2 align ='center'>ADD product Detail</h2>

<hr>
<div style="background-color:#ccbbcc;padding:auto; width:auto;border-radius: 10px; ">
<form action="addproduct.php" method="POST">
	<lable for ="product_name">product name:</lable>

<input type="text" id= product_name name="product_name" placeholder="product name" required></input>
<br>
<br>

<lable for ="product_type">product type:&nbsp&nbsp</lable>
<select id=product_type name="product_type" required>
   <option disabled selected value> -- select an option -- </option>
  <option value="mobile">mobile</option>
  <option value="camera">Camera</option>
 
</select>
<br>
<br>
<lable for ="product_brand"> product brand:</lable>
<select id=product_brand name=product_brand required>
  <option disabled selected value> -- select an option -- </option>
  <option value="sony">Sony</option>
  <option value="samsung">Samsung</option>
 	<option value="apple">Apple</option>
 	<option value="canon">Cannon</option>
	<option value="nickon">Nickon</option></select>
<br>
<br>
<lable for ="image">image name:</lable>

<input type="text" name='image' placeholder="image" required></input>
<br>
<br>
<lable for ="product_Desc">Product desc:</lable>

<input type="text" name="product_Desc" placeholder="product desc" style="height: 100px"; required></input>
<br>
<br>
<lable for ="cost">product cost:</lable>

<input type="text" name="cost" placeholder="cost" required></input>
<br>
<br>
<button type="submit" id="submit" value="Submit" name="submit">Add Product</button>
<button type="reset">RESET</button>










</div>



</html>


<?php   }  ?>