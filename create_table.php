<?php

//Connecting to database
$servername="localhost";
$username="root";
$password="";
$database="dbsaurabh3";

//Creating a connection
$conn=mysqli_connect($servername,$username,$password,$database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "Connection was successful <br>";
}

//creating a table in database

$sql = "CREATE TABLE MyGuest4 (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  email VARCHAR(50) NOT NULL,
  mobile VARCHAR(50) NOT NULL,
  password VARCHAR(50) NOT NULL,
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
  
  $conn->close();





?>