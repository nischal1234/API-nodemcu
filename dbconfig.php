<?php
//connect to localhost if not exists
$servername = "localhost";
$username = "root";
$password = "";


// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection

// Create database
$sql = "CREATE DATABASE sensor";

	echo "Database created successfully";

$conn->close();


echo "<br>";
//Connect to database and create table
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_rest_api_db";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}



$sql = "CREATE TABLE logs (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
sensor1 VARCHAR(30),
sensor2 VARCHAR(30),
sensor3 VARCHAR(30),
sensor4 VARCHAR(50),
sensor5 VARCHAR(50),
sensor6 VARCHAR(50),
sensor7 VARCHAR(50)

)";


if ($conn->query($sql) === TRUE) {
	echo "Table logs created successfully";
} else {
	echo "Error creating table: " . $conn->error;
}


$conn->close();
?>
?>