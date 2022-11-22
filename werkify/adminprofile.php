<?php
include_once 'db_conn.php';
$result = mysqli_query($conn,"SELECT * FROM admin WHERE adminid = '" . $_GET['id'] . "'");

?>
<!DOCTYPE html>
<html>
 <head>
 <title> My Profile</title>
 </head>
<body>
  <div><span><h1>MY PROFILE</h1></span></div>
  <button id="Home">Home</button><br>
<form>
 <input type="button" value="Back" onclick="history.back()">
</form>
<?php

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_array($result)
?>
  <table>
  <tr>
  <!-- <td>pic</td> -->
  <!-- <td><?php //  echo '<img src="data:pic/jpeg;base64,'. base64_encode($i) .'" />'; ?></td> -->
    <tr><td>adminID</td>
    <td><?php echo $row["adminID"]; ?></td>
  </tr>
    <tr><td>Name</td><td><?php echo $row["name"]; ?></td></tr>
    <tr><td>Username</td><td><?php echo $row["username"]; ?></td></tr>
    <tr><td>Gender</td><td><?php echo $row["gender"]; ?></td></tr>
    <tr><td>NIN</td><td><?php echo $row["nin"]; ?></td></tr>
    <tr><td>Address</td><td><?php echo $row["address"]; ?></td></tr>
    <tr><td>Contact</td><td><?php echo $row["contact"]; ?></td></tr>
    <tr><td>Email</td><td><?php echo $row["email"]; ?></td></tr>
    <tr><td>Nationality</td><td><?php echo $row["nationality"]; ?></td></tr>
    <tr><td>Date Of Birth</td><td><?php echo $row["dob"]; ?></td></tr>
    <tr><td>Job Title</td><td><?php // echo $row["job"]; ?></td></tr>
    <tr><td>Department</td><td><?php //echo $row["department"]; ?></td></tr>
    <tr><td>Education Level</td><td><?php echo $row["education"]; ?></td></tr>
    <tr><td>Account Number</td><td><?php echo $row["account"]; ?></td></tr>
  </tr>

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
  window.location.assign("admin.php?id=<?php echo $row["adminID"] ?>")
  console.log("button clicked")
 })
  </script>
 </body>
</html>