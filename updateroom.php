<?php
session_start(); //starts the session
if($_SESSION['id']){ // checks if the user is logged in  
}
else{
   header("location: index.html"); // redirects if user is not logged in
}
$room_id=$_POST["room_id"];
$hostel_id=$_POST["hostel_id"]; 
$capacity=$_POST["capacity"]; 
$furniture_count=$_POST["furniture_count"];
require "connect.php";
$sql="UPDATE `room` SET `ROOM_ID` = '$room_id', `HOSTEL_ID` = '$hostel_id', `CAPACITY` = '$capacity', `FURNITURE_COUNT` = '$furniture_count' WHERE `room`.`ROOM_ID` = $room_id AND `room`.`HOSTEL_ID` = $hostel_id";
$result=mysqli_query($conn,$sql);
if($result){
header("location: roomsAdmin.php");
}
else{
    echo "Error:".mysqli_error($result);
}
?>