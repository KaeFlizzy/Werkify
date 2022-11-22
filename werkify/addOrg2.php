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
    
            if (isset($result))
            {
              $sql2 = "SELECT * FROM organisation WHERE adminID='$adminID'";
              $result2 = mysqli_query($conn,$sql2);
              $row = mysqli_fetch_array($result2);
              $sql3 = "UPDATE admin SET orgid = '".$row['orgID']."' WHERE adminid =$adminID";
              $result3 = mysqli_query($conn, $sql3);
              if (isset($result3)){
              header("Location: admin.php?id=".$adminID."");
              } 
            }



?>