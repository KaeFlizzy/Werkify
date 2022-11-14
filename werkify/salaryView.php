<?php
include_once 'db_conn.php';
$result = mysqli_query($conn,"SELECT * FROM department WHERE adminid ='". $_GET['id']."'");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Werkify- Departments</title>
 </head>
<body>
  <div><span><h1>VIEW DEPARTMENTS</h1></span></div>
  <button id="Home">Home</button><br>
<form>
 <input type="button" value="Back" onclick="history.back()">
</form>
<h2>UPDATE EMPLOYEE</h2>
<?php

if (mysqli_num_rows($result) > 0) {
?>
  <table>
  <tr>
    <td>deptID</td>
    <td>Department Name</td>
    <td>Description</td>
   
  </tr>
<?php
$i=0;

while($row = mysqli_fetch_array($result)) {

?>
<tr>
    <td><?php echo $row["deptId"]; ?></td>
    <td><?php echo $row["deptName"]; ?></td>
    <td><?php echo $row["description"]; ?></td>
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