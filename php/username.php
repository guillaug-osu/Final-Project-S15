<?php
$servername = "0.0.0.0";
$username = "girgalicious";
$password = "";
$dbname = "login";

$bd = mysql_connect($servername, $username, $password) or die("Could not connect database");
mysql_select_db($dbname, $bd) or die("Could not select database");

$username = $_POST['username'];

$isAvailable = true; 

$qry="SELECT * FROM members WHERE username='$username';";
$result=mysql_query($qry);
$count = mysql_num_rows($result);

if($count > 0)
{
    $isAvailable = false;

}

echo json_encode(array('valid' => $isAvailable,));