<?php
include_once 'db_conn.php';
$sql2 ="SELECT* FROM job WHERE jobId='" . $_GET["id"] . "'";
$sql = "DELETE FROM job WHERE jobId='" . $_GET["id"] . "'";
$result=mysqli_query($conn,$sql2);
$row=mysqli_fetch_array($result);
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header("Location: organization.php?id=".$row['adminId']);
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>