<?php
session_start();
if(isset($_SESSION['adminID']) && isset($_SESSION['username'])) {
include_once 'db_conn.php';
$result = mysqli_query($conn,"SELECT adminID FROM admin WHERE adminid = '".$_GET['id']."' ");
$result2= mysqli_query($conn,"SELECT COUNT(empID) as no FROM employee WHERE adminid ='".$_GET['id']."'");
$result3=mysqli_query($conn,"SELECT COUNT(deptID) as no FROM department WHERE adminid ='".$_GET['id']."'");
$result4=mysqli_query($conn,"SELECT COUNT(jobID) as no FROM job WHERE adminid ='".$_GET['id']."'");
$row2=mysqli_fetch_assoc($result2);
$row3=mysqli_fetch_assoc($result3);
$row4=mysqli_fetch_assoc($result4);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <title>Werkify</title>
</head>
<body>
<?php
// if (mysqli_num_rows($result) > 0) {
    
// 			$i=0;
// 			while($row = mysqli_fetch_array($result)) {
    $row = mysqli_fetch_array($result)
?>
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
			// $i++;
			// }
			?>
        <div class="container">
            <div class="left-dashboard">
                <p id="l-icon"><a href="viewEmployee.php?id=<?php echo $row["adminID"]; ?>"><img src="images/icon1.png" ></p><p class="sub" id="subhidden">Add</p>
                <a href="register.php?id=<?php echo $row["adminID"]; ?>"><p id="l-icon2"><img src="images/icon2.png" ><p class="sub" id="subhidden2">Register</p></p></a>
                <a href="updateEmployee.php?id=<?php echo $row["adminID"]; ?>"><p id="l-icon3"><img src="images/icon3.png" ><p class="sub" id="subhidden3">Manage</p></p></a>
               <a href="organization.php?id=<?php echo $row["adminID"]; ?>"> <p id="l-icon4"><img src="images/icon4.png" ><p class="sub" id="subhidden4">Organisation</p></p></a>
                <p><img src="images/icon5.png" ><p class="sub" id="subhidden">Add</p></p>
</div>
            <div class="right-dashboard">
                <div><h2>&nbsp;&nbsp;&nbsp;DashBoard<h2></div>
                <div></div>
                <div style="display: grid; width:100%; grid-template-columns:auto auto auto; place-items: center;">
                <div style="background-color: red; color: white; text-align: center; padding: 10px; margin: 10px;"> 
                    <h2>EMPLOYEES</h2>
                    <h2><?php echo $row2['no'];  ?></h2>
                </div>
                <div style="background-color: orange; color: white; text-align: center; padding: 10px; margin: 10px;">
                    <h2>DEPARTMENTS</h2>
                    <h2><?php echo $row3['no'];  ?></h2>
                </div>
                <div style="background-color: greenyellow; color: white; text-align: center; padding: 10px 40px; margin: 10px;">
                    <h2>JOBS</h2>
                    <h2><?php echo $row4['no'];  ?></h4>
                </div>
</div>
<div></div>
                
    <div class="Inbox">
        <h3>Inbox</h3>
        <p>No new messages at the moment!</p>
</div>
<div class= "Task">
<h3>Task Completion</h3>
</div>
<div class= "Goal">
<h3>Goal Completion</h3>
</div>
<div class="Planner">
<h3>Planner</h3>
</div>
                
</div>
</div>
<script type="text/javascript" src="register.js">
    // const hid = document.getElementsByClassName("l-icon")
    // hid.addEventListener('mouseover',()=>{
    //     document.getElementsByClassName('subhidden').ClassName='sub'
    //     console.log('Button hover')
    // })

    </script>
</body>
</html>
<?php
// }
// else
// {
//     echo "No result found";
// }
?>
<?php
} else {
    header("Location: index.php");
   exit();
}
?>