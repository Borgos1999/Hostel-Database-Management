<?php
session_start(); //starts the session
if($_SESSION['id']){ // checks if the user is logged in  
}
else{
   header("location: index.html"); // redirects if user is not logged in
}
$stud_id=$_POST["stud_id"]; 
$stud_name=$_POST["stud_name"];
$father_name=$_POST["father_name"]; 
$room_id=$_POST['room_id'];
$hostel_id=$_POST['hostel_id'];
$dob=$_POST["dob"];
$phno=$_POST["phno"];
$feedue=$_POST["feedue"];
require "connect.php";
$sql="UPDATE `student` SET `STUD_NAME` = '$stud_name', `FATHER_NAME` = '$father_name', `ROOM_ID` = '$room_id', `PH_NO` = '$phno', `DOB` = '$dob', `FEE_DUE` = '$feedue',`HOSTEL_ID`='$hostel_id' WHERE `student`.`STUD_ID` = '$stud_id'";
$result=mysqli_query($conn,$sql);
if($result){
header("location: studentAdmin.php");
}
else{
    echo "Error:".mysqli_error($result);
}
?>