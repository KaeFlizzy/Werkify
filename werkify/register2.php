<?php
session_start();
include "db_conn.php";

$username = $_POST['username'];
$job = $_POST['job'];
$department= $_POST['department'];
$adminid= $_POST['adminid'];
$custom_message='You have successfully, registered a new employee';

    $sql = "INSERT INTO employee(username,job,department,adminid) VALUES ('$username','$job','$department','$adminid')";
    $result = mysqli_query($conn, $sql);

            if (isset($result))
            {

              header("Location:admin.php?adminID=".$adminid);

            }



?>