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
   if($_SESSION['id']){ // checks if the user is logged in  
   }
   else{
      header("location: index.html"); // redirects if user is not logged in
   }
   $user = $_SESSION['id']; //assigns user value
   ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KKD Hostel</title>
</head>

<body>
    <nav class="navbar">
        <div> <b id="logo">KKD Hostel</b></div>
        <div><a href="index.html">Home</a></div>
        <div><a href="addAdmin.php" target="photo">Add new Admin</a></div>
        <div><a href="logout.php">Log out</a></div>

    </nav>
    <nav class="navbar2">
        <div><a href="hostelAdmin.php" target="photo">Hostel </a>\\</div>
        <div><a href="employeesAdmin.php"target="photo">Employees </a>\\</div>
        <div><a href="roomsAdmin.php"target="photo">Rooms </a>\\</div>
        <div><a href="studentAdmin.php"target="photo"> Students </a>\\</div>
        <div><a href="visitorsAdmin.php "target="photo"> Visitors  </a>\\</div>
        <div><a href="outpassAdmin.php" target="photo"> Outpass</a></div>
    </nav>
    <div><iframe src="" frameborder="0" width="100%"name="photo" height="500px"margin="30px"></iframe></div>
<footer id="footer">HI,this website is developed to use in the hostel management.<br>
    @copyright:2018-22<br>
    kkd hostel teams<br>
    email:kkd_hostel@gmail.com<br>

</footer>
</body>

</html>