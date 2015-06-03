<?php
	//Start session
	session_start();
	
	$servername = "0.0.0.0";
	$username = "girgalicious";
	$password = "";
	$dbname = "login";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if($conn->connect_error)
	{
	    die("Connection failed: " . $conn->error);
	} 
	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$team = $_POST['team'];
	
    $salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
    
    $cost = 10;
    
    $salt = sprintf("$2a$%02d$", $cost) . $salt;

    $hash = crypt($password, $salt);
    
    $extension = new SplFileInfo($_FILES['avatar']['name']);
    $ext = $extension->getExtension();
    
    $sourcePath = $_FILES['avatar']['tmp_name'];       // Storing source path of the file in a variable
    $targetPath = "../images/profile/".$username.".".$ext; // Target path where file is to be stored
    
    $image = $username.".".$ext;
	
    $sql = "INSERT INTO members (id, username, email, password, team, profile_photo, first_name, last_name) VALUES (default, '$username', '$email', '$hash', '$team', '$image', '$firstname', '$lastname');";
    
    if ($conn->query($sql) === TRUE)
    {
    	$sql="SELECT * FROM members WHERE username='$username' LIMIT 1;";
    	$result = $conn->query($sql);
		if ($result->num_rows > 0)
        {
    	    $member = $result->fetch_assoc();
    		//Login Successful
    		session_regenerate_id();
    		$_SESSION['SESS_MEMBER_ID'] = $member['id'];
    		$_SESSION['SESS_USER_NAME'] = $member['username'];
    		$_SESSION['SESS_TEAM'] = $member['team'];
    		$_SESSION['SESS_PHOTO'] = $member['profile_photo'];
            echo "1";
        }
        
    }
    else
    {
        echo "0".$conn->error;

    }
    
    if(move_uploaded_file($sourcePath,$targetPath))
    {
        echo "1";
    }
    else
    {
        echo "you lose";
    }// Moving Uploaded file
    

	$conn->close();
?> 