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
        <p style="color: #00bfff;">Your Human Resource Manager</p>
        </div>
        <!-- <div class="container"> -->
    <!-- <form action="login.php" method="post">
        <h2>LOGIN</h2>
        <?//php if(isset($_GET['error'])) { ?>
        <p class="error"> <?//php echo $_GET['error']; ?> </p>
    <?php //} ?>
    <label> Username<br>
    <input type="text" name="username" placeholder="User Name"><br>
        </label>
        <label>Password<br>
    <input type="password" name="password" placeholder="Password"><br>
        </label>
    <button type="submit">Login</button>
    <p><a href="signup.php">Create new Account</a></p>
        </form> -->
        <!-- </div> -->
        
        <div>
            <div>
                <h2>ADMIN</h2>
            <button onclick="window.location.assign('login2.php')">Login</button>
            <button onclick="window.location.assign('signup.php')">Sign Up</button>
        </div>
        <div>
            <h2>USER</h2>
            <button onclick="window.location.assign('login3.php')">Login</button>
            <button onclick="window.location.assign('signup.php')">Sign Up</button>
        </div>
        </div>
        <footer>
	  	<div id="parent">
				<div id="child1">
					<h6>Aboutus</h6>
					<p>We are a system that enables<br> employees to get salary. <br>Also enables people to<br> apply for a job. </p>
				</div>
				<div id="child2">
					<h7>Contact</h7>
					<p>Contact us on<br> Tel 0774222076.<br> Facebook. <br>Twitter @werkify. <br>Whatsapp +256756857648</p>
				</div>
			</div>
			<br><br><br>
			<h4>Copy rights &copy werkify, all rights reserved 2022.</h4>
	  </footer>
</body>
</html>