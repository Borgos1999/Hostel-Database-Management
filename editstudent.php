<html>
    <head>
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
   $sql="SELECT * FROM `STUDENT` WHERE `STUDENT`.`STUD_ID`='$id'";
   $result=mysqli_query($conn,$sql);
   $row=mysqli_fetch_assoc($result);
   $user = $_SESSION['id']; //assigns user value
   ?>
   <body><div class="form">
   <form action="updatestudent.php" method="post">
   Student id:<br>
   <input type="text" name="stud_id" value="<?php echo $id?>"><br><br>
   Student Name:<br>
   <input type="text" name="stud_name" value="<?php echo $row['STUD_NAME']?>"><br><br>
   Father Name:<br>
   <input type="text" name="father_name" value="<?php echo $row['FATHER_NAME']?>"><br><br>
   ROOM ID:<br>
   <input type="number" name="room_id" value="<?php echo $row['ROOM_ID']?>"><br><br>
   HOSTEL ID:<br>
   <input type="number" name="hostel_id" value="<?php echo $row['HOSTEL_ID']?>"><br><br>
   DOB:<br>
   <input type="DOB" name="dob" value="<?php echo $row['DOB']?>"><br><br>
   Ph no:<br>
   <input type="number" name="phno" value="<?php echo $row['PH_NO']?>"><br><br>
   FEE DUE:<br>
   <input type="number" name="feedue" value="<?php echo $row['FEE_DUE']?>"><br><br>
   <button type="submit" >save</button>
   </form>
   </div>
   </body>
   </html>