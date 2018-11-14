

<html>
<head>
  <?php
  session_start();
  $_SESSION['user'] = "true";

    
    if(isset($_GET['Message'])){
      $Message=$_GET['Message'];

}   
?>
<script>

  alert ('<?php echo $Message; ?>');
  </script>





  

<style>
body  {
    background-image: url(https://assets.awwwards.com/awards/images/2015/04/pattern.jpg);
    background-color: #cccccc;
}


#div1 {
    position: fixed;
    border-radius: 25px;
    border: 2px solid grey;
    padding: 20px; 
    width: 450px;
    height: 300px; 
    align:center;
     margin-top: 180px;
     margin-left: 480px;
}
.comp {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 20px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}

#input {
  padding: 0.2em; 
  box-sizing: border-box;
  width: 100% ;
} 
</style>

</head>
<div id='div1'>

<body>
<h1>admin sign in</h1>
<hr>
  <form action="/adminauth.php" method='post'>
    <h3>Email</h3>
<input type="text" id="authemail"placeholder="Email" name="authemail"></input>
<h3>password</h3>
<input type="password" id="authpws" placeholder="password" name="authpws"></input>
<br>
<br>
  <input type="submit" value="Submit">


</div>
  </form>
  </body>














</html>