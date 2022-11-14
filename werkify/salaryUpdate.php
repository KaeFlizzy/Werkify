<?php
include_once 'db_conn.php';
$result = mysqli_query($conn,"SELECT * FROM department WHERE adminid='".$_GET['id']."'");
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
	    <th>dept ID</th>
		<th>Department Name</th>
		<!-- <td>Email id</td>-->
		<th colspan="2">Action</th> 
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["deptId"]; ?></td>
		<td><?php echo $row["deptName"]; ?></td>
		
		<td><a href="deptUpdate2.php?deptId=<?php echo $row["deptId"]; ?>">Manage</a></td>
		
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