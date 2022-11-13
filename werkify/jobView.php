<?php
include_once 'db_conn.php';

$result2 = mysqli_query($conn,"SELECT * FROM department WHERE adminid ='". $_GET['id']."'");
$row2= mysqli_fetch_array($result2);
$result = mysqli_query($conn,"SELECT * FROM job WHERE deptid ='". $row2['deptId']."'");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Werkify- Jobs</title>
 </head>
<body>
  <div><span><h1>VIEW JOBS</h1></span></div>
  <button id="Home">Home</button><br>
<form>
 <input type="button" value="Back" onclick="history.back()">
</form>
<h2>VIEW JOBS</h2>
<?php

if ((mysqli_num_rows($result) > 0)&&(mysqli_num_rows($result2) > 0)) {
    
?>
  <table>
  <tr>
    <td>jobID</td>
    <td>Job Title</td>
    <td>Department</td>
   
  </tr>
<?php
$i=0;$j=0;
while($row2 = mysqli_fetch_array($result2)) {

while($row = mysqli_fetch_array($result)) {

?>
<tr>
    <td><?php echo $row["jobId"]; ?></td>
    <td><?php echo $row["jobName"]; ?></td>
    <td><?php echo $row2["deptName"]; ?></td>
</tr>
<?php
$i++;
}
$j++;


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