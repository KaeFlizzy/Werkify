<?php	


            $userName = $_POST['userName'];	
            $firstName = $_POST['firstName'];	
            $lastName = $_POST['lastName'];	
            $gender = $_POST['gender'];	
            $email = $_POST['email'];	
            $password = $_POST['password'];	
            $number = $_POST['number']; 	
            // Database connection
            $conn = new mysqli('localhost','root','','werkifydb');
            if(!$conn){
                echo ('Connection Error');
	}	else {
                $sql = "INSERT INTO user(user_Name, fname, lname, gender, email, password, tel) VALUES ('$userName','$firstName','$lastName','$gender','$email','$password','$number' )";
                $result = mysqli_query($conn, $sql);
    
                        if (isset($result))
                        {
                            echo("You have been successfully registered");
                          header("Location: index.php");
    
                        }
            }
        	
            
                    ?>