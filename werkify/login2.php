<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <title>Werkify</title>
</head>
<body>
    
    <div class="topbar">
        <h2>WERKIFY</h2>
        <p>Your Human Resource Manager</p>
        </div>
        <div class="container">
    <form action="login.php" method="post">
        <h2>LOGIN</h2>
        <?php if(isset($_GET['error'])) { ?>
        <p class="error"> <?php echo $_GET['error']; ?> </p>
    <?php } ?>
    <label> Username<br>
    <input type="text" name="username" placeholder="User Name"><br>
        </label>
        <label>Password<br>
    <input type="password" name="password" placeholder="Password"><br>
        </label>
    <button type="submit">Login</button>
    <p><a href="signup.php">Create new Account</a></p>
        </form>
        </div>
</body>
</html>