<?php
include_once 'db_conn.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE salary set 
salaryId= '" . $_POST['salaryId'] ."',
salaryDesc='" . $_POST['salaryDesc'] ."',
allowances='" . $_POST['allowances'] . "'
amount='" . $_POST['amount'] . "'
netSalary='" . $_POST['netSalary'] . "'
  WHERE salaryId='" . $_GET['salaryId'] . "';");
$message = "Record Modified Successfully";
}
$sql="SELECT * FROM salary WHERE salaryId = '" . $_GET['salaryId'] . "'";
$result = mysqli_query($conn,$sql);
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Werkify - Update Salary Data</title>
</head>
<body>
<form name="frmUser" method="post" action="" onsubmit="confirm();">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<!-- <a href="viewEmployee.php?id=<?//php echo $row["adminID"]; ?>">Employee List</a> -->
</div>

salaryID: <br>
<input type="text" name="deptId" class="txtField" value="<?php echo $row['salaryId']; ?>">
<br>
Salary Description : <br>
<input type="text" name="salaryDesc" class="txtField" value="<?php echo $row['salaryDesc']; ?>">
<br>
Gross Salary : <br>
<input type="text" name="amount" class="txtField" value="<?php echo $row['salaryDesc']; ?>">
<br>
Deductions : <br>
<input type="text" name="deductions" class="txtField" value="<?php echo $row['salaryDesc']; ?>">
<br>
Allowances : <br>
<input type="text" name="allowances" class="txtField" value="<?php echo $row['salaryDesc']; ?>">
<br>
Net Salary : <br>
<input type="text" name="netSalary" class="txtField" value="<?php echo $row['salaryDesc']; ?>">
<br>

<input type="hidden" name="adminid" class="txtField" value="<?php echo $row['adminID']; ?>">

<input type="submit" name="submit" value="Update" class="button">
<br>
<td><a href="salaryDelete.php?salaryId=<?php echo $row["salaryId"]; ?>">Delete Record</a></td>
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