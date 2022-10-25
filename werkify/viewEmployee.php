<?php
include_once 'db_conn.php';
$result = mysqli_query($conn,"SELECT empID, username, job, department FROM employee");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>empID</td>
    <td>username</td>
    <td>jobtitle</td>
    <td>department</td>
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
 </body>
</html>