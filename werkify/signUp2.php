<?php	


            $username = $_POST['username'];	
            $name = $_POST['name'];	
            $nin = $_POST['nin'];	
            $gender = $_POST['gender'];	
            $email = $_POST['email'];	
            $password = $_POST['password'];	
            $contact = $_POST['contact']; 	
            $nationality = $_POST['nationality'];
         
            // Database connection
            $conn = new mysqli('localhost','root','','werkifydb');
            if(!$conn){
                echo ('Connection Error');
	}	else {
                $sql = "INSERT INTO admin(username, name, nin, gender, email, password, contact, nationality) 
                VALUES ('$username','$name','$nin','$gender','$email','$password','$contact','$nationality' )";
                $result = mysqli_query($conn, $sql);
    
                        if (isset($result))
                        {
                            echo("You have been successfully registered");
                          header("Location: admin.php");
    
                        }
            }
        	
            
                    ?>