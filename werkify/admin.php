<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
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
    <div class="topbar">
    <span class="icon"><img  src="images/profile.png" ></span>
        <span style="font-size:24px;font-weight:bold;">COMPANY NAME</span>
        <span><input type="text" placeholder="Search....." class=" search"></span>
        <span class="icon"><button>SEARCH</button></span>
        <span class="icon"><img  src="images/mail.png" ></span>
        <span class="icon"><img  src="images/help.png" ></span>
        <span class="icon"><img  src="images/settings.png" ></span>
        <span class="icon"><img  src="images/profile.png" ></span>

    </div>
        <div class="container">
            <div class="left-dashboard">
                <a href="register.php"><p><img src="images/icon1.png" ></p></a>
                <a href="updateEmployee.php"><p><img src="images/icon2.png" ></p></a>
                <p><img src="images/icon3.png" ></p>
                <p><img src="images/icon4.png" ></p>
                <p><img src="images/icon5.png" ></p>
</div>
            <div class="right-dashboard">
                <div><h2>&nbsp;&nbsp;&nbsp;DashBoard<h2></div>
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
</body>
</html>
<?php
} else {
    header("Location: index.php");
    exit();
}
?>