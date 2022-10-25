<?php
session_start();
include "db_conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEW ACCOUNT</title>
</head>
<body>
<div>
    <h1>CREATE NEW ACCOUNT</h1>
    <form action="create2.php" method="post">
    <label>
        Employee ID
    <input type="text" name="empID" value="<?php echo"$_POST" ?>">
    </label>
</form>
</div>
    
</body>
</html>
