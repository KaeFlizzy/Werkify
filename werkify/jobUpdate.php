<?php
include_once 'db_conn.php';
$result = mysqli_query($conn,"SELECT department.deptName as deptName ,job.adminId as adminId,job.jobId as jobId,job.jobName as jobName 
FROM job INNER JOIN department ON job.deptID = department.deptID WHERE job.adminId ='". $_GET['id']."'");
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Werkify-Update Job</title>
   <!-- <link rel="stylesheet" href="style.css"> -->
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<div>
<span><img src="images/logo.jpeg" height="80px"></span><span><h1>COMPANY NAME</h1></span>
</div>
<form>
 <input type="button" value="Back" onclick="history.back()">
</form>
<table>
	  <tr>
	    <th>Job ID</th>
		<th>Job Title</th>
		<td>Department</td>
		<th colspan="2">Action</th> 
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["jobId"]; ?></td>
		<td><?php echo $row["jobName"]; ?></td>
        <td><?php echo $row["deptName"]; ?></td>
		
		<td><a href="jobUpdate2.php?jobId=<?php echo $row["jobId"]; ?>">Manage</a></td>
		
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
 </body>
</html>