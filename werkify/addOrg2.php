<?php
session_start();
include "db_conn.php";

$adminID = $_POST['adminId'];
$orgname = $_POST['orgName'];
$orgtype = $_POST['orgType'];
$account= $_POST['accountNo'];
$contact= $_POST['contact'];
$address= $_POST['address'];
$website= $_POST['website'];
$email=$_POST['email'];
$custom_message='You have successfully, registered a new employee';

    $sql = "INSERT INTO organisation (orgname, orgtype, accountno, contact, address, website,adminid) 
    VALUES ('$orgname','$orgtype','$account','$contact','$address','$website','$adminID')";
    
    $result = mysqli_query($conn, $sql);
    $result2 = mysqli_query($conn, $sql2);

            if (isset($result))
            {
              $sql2 = "SELECT * FROM organisation WHERE adminID='$adminID'";
              $result = mysqli_query($conn,$sql);
              $sql2 = "UPDATE admin SET orgid = '".$_POST['orgID']."' WHERE adminid =$adminID";
              header("Location: admin.php?adminID=".$_GET['adminID']."");
              
            }



?>