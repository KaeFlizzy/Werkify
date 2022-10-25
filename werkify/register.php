<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <h1>REGISTER EMPLOYEES</h1>
    <form action="register2.php" method="post" onsubmit="return confirm('Do you want to submit this form?');">
        <label>
            Name <br>
            <input type="text" name="username" placeholder="Enter your full name">
</label>
<br><br>
<label>
    Department <br>
    <input type="text" name="department" >
<!-- <select name="department">
    <option></option>
    <option></option>  
    <option></option>
    <option></option>      
</select> -->
</label>
<br><br>
<label>
    Job Title <br>
<input type="text" name="job" >
</label><br><br>
<input type="submit" value="submit" id="submit">
</form>
</div>
<script>
    </script>
</body>
</html>
    <?php
} else {
    header("Location: index.php");
    exit();
}
?>