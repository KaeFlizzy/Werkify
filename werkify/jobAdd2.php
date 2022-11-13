<?php
session_start();
include "db_conn.php";
$sql2="SELECT * FROM department WHERE deptName='".$_POST['deptName']."'";
$result2=mysqli_query($conn,$sql2);
$row = mysqli_fetch_array($result2);
$jobTitle = $_POST['jobTitle'];
$deptId = $row['deptId'];
$adminid= $_POST['adminid'];
$custom_message='You have successfully, registered a new job';

    $sql = "INSERT INTO job(jobName,deptId) VALUES ('$jobTitle','$deptId')";
    $result = mysqli_query($conn, $sql);

            if (isset($result))
            {

              header("Location:admin.php?adminID=".$adminid);

            }



?>