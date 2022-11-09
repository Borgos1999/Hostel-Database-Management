<?php
require "connect.php";
$stud_id=$_POST['stud_id'];
$time_in=$_POST['time_in'];
$time_out=$_POST['time_out'];
$name=$_POST['visitor_name'];
$date=$_POST['date'];
$sql="INSERT INTO `visitor` (`STUD_ID`, `VISITOR_NAME`, `TIME_IN`, `TIME_OUT`, `DATE`) VALUES ('$stud_id','$name','$time_in','$time_out','$date')";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<h1>NOW You can meet.plese go!</h1>";
}
else if(mysqli_error($conn)=="Cannot add or update a child row: a foreign key constraint fails (`hostel`.`visitor`, CONSTRAINT `visitor_ibfk_1` FOREIGN KEY (`STUD_ID`) REFERENCES `student` (`STUD_ID`))"){
        echo "<h1>USN is not valid.</h1>";
}
?>