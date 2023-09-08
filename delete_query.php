<?php
include 'connection.php';
 $id = $_GET["id"];

 $deletequery=" DELETE FROM MyGuest4 where id=$id ";
 $query=mysqli_query($conn,$deletequery);

 if($query){
    ?>
    <script>
        alert("Deleted successfully");
        </script>
        <?php
 }else
 {
    ?>
    <script>
        alert(" Not Deleted");
        </script>
        <?php 
 }
 header("location:Data_display.php");
?>