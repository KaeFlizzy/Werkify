<?php
session_start();
include "db_conn.php";

$adminID = $_POST['adminId'];
$salaryDesc = $_POST['salaryDesc'];
$amount = $_POST['amount'];
$allowances= $_POST['allowances'];
$deductions= $_POST['deductions'];
$netSalary= $_POST['netSalary'];
$custom_message='You have successfully, registered a new employee';

    $sql = "INSERT INTO salary (adminId, salaryDesc, amount, allowances, deductions, netSalary) 
    VALUES ('$adminId','$salaryDesc','$amount','$allowances','$deductions','$netSalary')";
    
    $result = mysqli_query($conn, $sql);
    
            if (isset($result))
            {
              
              if (isset($result3)){
              header("Location: organisation.php?id=".$adminID."");
              } 
            }



?>