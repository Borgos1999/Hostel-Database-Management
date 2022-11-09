<?php
require "connect.php";

?>
<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="index.css">
    </head>
<body>
    
    <div >
<form class="form" action="insertoutpass.php" method="POST">
<h2>Enter Outpass details</h2>
    USN:<br>
    <input type="text" name="stud_id" required="required"><br><br>
    TIME_IN:<br>
    <input type="time" name="time_in"required="required"><br><br>
    TIME_OUT:<br>
    <input type="time" name="time_out"required="required"><br><br>
    DAYS ON LEAVE:<br>
    <input type="number" name="days_on_leave"required="required"><br><br>
    DATE:<br>
    <input type="date" name="date" data-date-format="YYYY-MMMM-DD" required="required"><br><br>
    <button type="submit" >submit</button>
    <button type="reset" >Reset</button>
</form>
</div>
</body>
</html>