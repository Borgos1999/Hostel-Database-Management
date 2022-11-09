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
   $user = $_SESSION['id']; //assigns user value
   ?>
   <body>
   <div >
<form class="form" action="confirmAdmin.php" method="POST">
<h1>Add Admin </h1>
    New Admin Id:<br>
    <input type="text" name="stud_id" required="required"><br><br>
    password:<br>
    <input type="password" name="password"required="required"><br><br>
    Re-enter password:<br>
    <input type="password" name="password2"required="required"><br><br>
    <button type="submit" >submit</button>
    <button type="reset" >Reset</button>
</form>
</body>
</html>