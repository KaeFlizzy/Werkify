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
    <span class="icon"><img  src="images/logo.jpeg" height="150px" ></span>
        <span style="font-size:24px;font-weight:bold;">COMPANY NAME</span>
        <span><input type="text" placeholder="Search....." class=" search"></span>
        <span class="icon"><button>SEARCH</button></span>
        <span class="icon"><img  src="images/inbox1.png" ></span>
        <span class="icon"><img  src="images/help3.png" ></span>
        <span class="icon"><img  src="images/setting1.png" ></span>
        <span class="icon"><img  src="images/profile.png" ></span>

    </div>
        <div class="container">
            <div class="left-dashboard">
                <p id="l-icon"><img src="images/icon1.png" ></p><p class="sub" id="subhidden">Add</p>
                <a href="register.php"><p id="l-icon2"><img src="images/icon2.png" ><p class="sub" id="subhidden2">Register</p></p></a>
                <a href="updateEmployee.php"><p id="l-icon3"><img src="images/icon3.png" ><p class="sub" id="subhidden3">Manage</p></p></a>
                <p><img src="images/icon4.png" ><p class="sub" id="subhidden">Organisation</p></p>
                <p><img src="images/icon5.png" ><p class="sub" id="subhidden">Add</p></p>
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
} else {
    header("Location: index.php");
    exit();
}
?>