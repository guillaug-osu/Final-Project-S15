<?php
	//Start session
	session_start();
	
	$servername = "0.0.0.0";
	$username = "girgalicious";
	$password = "";
	$dbname1 = "login";
	
	//Create connection
	$conn1 = new mysqli($servername, $username, $password, $dbname1);
	// Check connection
	if($conn1->connect_error)
	{
	    die("Connection failed: " . $conn1->error);
 	} 
	$dbname2 = "nfl";
	
	// Create connection
	$conn2 = new mysqli($servername, $username, $password, $dbname2);
	// Check connection
	if($conn2->connect_error)
	{
	    die("Connection failed: " . $conn2->error);
	} 
	
	$firstname = trim($_POST['firstname']);
	$lastname = trim($_POST['lastname']);
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	$email = trim($_POST['email']);
	$team = trim($_POST['team']);
    $create = trim($_POST['create_league_']);
    $join = trim($_POST['join_league']);


    $salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
    
    $cost = 10;
    
    $salt = sprintf("$2a$%02d$", $cost) . $salt;

    $hash = crypt($password, $salt);
    
    $extension = new SplFileInfo($_FILES['avatar']['name']);
    $ext = $extension->getExtension();
    
    $sourcePath = $_FILES['avatar']['tmp_name'];       // Storing source path of the file in a variable
    $targetPath = "../images/profile/".$username.".".$ext; // Target path where file is to be stored
    
    $image = $username.".".$ext;
	
    $sql = "INSERT INTO members (id, username, email, password, team, profile_photo, first_name, last_name, revisions) VALUES (default, '$username', '$email', '$hash', '$team', '$image', '$firstname', '$lastname', '1');";
    
    if ($conn1->query($sql) === TRUE)
    {
    	$sql="SELECT * FROM members WHERE username='$username' LIMIT 1;";
    	$result = $conn1->query($sql);
		if ($result->num_rows > 0)
        {
    	    $member = $result->fetch_assoc();
    		//Login Successful
    		session_regenerate_id();
    		$_SESSION['SESS_MEMBER_ID'] = $member['id'];
    		$_SESSION['SESS_USER_NAME'] = $member['username'];
            $_SESSION['SESS_TEAM'] = $member['team'];
    		$_SESSION['SESS_PHOTO'] = $member['profile_photo'];

            if(isset($create) && !empty($create))
            {
                $_SESSION['SESS_LEAGUE'] = $create;
                $sql = "UPDATE members SET league_name='$create' WHERE username='$username';";
            }
            else if(isset($join) && !empty($join))
            {
                $_SESSION['SESS_LEAGUE'] = $join;
                $sql = "UPDATE members SET league_name='$join' WHERE username='$username';";
            }
            
            if ($conn1->query($sql) === TRUE)
            {
                echo "1";
            }
            
            echo "1";
        }
        
    }
    else
    {
        echo "0".$conn1->error;

    }
    
    if(move_uploaded_file($sourcePath,$targetPath))
    {
        echo "1";
    }
    else
    {
        echo "you lose";
    }

    if(isset($create) && !empty($create))
    {
            $sql = "CREATE TABLE `$create` LIKE players;";
            $sql .= "INSERT INTO `$create` SELECT * FROM players;";
            $sql .= "INSERT INTO leagues VALUES (default, '$create', '1');";
            $sql .= "INSERT INTO league_teams VALUES (default, '$create', '$team', '$username');";
           
            if ($conn2->multi_query($sql) === TRUE)
            {
                echo "1";
            }
            else
            {
                echo "Multi query failed: (" . $conn2->errno . ") " . $conn2->error;
            }

     }
    else if(isset($join) && !empty($join))
    {
        $sql = "UPDATE leagues SET count = count + 1 WHERE league_name='$join';";
        $sql .= "INSERT INTO league_teams VALUES (default, '$join', '$team', '$username');";
        
        if ($conn2->multi_query($sql) === TRUE)
        {
            echo "1";
        }
    }
    else
    {
        echo "0";
    }

    $conn1->close();
	$conn2->close();
	
	exit();
?> 