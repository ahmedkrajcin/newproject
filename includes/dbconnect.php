<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS myDB";
if ($conn->query($sql) === TRUE) {
    //echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}//create table
$sql1="CREATE TABLE IF NOT EXISTS myDB.comments (
  nickname VARCHAR(15) NOT NULL ,
  email VARCHAR(45) NOT NULL,
  website VARCHAR(45) NOT NULL,
  comment VARCHAR(45) NOT NULL,
  date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  aproved int(1) DEFAULT 0
);";
if ($conn->query($sql1) === TRUE) {
    //echo "table created successfully";
	
} else {
    echo "Error creating database: " . $conn->error;
}


?>