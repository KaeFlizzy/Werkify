<?php
//session_start();
//if(isset($_SESSION['adminid']) && isset($_SESSION['username'])) {
include_once 'db_conn.php';
$result = mysqli_query($conn,"SELECT adminId FROM admin");

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
if (mysqli_num_rows($result) > 0) {
    
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			
?>
    <div class="topbar">
    <span class="icon"><img  src="images/logo.jpeg" height="150px" ></span>
        <span style="font-size:24px;font-weight:bold;">COMPANY NAME</span>
        <span><input type="text" placeholder="Search....." class=" search"></span>
        <span class="icon"><button>SEARCH</button></span>
        <span class="icon"><img  src="images/inbox1.png" ></span>
        <span class="icon"><img  src="images/help3.png" ></span>
        <span class="icon"><img  src="images/setting1.png" ></span>
        <a href="adminprofile.php?id=<?php echo $row["adminId"]; ?>"><span class="icon"><img  src="images/profile.png" ></span></a>
        <!-- <span class="icon"><a href="adminprofile.php"><img  src="images/profile.png" ></a></span> -->

    </div>
    <?php
			$i++;
			}
			?>
        <div class="container">
            <div class="left-dashboard">
                <p id="l-icon"><img src="images/icon1.png" ></p><p class="sub" id="subhidden">Add</p>
                <a href="register.php"><p id="l-icon2"><img src="images/icon2.png" ><p class="sub" id="subhidden2">Register</p></p></a>
                <a href="updateEmployee.php"><p id="l-icon3"><img src="images/icon3.png" ><p class="sub" id="subhidden3">Manage</p></p></a>
               <a> <p id="l-icon4"><img src="images/icon4.png" ><p class="sub" id="subhidden4">Organisation</p></p></a>
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
}
else
{
    echo "No result found";
}
?>
<?php
//} else {
    //header("Location: index.php");
   // exit();
//}
?>