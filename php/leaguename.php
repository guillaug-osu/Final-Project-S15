<?php
$servername = "0.0.0.0";
$username = "girgalicious";
$password = "";
$dbname = "nfl";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->error);
} 

$leaguename = $_POST['leaguename'];

$isAvailable = true; 

$sql="SELECT * FROM leagues WHERE league_name='$leaguename' LIMIT 1;";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
    $isAvailable = false;
}


echo json_encode(array('valid' => $isAvailable,));

?>