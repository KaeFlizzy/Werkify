<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <title>Organisation</title>
</head>
<body>
    
<div class="topbar">
    <span class="icon"><a href="admin.php?id=<?php echo $_GET['id'] ?>"><img  src="images/logo.jpeg" height="150px" ></a></span>
        <span style="font-size:24px;font-weight:bold;">COMPANY NAME</span>
        <span><input type="text" placeholder="Search....." class=" search"></span>
        <span class="icon"><button>SEARCH</button></span>
        <span class="icon"><img  src="images/inbox1.png" ></span>
        <span class="icon"><img  src="images/help3.png" ></span>
        <span class="icon"><img  src="images/setting1.png" ></span>
        <span class="icon"><a href="adminprofile.php?id=<?php echo $row["adminID"]; ?>"><img  src="images/profile.png" ></a></span>
        <!-- <span class="icon"><a href="adminprofile.php"><img  src="images/profile.png" ></a></span> -->

    </div>
    <div class="container">
    <div class="left-dashboard">
                <p id="l-icon"><a href="viewEmployee.php?id=<?php echo $row["adminID"]; ?>"><img src="images/icon1.png" ></p><p class="sub" id="subhidden">Add</p>
                <a href="register.php?id=<?php echo $row["adminID"]; ?>"><p id="l-icon2"><img src="images/icon2.png" ><p class="sub" id="subhidden2">Register</p></p></a>
                <a href="updateEmployee.php?id=<?php echo $row["adminID"]; ?>"><p id="l-icon3"><img src="images/icon3.png" ><p class="sub" id="subhidden3">Manage</p></p></a>
               <a href="organization.php?id=<?php echo $row["adminID"]; ?>"> <p id="l-icon4"><img src="images/icon4.png" ><p class="sub" id="subhidden4">Organisation</p></p></a>
                <p><img src="images/icon5.png" ><p class="sub" id="subhidden">Add</p></p>
</div>
    
<div class="right-dashboard">
    <div>
        <h2>Departments</h2>
        <button onclick="window.location.assign('deptAdd.php?id=<?php echo $_GET['id'] ?>')">Add New Department</button>
        <button onclick="window.location.assign('deptUpdate.php?id=<?php echo $_GET['id'] ?>')">Manage Departments</button>
        <button onclick="window.location.assign('deptView.php?id=<?php echo $_GET['id'] ?>')">View Departments</button>
    </div>
        <div>
        <h2>Jobs</h2>
        <button onclick="window.location.assign('jobAdd.php?id=<?php echo $_GET['id'] ?>')">Add New Job</button>
        <button onclick="window.location.assign('jobUpdate.php?id=<?php echo $_GET['id'] ?>')">Manage Jobs</button>
 <button onclick="window.location.assign('jobView.php?id=<?php echo $_GET['id'] ?>')">View Jobs</button>
</div> 
<div>
        <h2 >Salary</h2>
        <button onclick="window.location.assign('salaryAdd.php?id=<?php echo $_GET['id'] ?>')">Add New Salary</button>
        <button onclick="window.location.assign('salaryUpdate.php?id=<?php echo $_GET['id'] ?>')">Manage Salaries</button>
    <button onclick="window.location.assign('salaryView.php?id=<?php echo $_GET['id'] ?>')">View Salaries</button>
</div>   
</div>
</div> 
</body>
</html>