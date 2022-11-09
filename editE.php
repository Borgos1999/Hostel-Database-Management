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
   $hid=$_REQUEST['hid'];
   $sql="SELECT * FROM `HOSTEL_EMP` WHERE `HOSTEL_EMP`.`EMP_ID`=$id";
   $result=mysqli_query($conn,$sql);
   $row=mysqli_fetch_assoc($result);
   $user = $_SESSION['id']; //assigns user value
   ?>
   <body><div class="form">
   <form action="updatee.php" method="post">
   
   Hostel id:<br>
   <input type="number" name="hostel_id" value="<?php echo $hid?>"><br><br>
   Employee id:<br>
   <input type="number" name="emp_id" value="<?php echo $id?>"><br><br>
   Employee name:<br>
   <input type="text" name="emp_name" value="<?php echo $row['EMP_NAME']?>"><br><br>
   Employee Type:<br>
   <input type="text" name="emp_type" value="<?php echo $row['EMP_TYPE']?>"><br><br>
   phone No.:<br>
   <input type="number" name="phno" value="<?php echo $row['PH_NO']?>"><br><br>
   Address:<br>
   <input type="text" name="address" value="<?php echo $row['ADDRESS']?>"><br><br>
   Salary:<br>
   <input type="number" name="salary" value="<?php echo $row['SALARY']?>"><br><br>
   <button type="submit" >save</button>
   </form>
   </div>
   </body>
   </html>