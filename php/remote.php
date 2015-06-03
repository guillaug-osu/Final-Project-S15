<?php
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
$password = $_POST['password'];

$isAvailable = false; 

$sql="SELECT * FROM members WHERE username='$username' LIMIT 1;";
$result = $conn->query($sql);

$member = $result->fetch_assoc();

$hash = $member['password'];

if(password_verify($password, $hash))
{
    if($result->num_rows > 0)
    {
        $isAvailable = true;
    }
}


echo json_encode(array('valid' => $isAvailable,));

?>