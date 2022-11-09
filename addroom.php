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
   ?>
   <body><div class="form">
   <form action="addroomdb.php" method="post">
   Hostel id:<br>
   <input type="number" name="hostel_id" ><br><br>
   Room Id<br>
   <input type="text" name="room_id" ><br><br>
   Capicity:<br>
   <input type="text" name="capacity"><br><br>
   Furniture count:<br>
   <input type="number" name="furniture_count" ><br><br>
   <button type="submit" >save</button>
   </form>
   </div>
   </body>
   </html>