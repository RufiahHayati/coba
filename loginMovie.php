<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dbmovie";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$username = $_GET['username'];
$password = $_GET['password'];

$sql = "SELECT * FROM tbuser where username='$username' and password='$password'";
$json["Result"]=array();
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $json["Result"]["Sukses"]=true;
} else {
    $json["Result"]["Sukses"]=false;
}
echo json_encode($json);
?>