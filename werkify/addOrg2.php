<?php
session_start();
include "db_conn.php";

$orgname = $_POST['orgName'];
$orgtype = $_POST['orgType'];
$account= $_POST['accountNo'];
$contact= $_POST['contact'];
$address= $_POST['address'];
$website= $_POST['website'];
$email=$_POST['email'];
$custom_message='You have successfully, registered a new employee';

    $sql = "INSERT INTO organisation (orgname, orgtype, accountno, contact, address, website,admin) 
    VALUES ('$orgname','$orgtype','$account','$contact','$address','$website','".$_GET['adminID']."')";
    $result = mysqli_query($conn, $sql);

            if (isset($result))
            {
  
              header("Location: admin.php?adminID=".$_GET['adminID']."");

            }



?>