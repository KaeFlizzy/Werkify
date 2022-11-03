<?php
session_start();
include "db_conn.php";
?>
<!DOCTYPE html>
<html> 
    <head> 
        <title>Create New Account</title> 
        <link rel="stylesheet" type="text/css" href="css/signup.css" /> 
    </head> 
    <body> 
       <div class="topbar">
       <h2>WERKIFY</h2>
        <p>Your Human Resource Manager</p>
</div>
             <div class="title">    <h1>Registration Form</h1> </div>
         <div class="panel-body"> 
            <form action="signUp2.php" method="post"> 
            <div class="form-group">
                 <label for="userName">Full Name</label>
                  <input type="text" class="form-control" id="userName" name="username" /> 
            </div>
            <div class="form-group">
                 <label for="firstName">Username</label>
                  <input type="text" class="form-control" id="name" name="name" />
                 
            </div>
            
             <div class="form-group"> 
                <label>Password</label> 
                <input type="password" class="form-control" id="password" name="password" />
                <input type="checkbox" id="see" onclick="myFunction();"> See Password 
             </div> 
             <div class="form-group"> 
                <label for="gender">Gender</label> 
                <div> <label for="male" class="radio-inline" >
                    <input type="radio" name="gender" value="Male" id="male" />Male</label >
                     <label for="female" class="radio-inline" >
                    <input type="radio" name="gender" value="Female" id="female" />Female</label > 
                    <label for="others" class="radio-inline" ><input type="radio" name="gender" value="o" id="others" />Others</label >
                 </div> 
                    </div> 
                 <div class="form-group"> 
                    <label for="email">Email</label> 
                    <input type="text" class="form-control" id="email" name="email" /> </div> 
                    <div class="form-group"> 
                    <label >Nationality</label> 
                    <input type="text" class="form-control"  name="nationality" /> </div> 
                    <div class="form-group"> 
                    <label>NIN</label> 
                    <input type="text" class="form-control"  name="nin" /> </div> 
                    <div class="form-group"> 
                    <label for="number">Phone Number</label> 
                    <input type="number" class="form-control" id="number" name="contact" /> </div> 
                    <input type="submit" class="btn btn-primary" value="Create New Account" />
                 </form> 
                </div> 
</div>
                    
                   
<script>
   function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
   
   </script>
</body>
</html>

          