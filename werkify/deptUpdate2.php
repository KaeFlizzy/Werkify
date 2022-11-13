<?php
include_once 'db_conn.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE department set 
deptId= '" . $_POST['deptId'] ."',
deptName='" . $_POST['deptName'] ."',
description='" . $_POST['description'] . "'
  WHERE deptId='" . $_GET['deptId'] . "';");
$message = "Record Modified Successfully";
}
$sql="SELECT * FROM department WHERE deptId = '" . $_GET['deptId'] . "'";
$result = mysqli_query($conn,$sql);
$row= mysqli_fetch_array($result);
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

deptID: <br>
<input type="text" name="deptId"  value="<?php echo $row['deptId']; ?>">
<br>
Department Name : <br>
<input type="text" name="deptName" class="txtField" value="<?php echo $row['deptName']; ?>">
<br>
Description : <br>
<textarea name="description" class="txtField">
    <?php echo $row['description'] ?>
</textarea>
<br>

<input type="hidden" name="adminid" class="txtField" value="<?php echo $row['adminID']; ?>">

<input type="submit" name="submit" value="Update" class="button">
<br>
<td><a href="deleteEmployee2.php?id=<?php echo $row["empID"]; ?>">Delete Record</a></td>
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