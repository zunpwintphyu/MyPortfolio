<?php
	$DB_HOST = "localhost";
	$DB_USER = "root";
	$DB_PASS = "";
	$DB_Name="myself";
	
	
$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS,$DB_Name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
?>

