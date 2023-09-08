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
    <br/>
 <button onclick="document.location='User.php'" class="btn btn-primary">ADD User</button>
 <br/>


<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </th>
    </tr>
  </thead>
  <tbody>
    <?php  include "Mysqlconnection.php";
        $sql = "SELECT * FROM MyGuest4";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {


        
// $ids=$GET["id"];
// $showquery="select * from MyGuest4 where id ={$id}";

// $showdata=mysqli_query($conn,$showquery);
// $arrdata=mysqli_fetch_array($showdata);

?>
    <tr>
      <td><?php echo $row["id"]?></td>
      <td><?php echo $row["firstname"]?></td>
      <td><?php echo $row["email"]?></td>
      <td><?php echo $row["mobile"]?></td>
      <td><?php echo $row["password"]?></td>
      <td>
      <!-- <a id="myLink" href="updates.php?id=<?php echo $row['id'] ?>" style="display: none;"><button type="button" class="btn btn-primary">Update</button></a> -->
      <a href="Update_user.php?id=<?php echo $row["id"]?>"><button type="button" class="btn btn-danger">Update</button></td>
      <td>
        
       <a href="Delete.php?id=<?php echo $row["id"]?>"> <button type="button" class="btn btn-danger">Delete</button></a>
    </td>
    </tr>

    


    <?php }} mysqli_close($conn);?>
    <tbody>
</table>

 </body>

 </html>