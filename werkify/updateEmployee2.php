<?php
include_once 'db_conn.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE employee set empID='" . $_POST['empID'] . "', username='" . $_POST['username'] . "', job='" . $_POST['job'] . "',department='" . $_POST['department'] . "' WHERE empID='" . $_POST['empID'] . "'");
$message = "Record Modified Successfully";
}
$sql="SELECT empID,username,job,department FROM employee WHERE empID = '" . $_GET['id'] . "'";
$result = mysqli_query($conn,$sql);
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="viewEmployee.php">Employee List</a>
</div>
empID: <br>
<input type="hidden" name="empID" class="txtField" value="<?php echo $row['empID']; ?>">
<input type="text" name="empID"  value="<?php echo $row['empID']; ?>">
<br>
Username : <br>
<input type="text" name="username" class="txtField" value="<?php echo $row['username']; ?>">
<br>
Job Title :<br>
<input type="text" name="job" class="txtField" value="<?php echo $row['job']; ?>">
<br>
Department :<br>
<input type="text" name="department" class="txtField" value="<?php echo $row['department']; ?>">
<br>

<input type="submit" name="submit" value="Submit" class="button">

</form>
</body>
</html>