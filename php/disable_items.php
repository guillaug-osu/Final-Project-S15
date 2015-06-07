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

$leaguename = $_POST['league'];

$isAvailable = true; 

$sql="SELECT team_name FROM league_teams WHERE league_name = '$leaguename';";
$result = $conn->query($sql);

$data = array();
$return = array();

if ($result->num_rows > 0)
{
    $data['response'] = "1";
    while($row = $result->fetch_assoc())
    {
      $return[] = array(
          'team' => $row['team_name']
      );
    }
    $data['data'] = $return;
}



echo json_encode($data);

$conn->close();

exit;

?>