<?php
include "connection.php";

// $servername = "localhost";
// $username = "username";
// $password = "";
// $dbname = "dbsaurabh1";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }


//Inserting data
$firstname = $_POST["name"];
$email = $_POST["email"];
$mobile =$_POST["mobile"];
$password=$_POST["pass"];

$sql = "INSERT INTO MyGuest4 (firstname, email, mobile, password)
VALUES ('$firstname', '$email', '$mobile','$password')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
}

mysqli_close($conn);

?>