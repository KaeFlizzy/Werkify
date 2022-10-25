<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM employee");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Delete employee data</title>
</head>
<body>
<table>
	<tr>
	<td>Employee Id</td>
	<td>First Name</td>
	<td>Last Name</td>
	<td>City</td>
	<td>Email id</td>
	<td>Action</td>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["userid"]; ?></td>
	<td><?php echo $row["first_name"]; ?></td>
	<td><?php echo $row["last_name"]; ?></td>
	<td><?php echo $row["city_name"]; ?></td>
	<td><?php echo $row["email"]; ?></td>
	<td><a href="deleteEmployee2.php?userid=<?php echo $row["empID"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</body>
</html>