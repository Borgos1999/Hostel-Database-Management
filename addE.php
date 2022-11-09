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
   <form action="addEdb.php" method="post">
   Hostel id:<br>
   <input type="number" name="hostel_id" ><br><br>
   Employee ID:<br>
   <input type="number" name="emp_id" ><br><br>
   Employee name:<br>
   <input type="text" name="emp_name" ><br><br>
   Address:<br>
   <input type="text" name="address"><br><br>
   Emp_type:<br>
   <input type="text" name="emp_type"><br><br>
   Salary:<br>
   <input type="number" name="salary" ><br><br>
   Phone No:<br>
   <input type="number" name="phno" ><br><br>
   <button type="submit" >save</button>
   <button type="reset">reset</button>
   </form>
   </div>
   </body>
   </html>