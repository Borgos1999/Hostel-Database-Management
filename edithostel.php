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
   $sql="SELECT * FROM `HOSTEL` WHERE `HOSTEL`.`HOSTEL_ID`=$id";
   $result=mysqli_query($conn,$sql);
   $row=mysqli_fetch_assoc($result);
   $user = $_SESSION['id']; //assigns user value
   ?>
   <body><div class="form">
   <form action="updateHostel.php" method="post">
   Hostel id:<br>
   <input type="number" name="hostel_id" value="<?php echo $id?>"><br><br>
   Hostel name:<br>
   <input type="text" name="hostel_name" value="<?php echo $row['HOSTEL_NAME']?>"><br><br>
   LOCATION:<br>
   <input type="text" name="location" value="<?php echo $row['LOCATION']?>"><br><br>
   No of Rooms:<br>
   <input type="text" name="no_of_rooms" value="<?php echo $row['NO_OF_ROOMS']?>"><br><br>
   <button type="submit" >save</button>
   </form>
   </div>
   </body>
   </html>