<?php
session_start();
include "db_conn.php";

$username = $_POST['username'];
$job = $_POST['job'];
$department= $_POST['department'];
$custom_message='You have successfully, registered a new employee';

    $sql = "INSERT INTO employee(username,job,department) VALUES ('$username','$job','$department')";
    $result = mysqli_query($conn, $sql);

            if (isset($result))
            {
  
              header("Location: viewEmployee.php");

            }



?>