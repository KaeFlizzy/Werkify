<?php
session_start();
include "db_conn.php";

// if(isset ($_POST['username']) && isset($_POST['password'])) {
//     function validate($data) {
//         $data = trim($data);
//         $data = stripslashes($data);
//         $data = htmlspecialchars($data);
//         return $data;
//     }
// }

// $uname = validate($_POST['username']);
// $pass = validate($_POST['password']);
$uname=$_POST['username'];
$pass=$_POST['password'];

if (empty($uname)) {
    header ("Location: login2.php?error=User Name is required");
    exit();
}
else if (empty($pass)) {
    header ("Location: login2.php?error=Password is required");
    exit();
}
$sql = "SELECT adminid, username, password FROM admin WHERE username='$uname' AND password='$pass'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)===1) {
    $row = mysqli_fetch_assoc($result);
    if($row['username']===$uname && $row['password']=== $pass) {
        echo "Logged In!";
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['adminId'] = $row['adminId'];
        header("Location: admin.php");
        exit();
    }
    else {
        header("Location: login2.php?error=Incorrect User Name or Password");
        exit();
    }
}
    else {
        header("Location: login2.php");
        exit();
    }


