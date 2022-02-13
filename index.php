<?php
$servername = "172.18.0.2";
$username = "root";
$password = "kali";
$dbname = "trucorp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$result=mysql_query("SELECT count(ID) as total from users");
$data=mysql_fetch_assoc($result);
echo $data['total'];


$conn->close();
?>
