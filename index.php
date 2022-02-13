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

$sql = "SELECT COUNT(ID) as Jumlah_Users FROM users";
$result = $conn->query($sql);

$result->fetch_assoc();
echo $result('Jumlah_Users');


$conn->close();
?>
