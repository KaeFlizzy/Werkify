<?php
include_once 'db_conn.php';
$result = mysqli_query($conn,"SELECT * FROM employee WHERE adminid ='". $_GET['id']."'");
?>
<!DOCTYPE html>
<html>
 <head>
 <link rel="stylesheet" href="css/styles.css" type="text/css">
 <link rel="stylesheet" href="css/forms.css" type="text/css">

 <title> Retrive data</title>
 </head>
<body>
<div class="topbar">
    <span class="icon"><a href="admin.php?id=<?php echo $_GET["id"] ?>"><img  src="images/logo.jpeg" height="150px" ></a></span>
        <span class="name" >COMPANY NAME</span>
        <span class="icon"><input type="text" id="searchbar" placeholder="Search....." class=" search"><img  id="search" src="images/search.png"></span>
        <span class="icon" id="searchbar"><button>SEARCH</button></span>
        <span class="icon"><img  src="images/inbox1.png" ></span>
        <span class="icon"><img  src="images/help3.png" ></span>
        <span class="icon"><img  src="images/setting1.png" ></span>
        <span class="icon"><a href="adminprofile.php?id=<?php echo $row["adminID"]; ?>"><img  src="images/profile.png" ></a></span>
        <!-- <span class="icon"><a href="adminprofile.php"><img  src="images/profile.png" ></a></span> -->

    </div>
  <div><span><h1>VIEW EMPLOYEES</h1></span></div>
  <button id="Home">Home</button><br>
<form>
 <input type="button" value="Back" onclick="history.back()">
</form>
<?php

if (mysqli_num_rows($result) > 0) {
?>
  <table cell-spacing="0px" cell-padding="0px">
  <tr>
  <!-- <td>pic</td> -->
    <th>empID</th>
    <th>Name</th>
    <th>Username</th>
    <th>Gender</th>
    <th>NIN</th>
    <th>Address</th>
    <th>Contact</th>
    <th>Email</th>
    <th>Nationality</th>
    <th>Date Of Birth</th>
    <th>Job Title</th>
    <th>Department</th>
    <th>Education Level</th>
    <th>Account Number</th>
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