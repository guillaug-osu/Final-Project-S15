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
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->error);
	} 
	
	$username = $_POST['username'];

	$sql="SELECT * FROM members WHERE username='$username' LIMIT 1;";
	$result = $conn->query($sql);

	if ($result->num_rows > 0)
	{
	    $member = $result->fetch_assoc();
		//Login Successful
		session_regenerate_id();
		$_SESSION['SESS_MEMBER_ID'] = $member['id'];
		$_SESSION['SESS_USER_NAME'] = $member['username'];
		$_SESSION['SESS_FIRST_NAME'] = $member['first_name'];
		$_SESSION['SESS_LAST_NAME'] = $member['last_name'];
		$_SESSION['SESS_TEAM'] = $member['team'];
		$_SESSION['SESS_PHOTO'] = $member['profile_photo'];
		session_write_close();
		echo "1";
	}
	else
	{
		echo "0";
		session_write_close();
	}
	
?>