<?php
include_once 'db_conn.php';
$result = mysqli_query($conn,"SELECT empID, name, username, job, department FROM employee WHERE adminid='".$_GET['id']."'");
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Werkify-Update Employees</title>
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
	    <th>Employee ID</th>
		<th>Full Name</th>
		<th>Username</th>
		<th>Job</th>
		<th>Department</th>
		<!-- <td>Email id</td>-->
		<th colspan="2">Action</th> 
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["empID"]; ?></td>
		<td><?php echo $row["name"]; ?></td>
		<td><?php echo $row["username"]; ?></td>
		<td><?php echo $row["job"]; ?></td>
		<td><?php echo $row["department"]; ?></td>
		<td><a href="updateEmployee2.php?id=<?php echo $row["empID"]; ?>">Manage</a></td>
		
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