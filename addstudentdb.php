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
$sql="INSERT INTO `student` (`STUD_ID`, `STUD_NAME`, `FATHER_NAME`, `ROOM_ID`, `PH_NO`, `DOB`, `FEE_DUE`,`HOSTEL_ID`) VALUES ('$stud_id', '$stud_name', '$father_name', '$room_id', '$phno', '$dob', '$feedue','$hostel_id')";
$result=mysqli_query($conn,$sql);
if($result){
header("location: studentAdmin.php");
}
else{
    echo "Error:".mysqli_error($conn);
}
?>