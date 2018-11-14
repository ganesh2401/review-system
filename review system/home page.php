
<!DOCTYPE html>
<html lang="en">
<head>


    <?php
    
    if(isset($_GET['Message'])){
      $Message=$_GET['Message'];
     
}   
?>
<script>

  alert ('<?php echo $Message; ?>');
  </script>



<meta charset="UTF-8">
<title>Open Bootstrap Modal on Page Load</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#myModal").modal('show');
    });

     function checkEmail(str)
 {   var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!re.test(str)){
    alert("Please enter a valid email address");
                    }
    else{
        return true;
    }                                   
     }

     function Validate() {
        var password = document.getElementById("inputPws").value;
        var confirmPassword = document.getElementById("inputConfirmPws").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
    function checked() {

  var checkBox = document.getElementById("ch");
 if (checkBox.checked = true){
return true
  } 
  else {
    alert("please agree term and condition")
  }
}


    //function login1() {

       

      //      $('#login').click(function() {
        //    var val1 = $('#email').val();
          //  var val2 = $('#pws').val();
            
            //window.location = "loginauth.php?val1=" +val1+ "&val2=" +val2;  
             //$_SESSION['login_user']=$val1;
       // });
    //}

    function non() {
    var x, 

    x = document.getElementById("age").value;

    // If x is Not a Number or less than one or greater than 10
    if (isNaN(x)) {
        alert("input is not legal");
    } else {
        return true;
    }
}

    function succesfull(){
        if(Validate())
        { 
            if(checked()){
                if(non())
                        {

            $('#submit').click(function() {
            var val2 = $('#inputConfirmPws').val();
            var val1 = $('#inputEmail').val();
            var val3 = $('#name').val();
            var val4 = $('#age').val();
            
            window.location = "host.php?val1=" +val1+ "&val2=" +val2+ "&val3=" +val3+ "&val4=" +val4;  
        });



}
        }
                }
                        }
function admin1()
{
    window.location="loginpage.html";

}

//log in data send



</script>
</head>
    
<body data-spy="scroll" data-target="myModal2" data-offset="20" >
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <style> #close{float: right}</style>
                
                <h4 class="modal-title">Sign in</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="close">&times;</button>
            </div>
            <div class="modal-body">
                
                <form action ="loginauth.php" method="post">

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="email" id="email" name="email" autofocus="autofocus">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="password" id="pws" name="password">
                    </div>

                    <button type="submit" class="btn btn-primary" id ="login" onclick ="login1()">login</button>
                       <style> #register{float: right}</style>
                    <button type ="button" id="admin" onclick ="admin1()" class="btn btn-secondary">admin</button>
                    <button type="button" class="btn btn-secondary" id="register" data-toggle="modal" data-target="#myModal2" data-dismiss="modal">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false" >
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                             <h4 class="modal-title" id="myModalLabel" align="centre">Registration form</h4>
                            <style> #close1{float: right}</style>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" id=close1>
                                <span aria-hidden="true">&times;</span>
                            </button>
                           
                        </div>
                        <div class="modal-body">
                            <form class="pb-modalreglog-form-reg">
                                <div class="form-group">
                                    <div id="pb-modalreglog-progressbar"></div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    
                                    <div class="input-group pb-modalreglog-input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                        <input type="email" class="form-control" id="inputEmail" placeholder="Email" autofocus="autofocus" onblur="checkEmail(this.value)">
                 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <div class="input-group pb-modalreglog-input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                        <input type="password" class="form-control" id="inputPws" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="confirmpassword">Confirm password</label>
                                    <div class="input-group pb-modalreglog-input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                         <input type="password" class="form-control" id="inputConfirmPws" placeholder="Confirm Password"onblur="Validate()">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">NAME</label>
                                    <div class="input-group pb-modalreglog-input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-globe"></span></span>
                                        <input type="text" class="form-control" id="name" placeholder="NAME">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="age">Age(above 18)</label>
                                    <div class="input-group pb-modalreglog-input-group">
                                        <input id="age">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <input type="checkbox" id="ch" name="chs" onclick= "checked()">
                                    I agree with <a href="#">terms and conditions.</a>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            
                            <button type="submit" class="btn btn-third" id="submit"onclick="succesfull()" >Sign up</button>
                            <style> #close{float: right}</style>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>


                                       