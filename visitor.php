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
<form class="form" action="insertvisitor.php" method="POST">
<h2>Enter Visitors Details</h2>
    STUDENT USN:<br>
    <input type="text" name="stud_id" required="required"><br><br>
    TIME_IN:<br>
    <input type="time" name="time_in"required="required"><br><br>
    TIME_OUT:<br>
    <input type="time" name="time_out"required="required"><br><br>
    VISITOR NAME:<br>
    <input type="text" name="visitor_name"required="required"><br><br>
    DATE:<br>
    <input type="date" name="date" data-date-format="YYYY MMMM DD" required="required"><br><br>
    <button type="submit" >submit</button>
    <button type="reset" >Reset</button>
</form>
</div>
</body>
</html>