<?php
session_start();
include "db_conn.php";

$deptname = $_POST['deptName'];
$description = $_POST['description'];

$adminid= $_POST['adminid'];
$custom_message='You have successfully, registered a new department';

    $sql = "INSERT INTO department(deptName,description,adminid) VALUES ('$deptname','$description','$adminid')";
    $result = mysqli_query($conn, $sql);

            if (isset($result))
            {

              header("Location:admin.php?adminID=".$adminid);

            }



?>