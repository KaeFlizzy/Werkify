<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organisation</title>
</head>
<body>
    
<div>
        <h2>Departments</h2>
        <button onclick="window.location.assign('deptAdd.php?id=<?php echo $_GET['id'] ?>')">Add New Department</button>
        <button onclick="window.location.assign('deptUpdate.php?id=<?php echo $_GET['id'] ?>')">Manage Departments</button>
        <button onclick="window.location.assign('deptView.php?id=<?php echo $_GET['id'] ?>')">View Departments</button>
    <div>
        <h2>Jobs</h2>
        <button onclick="window.location.assign(jobAdd.php)">Add New Job</button>
        <button onclick="window.location.assign(jobUpd.php)">Manage Jobs</button>
 <button onclick="window.loaction.assign(jobView.php)">View Jobs</button>
</div> 
<div>
        <h2 >Salary</h2>
        <button onclick="window.location.assign(salaryAdd.php)">Add New Salary</button>
        <button onclick="window.location.assign(salaryUpd.php)">Manage Salaries</button>
    <button onclick="window.location.assign(salaryView.php)">View Salaries</button>
</div>    
</body>
</html>