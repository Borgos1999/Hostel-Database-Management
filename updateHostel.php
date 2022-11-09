<?php
session_start(); //starts the session
if($_SESSION['id']){ // checks if the user is logged in  
}
else{
   header("location: index.html"); // redirects if user is not logged in
}
$hostel_id=$_POST["hostel_id"]; 
$hostel_name=$_POST["hostel_name"];
$location=$_POST["location"]; 
$no_of_rooms=$_POST["no_of_rooms"];
require "connect.php";
$sql="UPDATE `hostel` SET `NO_OF_ROOMS` = '$no_of_rooms', `HOSTEL_NAME` = '$hostel_name', `LOCATION` = '$location', `HOSTEL_ID` = '$hostel_id' WHERE `hostel`.`HOSTEL_ID` = '$hostel_id'";
$result=mysqli_query($conn,$sql);
if($result){
header("location: hostelAdmin.php");
}
else{
    echo "Error:".mysqli_error($result);
}
?>