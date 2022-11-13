<?php
// session_start();
// if(isset($_SESSION['id']) && isset($_SESSION['username'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/forms.php" type="tesxt/css">
    <title>Werkify</title>
</head>
<body>
<div>
<span><img src="images/logo.jpeg" height="100px"></span><span><h1>COMPANY NAME</h1></span>
<form>
 <input type="button" value="Back" onclick="history.back()">
</form>
</div>
    <div>
    <h1>ADD NEW DEPARTMENT</h1>
    <form action="deptAdd2.php" method="post" onsubmit="return confirm('Do you want to submit this form?');">
    <label>
             
            <input type="hidden" name="adminid" value="<?php echo $_GET['id'] ?>" placeholder="Enter your full name">
</label> 
<label>
    Department Name<br>
    <input type="text" name="deptName" >
</label>
<br><br>
<label>
     Description <br>
     <textarea name="description">

</textarea>
</label><br><br>
<input type="submit" value="Submit" id="submit">
</form>
</div>
<script>
    </script>
</body>
</html>
    <?php
// } else {
//     header("Location: index.php");
//     exit();
// }
?>