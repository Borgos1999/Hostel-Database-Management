<html>
    <head>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="iframe.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KKD Hostel</title>
    </head>
   <?php
   session_start(); //starts the session
   if($_SESSION['user']){ // checks if the user is logged in  
   }
   else{
      header("location: index.html"); // redirects if user is not logged in
   }
   $user = $_SESSION['user']; //assigns user value
   ?>
<body>
<nav class="navbar">
        <div> <b id="logo">KKD Hostel</b></div>
        <div><a href="index.html">Home</a></div>
        <div><a href="view.php" target="photo">View your data</a></div>
        <div><a href="logout.php">Logout</a></div>
        <div>User id:<?php echo "$user"?></div>
    </nav>
    <div><iframe src="" frameborder="0" width="100%"name="photo" height="100%"margin="30px"></iframe></div>     
</body>
</html>