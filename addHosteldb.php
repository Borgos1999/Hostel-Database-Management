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
$sql="INSERT INTO `hostel` (`NO_OF_ROOMS`, `HOSTEL_NAME`, `LOCATION`, `HOSTEL_ID`) VALUES ('$no_of_rooms', '$hostel_name', '$location', '$hostel_id');";
$result=mysqli_query($conn,$sql);
if($result){
header("location: hostelAdmin.php");
}
else if(mysqli_error($conn)=="Duplicate entry '$hostel_id' for key 'PRIMARY'"){
    echo "<script>alert('duplicate entry')</script>";
}
else{
    echo "Error:".mysqli_error($conn);
}
?>