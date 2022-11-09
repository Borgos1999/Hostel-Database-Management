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
   ?>
   <body><div class="form">
   <form action="addstudentdb.php" method="post">
   Student id:<br>
   <input type="text" name="stud_id" ><br><br>
   Student Name:<br>
   <input type="text" name="stud_name" ><br><br>
   Father Name:<br>
   <input type="text" name="father_name" ><br><br>
   ROOM ID:<br>
   <input type="number" name="room_id" ><br><br>
   HOSTEL ID:<br>
   <input type="number" name="hostel_id" ><br><br>
   DOB:<br>
   <input type="DOB" name="dob" ><br><br>
   Ph no:<br>
   <input type="number" name="phno" ><br><br>
   FEE DUE:<br>
   <input type="number" name="feedue"><br><br>
   <button type="submit" >save</button>
   <button type="reset">reset</button>
   </form>
   </div>
   </body>
   </html>