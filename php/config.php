<?php
$host = "sql9.freemysqlhosting.net";
$userName = "sql9626194";
$password = "1tu7CvNuxn";
$dbName = "sql9626194";
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>