
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body>
    
    <?php
include "Mysqlconnection.php";
$id=$_GET["id"];

$sql = "SELECT * FROM MyGuest4 WHERE id=$id";
$result = mysqli_query($conn, $sql); 

$arrdata=mysqli_fetch_assoc($result);

mysqli_close($conn);
//Inserting data
// $firstname = $_POST["name"];
// $email = $_POST["email"];
// $mobile =$_POST["mobile"];
// $password=$_POST["pass"];

// $sql = "INSERT INTO MyGuest4 (firstname, email, mobile, password)
// VALUES ('$firstname', '$email', '$mobile','$password')";

// if (mysqli_query($conn, $sql)) {
//   echo "New record created successfully";
// }

// mysqli_close($conn);

?>
<br/>
    <form action="Update_query.php?id=<?php echo $id ?>" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter your name" value="<?php echo $arrdata["firstname"]?>" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email" value="<?php echo $arrdata["email"]?>" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mobile</label>
            <input type="text" name="mobile" class="form-control" id="exampleInputPassword1" placeholder="Enter your mobile number" value="<?php echo $arrdata["mobile"]?>" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Enter your Password" value="<?php echo $arrdata["password"]?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>