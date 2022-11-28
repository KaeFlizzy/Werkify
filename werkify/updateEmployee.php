<?php
include_once 'db_conn.php';
$result = mysqli_query($conn,"SELECT empID, name, username, job, department FROM employee WHERE adminid='".$_GET['id']."'");
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Werkify-Update Employees</title>
   <link rel="stylesheet" href="css/styles.css" type="text/css">
   <link rel="stylesheet" href="css/forms.css" type="text/css">
   <!-- <link rel="stylesheet" href="style.css"> -->
 </head>
<body>
<div class="topbar">
    <span class="icon"><a href="admin.php?id=<?php echo $_GET["id"] ?>"><img  src="images/logo.jpeg" height="150px" ></a></span>
        <span class="name" >COMPANY NAME</span>
        <span class="icon"><input type="text" id="searchbar" placeholder="Search....." class=" search"><img  id="search" src="images/search.png"></span>
        <span class="icon" id="searchbar"><button>SEARCH</button></span>
        <span class="icon"><img  src="images/inbox1.png" ></span>
        <span class="icon"><img  src="images/help3.png" ></span>
        <span class="icon"><img  src="images/setting1.png" ></span>
        <span class="icon"><a href="adminprofile.php?id=<?php echo $row["adminID"]; ?>"><img  src="images/profile.png" ></a></span>
        <!-- <span class="icon"><a href="adminprofile.php"><img  src="images/profile.png" ></a></span> -->

    </div>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<!-- <div>
<span><img src="images/logo.jpeg" height="80px"></span><span><h1>COMPANY NAME</h1></span>
</div> -->
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
		<td class="manage"><a href="updateEmployee2.php?id=<?php echo $row["empID"]; ?>">Manage</a></td>
		
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