<?php
include 'db_conn.php';
$sql2 ="SELECT* FROM job WHERE deptId='" . $_GET["id"] . "'";
$result= mysqli_query($conn,$sql2);

    if(mysqli_num_rows($result) > 0)
    {
        $i=0;
        while($row2 = mysqli_fetch_array($result))
        {
            $sql3="DELETE FROM job WHERE deptId='" . $_GET["id"] . "'";
            $i++;
        }
    }
        
        $sql = "DELETE FROM department WHERE deptId='" . $_GET["id"] . "'";
        if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header("Location: deptUpdate.php?id=". $row2["adminId"]);
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>