<?php
$servername = "localhost";
$username = "root";         
$password = "";             
$dbname = "stock"; 
$port = 3307;

$conn = new mysqli($servername, $username, $password, $dbname, $port);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully to the database.";
}
?>
