<?php
// session_start();
// if(isset($_SESSION['id']) && isset($_SESSION['username'])) {
    include_once 'db_conn.php';
    $result = mysqli_query($conn,"SELECT * FROM department WHERE adminid='".$_GET['id']."'");
    if(mysqli_num_rows($result) > 0)
    {
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
    <h1>ADD NEW JOB</h1>
    <form action="jobAdd2.php" method="post" onsubmit="return confirm('Do you want to submit this form?');">
    <label>
             
    <input type="hidden" name="adminid" value="<?php echo $_GET['id'] ?>" >
</label> 
<label>
    Job Name<br>
    <input type="text" name="jobTitle" >
</label>
<br><br>

<label>
     Department<br>
    <select name="deptName">
    <?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
        <option><?php echo $row["deptName"]; ?> </option>
        <?php
        $i++;
            }
        ?>
</select>
</label><br><br>
<input type="submit" value="Submit" id="submit">
</form>
</div>
<script>
    </script>
</body>
</html>
    <?php
    }
// } else {
//     header("Location: index.php");
//     exit();
// }
?>