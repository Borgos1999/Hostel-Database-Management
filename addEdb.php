<?php
session_start(); //starts the session
if($_SESSION['id']){ // checks if the user is logged in  
}
else{
   header("location: index.html"); // redirects if user is not logged in
}
$emp_id=$_POST["emp_id"];
$hostel_id=$_POST["hostel_id"]; 
$salary=$_POST["salary"]; 
$address=$_POST["address"];
$emp_name=$_POST['emp_name'];
$phno=$_POST['phno'];
$emptype=$_POST['emp_type'];
require "connect.php";
$sql="INSERT INTO `hostel_emp` (`EMP_ID`, `EMP_NAME`, `ADDRESS`, `SALARY`, `PH_NO`, `EMP_TYPE`, `HOSTEL_ID`) VALUES ('$emp_id', '$emp_name', '$address', '$salary', '$phno', '$emptype', '$hostel_id')";
$result=mysqli_query($conn,$sql);
if($result){
header("location: employeesAdmin.php");
}
else {
$error=mysqli_error($conn);
    echo "Error:".$error;
}
?>