<?php
include_once 'db_conn.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE employee set 
empID= '" . $_POST['empID'] ."',
name='" . $_POST['name'] ."',
 username='" . $_POST['username'] . "',
  gender='" . $_POST['gender'] ."', 
  dob='" . $_POST['dob'] ."', 
  nin='" . $_POST['nin'] ."', 
  Address='" . $_POST['Address'] ."', 
  Job='" . $_POST['Job'] . "',
  Department='" . $_POST['Department'] . "',
  education='" . $_POST['education'] . "',
  account='" . $_POST['account'] . "',
  WHERE empID='" . $_POST['empID'] . "'");
$message = "Record Modified Successfully";
}
$sql="SELECT * FROM employee WHERE empID = '" . $_GET['id'] . "'";
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
Full Name : <br>
<input type="text" name="name" class="txtField" value="<?php echo $row['Name']; ?>">
<br>
Username : <br>
<input type="text" name="username" class="txtField" value="<?php echo $row['username']; ?>">
<br>
Gender: <br>
<input type="text" name="gender" class="txtField" value="<?php echo $row['Gender']; ?>">
<br>
Date of Birth: <br>
<input type="date" name="dob" class="txtField" value="<?php echo $row['DOB']; ?>">
<br>
Address: <br>
<input type="text" name="Address" class="txtField" value="<?php echo $row['Address']; ?>">
<br>
NIN: <br>
<input type="text" name="nin" class="txtField" value="<?php echo $row['NIN']; ?>">
<br>
Job Title :<br>
<input type="text" name="Job" class="txtField" value="<?php echo $row['Job']; ?>">
<br>
Department :<br>
<input type="text" name="Department" class="txtField" value="<?php echo $row['Department']; ?>">
<br>
Education Level :<br>
<input type="text" name="education" class="txtField" value="<?php echo $row['Education']; ?>">
<br>
Account Number :<br>
<input type="text" name="account" class="txtField" value="<?php echo $row['Account']; ?>">
<br>

<input type="submit" name="submit" value="Submit" class="button">
<br>
<td><a href="deleteEmployee2.php?id=<?php echo $row["empID"]; ?>">Delete Record</a></td>
</form>
</body>
</html>