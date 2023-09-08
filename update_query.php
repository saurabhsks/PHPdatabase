<?php
include "connection.php";
 $id=$_GET["id"];
$firstname = $_POST["name"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$password = $_POST["pass"];

$sql = "UPDATE MyGuest4 SET firstname='$firstname', email='$email', mobile='$mobile', password='$password' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

header("location:Data_display.php")

?>