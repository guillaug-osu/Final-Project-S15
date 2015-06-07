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

$sql="SELECT league_name FROM leagues WHERE count <= '31';";
$result = $conn->query($sql);

$data = array();
$return = array();

if ($result->num_rows > 0)
{
    $data['response'] = "1";
    while($row = $result->fetch_assoc())
    {
      $return[] = array(
          'league_name' => $row['league_name']
      );
    }
    $data['data'] = $return;
}
else
{
    $data['response'] = "2";
}



echo json_encode($data);

$conn->close();

exit;

?>