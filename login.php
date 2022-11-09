<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="iframe.css">
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KKD Hostel</title>
</head>
<body>
<body>
    <nav class="navbar">
        <div> <b id="logo">KKD Hostel</b></div>
        <div><a href="index.html">Home</a></div>
        <div><a href="login.php">Login</a></div>
        <div><a href="signup.php">Sign up</a></div>
        <div><a href="adminlogin.php">Admin</a></div>
        <div><a href="visitor.php" target="photo">visitors</a></div>
        <div><a href="outpass.php" target="photo">Outpass</a></div>

    </nav>
<div >
<form class="form" action="loginauth.php" method="POST">
    <h1>Log in</h1>
    USN:<br>
    <input type="text" name="stud_id" required="required"><br><br>
    password:<br>
    <input type="password" name="password"required="required"><br><br>
    
    <button type="submit" >submit</button>
    <button type="reset" >Reset</button>
</form>
</body>
</html>