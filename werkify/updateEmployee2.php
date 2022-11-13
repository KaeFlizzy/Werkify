<?php
include_once 'db_conn.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE employee set 
empID= '" . $_POST['empID'] ."',
name='" . $_POST['name'] ."',
 username='" . $_POST['username'] . "',
  Gender='" . $_POST['Gender'] ."', 
  dob='" . $_POST['dob'] ."', 
  nin='" . $_POST['nin'] ."', 
  Address='" . $_POST['Address'] ."',
  Contact='" . $_POST['Contact'] ."',
  Email='" . $_POST['Email'] ."',
  Nationality='" . $_POST['Nationality'] ."', 
  Job='" . $_POST['Job'] . "',
  Department='" . $_POST['Department'] . "',
  Education='" . $_POST['Education'] . "',
  Account='" . $_POST['Account'] . "'
  WHERE empID='" . $_POST['empID'] . "';");
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
<form name="frmUser" method="post" action="" onsubmit="confirm();">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<!-- <a href="viewEmployee.php?id=<?//php echo $row["adminID"]; ?>">Employee List</a> -->
</div>
<!-- Full Name : <br>
<input type="file" name="pic" class="txtField" value="<?php echo $row['pic']; ?>">
<br> -->
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
<input type="text" name="Gender" class="txtField" value="<?php echo $row['Gender']; ?>">
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
Contact: <br>
<input type="text" name="Contact" class="txtField" value="<?php echo $row['Contact']; ?>">
<br>
Email: <br>
<input type="text" name="Email" class="txtField" value="<?php echo $row['Email']; ?>">
<br>
Nationality: <br>
<input type="text" name="Nationality" class="txtField" value="<?php echo $row['Nationality']; ?>">
<br>
Job Title :<br>
<input type="text" name="Job" class="txtField" value="<?php echo $row['Job']; ?>">
<br>
Department :<br>
<input type="text" name="Department" class="txtField" value="<?php echo $row['Department']; ?>">
<br>
Education Level :<br>
<input type="text" name="Education" class="txtField" value="<?php echo $row['Education']; ?>">
<br>
Account Number :<br>
<input type="text" name="Account" class="txtField" value="<?php echo $row['Account']; ?>">
<br>

<input type="submit" name="submit" value="Submit" class="button">
<br>
<td><a href="deleteEmployee2.php?id=<?php echo $row["empID"]; ?>">Delete Record</a></td>
</form>
<script>
  const msg="Record Successfully Modified!"
function confirm() {
  alert(msg)
  window.location.assign("viewEmployee.php")
  console.log('Button CLicked') 
}

  </script>
</body>
</html>