<?php
include_once 'db_conn.php';
$result = mysqli_query($conn,"SELECT * FROM employee WHERE adminid ='". $_GET['id']."'");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 </head>
<body>
  <div><span><h1>VIEW EMPLOYEES</h1></span></div>
  <button id="Home">Home</button><br>
<form>
 <input type="button" value="Back" onclick="history.back()">
</form>
<?php

if (mysqli_num_rows($result) > 0) {
?>
  <table>
  <tr>
  <!-- <td>pic</td> -->
    <td>empID</td>
    <td>Name</td>
    <td>Username</td>
    <td>Gender</td>
    <td>NIN</td>
    <td>Address</td>
    <td>Contact</td>
    <td>Email</td>
    <td>Nationality</td>
    <td>Date Of Birth</td>
    <td>Job Title</td>
    <td>Department</td>
    <td>Education Level</td>
    <td>Account Number</td>
  </tr>
<?php
$i=0;
// $images = array();
while($row = mysqli_fetch_array($result)) {
  // $images[] = $row['pic'];
?>
<tr>
<!-- <td><?php //  echo '<img src="data:pic/jpeg;base64,'. base64_encode($i) .'" />'; ?></td> -->
    <td><?php echo $row["empID"]; ?></td>
    <td><?php echo $row["Name"]; ?></td>
    <td><?php echo $row["username"]; ?></td>
    <td><?php echo $row["Gender"]; ?></td>
    <td><?php echo $row["NIN"]; ?></td>
    <td><?php echo $row["Address"]; ?></td>
    <td><?php echo $row["Contact"]; ?></td>
    <td><?php echo $row["Email"]; ?></td>
    <td><?php echo $row["Nationality"]; ?></td>
    <td><?php echo $row["DOB"]; ?></td>
    <td><?php echo $row["Job"]; ?></td>
    <td><?php echo $row["Department"]; ?></td>
    <td><?php echo $row["Education"]; ?></td>
    <td><?php echo $row["Account"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
<script>
  const home = document.getElementById("Home")
 home.addEventListener("click",()=>{
  window.location.assign("admin.php")
  console.log("button clicked")
 })
  </script>
 </body>
</html>