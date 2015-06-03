<?php
$servername = "0.0.0.0";
$username = "girgalicious";
$password = "";
$dbname = "nfl";

$number = $_POST['number'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->error);
} 

$sql = "SELECT name, Head_coach, wins, losses, ties, logo FROM teams WHERE id='$number'";
$result = $conn->query($sql);

$data = [];

if ($result->num_rows > 0)
{
    $row = $result->fetch_assoc();
    $return['response'] = "1";
    $return['name'] = $name = $row['name'];
    $return['test'] = $name;
    $return['coach'] = $row['Head_coach'];
    $return['wins'] = $row['wins'];
    $return['losses'] = $row['losses'];
    $return['ties'] = $row['ties'];
    $return['logo'] = $row['logo'];
        /* free result set */
    $result->free();
} else {
    $return['response'] =  "0".
    $return['error'] = $mysqli->error;
}

$sql = "SELECT ROUND(AVG(OVERALL_RATING),0) AS AVERAGE FROM players WHERE TEAM='$name';";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
    $row = $result->fetch_assoc();
    $return['overall'] = $row['AVERAGE'];
    $result->free();
}else {
    $return['response'] =  "0".
    $return['error'] = $mysqli->error;
}

$sql = "SELECT SUM(CAP_HIT) AS CAP FROM salaries WHERE Team='$name';";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
    $row = $result->fetch_assoc();
    $return['cap'] = $row['CAP'];
    $result->free();
}else {
    $return['response'] =  "0".
    $return['error'] = $mysqli->error;
}

echo json_encode($return);

$conn->close();

exit;
?>