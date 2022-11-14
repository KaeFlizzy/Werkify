<?php
include_once 'db_conn.php';


$result = mysqli_query($conn,"SELECT department.deptName, department.adminId, job.jobId, job.jobName 
FROM job INNER JOIN department ON job.deptID = department.deptID WHERE job.adminId ='". $_GET['id']."'");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Werkify-Jobs</title>
 </head>
<body>
  <div><span><h1>VIEW JOBS</h1></span></div>
  <button id="Home">Home</button><br>
<form>
 <input type="button" value="Back" onclick="history.back()">
</form>
<h2>VIEW JOBS</h2>
<?php

if (mysqli_num_rows($result) > 0) {
    
?>
  <table>
  <tr>
    <td>jobID</td>
    <td>Job Title</td>
    <td>Department</td>
   
  </tr>
<?php
$i=0;


while($row = mysqli_fetch_array($result)) {

?>
<tr>
    <td><?php echo $row["jobId"]; ?></td>
    <td><?php echo $row["jobName"]; ?></td>
    <td><?php echo $row["deptName"]; ?></td>
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