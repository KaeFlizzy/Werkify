<?php
include_once 'db_conn.php';
$sql = "DELETE FROM employee WHERE empID='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header("Location: updateEmployee.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>