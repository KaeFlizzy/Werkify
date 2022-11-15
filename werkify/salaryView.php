<?php
include_once 'db_conn.php';
$result = mysqli_query($conn,"SELECT * FROM salary WHERE adminid ='". $_GET['id']."'");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Werkify- Salaries</title>
 </head>
<body>
  <div><span><h1>COMPANY NAME</h1></span></div>
  <button id="Home">Home</button><br>
<form>
 <input type="button" value="Back" onclick="history.back()">
</form>
<h2>VIEW SALARY</h2>
<?php

if (mysqli_num_rows($result) > 0) {
?>
  <table>
	  <tr>
	    <th>salary ID</th>
		<th>Salary Description</th>
		<th>Gross Amount</th>
		<th>Allowances</th>
		<th>Deductions</th>
		<th>Net Salary</th>
		 
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