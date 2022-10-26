<?php
include_once 'db_conn.php';
$result = mysqli_query($conn,"SELECT empID, username, job, department FROM employee");
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Retrive data</title>
   <!-- <link rel="stylesheet" href="style.css"> -->
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<div>
<span><img src="images/logo.jpeg"></span><span><h1>COMPANY NAME</h1></span>
</div>
<table>
	  <tr>
	    <td>empID</td>
		<td>username</td>
		<td>job</td>
		<td>department</td>
		<!-- <td>Email id</td>-->
		<td colspan="2">Action</td> 
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["empID"]; ?></td>
		<td><?php echo $row["username"]; ?></td>
		<td><?php echo $row["job"]; ?></td>
		<td><?php echo $row["department"]; ?></td>
		<td><a href="updateEmployee2.php?id=<?php echo $row["empID"]; ?>">Update</a></td>
		<td><a href="deleteEmployee2.php?id=<?php echo $row["empID"]; ?>">Delete</a></td>
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