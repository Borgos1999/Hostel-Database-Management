<html>
    <head>
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KKD Hostel</title>
    </head>
   <?php
   session_start(); //starts the session
   if($_SESSION['id']){ // checks if the user is logged in  
   }
   else{
      header("location: index.html"); // redirects if user is not logged in
   }
   require "connect.php";
   $id=$_REQUEST['id'];
   $hostel_id=$_REQUEST['hid'];
   $sql="SELECT * FROM `ROOM` WHERE `ROOM`.`ROOM_ID`=$id AND `ROOM`.`HOSTEL_ID`=$hostel_id";
   $result=mysqli_query($conn,$sql);
   $row=mysqli_fetch_assoc($result);
   $user = $_SESSION['id']; //assigns user value
   ?>
   <body><div class="form">
   <form action="updateroom.php" method="post">
   Hostel id:<br>
   <input type="number" name="hostel_id" value="<?php echo $hostel_id?>"><br><br>
   Room Id<br>
   <input type="text" name="room_id" value="<?php echo $id?>"><br><br>
   Capicity:<br>
   <input type="text" name="capacity" value="<?php echo $row['CAPACITY']?>"><br><br>
   Furniture count:<br>
   <input type="number" name="furniture_count" value="<?php echo $row['FURNITURE_COUNT']?>"><br><br>
   <button type="submit" >save</button>
   </form>
   </div>
   </body>
   </html>