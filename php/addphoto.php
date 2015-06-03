<?php
	
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
	
    $name = $_SESSION['SESS_USER_NAME'];
    $team = $_POST['team'];
    
    $extension = new SplFileInfo($_FILES['avatar']['name']);
    $ext = $extension->getExtension();
    
    $sourcePath = $_FILES['avatar']['tmp_name'];       // Storing source path of the file in a variable
    $targetPath = "../images/profile/".$name.".".$ext; // Target path where file is to be stored
    
    $image = $name.".".$ext;
    
	$sql="UPDATE FROM members SET profile_photo='$image', team='$team' WHERE username='$name';";
    if($conn->query($sql) === TRUE)
    {
        echo "1";
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