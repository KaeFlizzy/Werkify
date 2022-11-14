<?php
include 'db_conn.php';


if(count($_POST)>0) {
mysqli_query($conn,"UPDATE job set 
jobId= '" . $_POST['jobId'] ."',
jobName='" . $_POST['jobName'] ."',
deptId='" . $deptId['deptId'] . "'
  WHERE deptId='" . $_GET['jobId'] . "';");
$message = "Record Modified Successfully";
}
$sql="SELECT * FROM job WHERE jobId = '" . $_GET['jobId'] . "'";
$result = mysqli_query($conn,$sql);
$row= mysqli_fetch_array($result);
// $sql2="SELECT department.deptName as deptName ,department.adminId as adminId,job.jobId as jobId,job.jobName as jobName 
// FROM job INNER JOIN department ON job.deptID = department.deptID WHERE job.adminId ='". $row['adminID']."'";
// $row2= mysqli_fetch_array($conn,$sql2);
$result2 = mysqli_query($conn,"SELECT * FROM department WHERE adminId = '" . $row['adminID'] . "'");
// $row2 = mysqli_fetch_array($result2);
$deptId= mysqli_query($conn,"SELECT * FROM department WHERE deptName = '" . $_POST['departmentName'] . "'");

?>
<html>
<head>
<title>Update Department Data</title>
</head>
<body>
<form name="frmUser" method="post" action="" onsubmit="confirm();">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<!-- <a href="viewEmployee.php?id=<?//php echo $row["adminID"]; ?>">Employee List</a> -->
</div>
<input type="hidden" name="deptId"  value="<?php echo $row['deptId']; ?>">
Job ID: <br>
<input type="text" name="jobId"  value="<?php echo $row['jobId']; ?>">
<br>
Job Title : <br>
<input type="text" name="deptName" class="txtField" value="<?php echo $row['jobName']; ?>">
<br>
Department : <br>
<select name="departmentName" class="txtField">
    
<?php
$i=0;
while($row2 = mysqli_fetch_array($result2)) {
    ?>
    <option>
<?php echo $row2['deptName'] ?>
</option>
<?php
$i++;
}

?>
</select>
<br>

<input type="hidden" name="adminid" class="txtField" value="<?php echo $row['adminID']; ?>">

<input type="submit" name="submit" value="Update" class="button">
<br>
<td><a href="jobDelete.php?id=<?php echo $row["jobId"]; ?>">Delete Record</a></td>
</form>
<script>
  const msg="Record Successfully Modified!"
function confirm() {
 
  window.location.assign("organization.php?id=<?php echo $row['adminID']; ?>")
  alert(msg)
}

  </script>
</body>
</html>
<?php

?>