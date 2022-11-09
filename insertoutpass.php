<?php
require "connect.php";
$stud_id=$_POST['stud_id'];
$time_in=$_POST['time_in'];
$time_out=$_POST['time_out'];
$days=$_POST['days_on_leave'];
$date=$_POST['date'];
$sql="INSERT INTO `outpass` (`STUD_ID`, `TIME_IN`, `TIME_OUT`, `DAYS_ON_LEAVE`, `DATE`) VALUES ('$stud_id','$time_in','$time_out',$days,'$date')";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<h1>your complain has been registered</h1>";
}
else if(mysqli_error($conn)=="Duplicate entry '$stud_id' for key 'PRIMARY'")
echo "<h1>You have already applied once!</h1>";
else{
        echo "<h1>Your USN is not valid.please sign up first</h1>";
}
mysqli_close($conn);
?>