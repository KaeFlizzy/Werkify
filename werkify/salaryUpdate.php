<?php
include_once 'db_conn.php';
$result = mysqli_query($conn,"SELECT * FROM salary WHERE adminid='".$_GET['id']."'");
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Werkify-Update Salary</title>
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
	    <th>salary ID</th>
		<th>salary Description</th>
		<th>Gross Amount</th>
		<th>Allowances</th>
		<th>Deductions</th>
		<th>Net Salary</th>
		<th colspan="2">Action</th> 
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["salaryId"]; ?></td>
		<td><?php echo $row["salaryDesc"]; ?></td>
		<td><?php echo $row["amount"]; ?></td>
		<td><?php echo $row["allowances"]; ?></td>
		<td><?php echo $row["deductions"]; ?></td>
		<td><?php echo $row["netSalary"]; ?></td>
		
		<td><a href="salaryUpdate2.php?salaryId=<?php echo $row["salaryId"]; ?>">Manage</a></td>
		
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