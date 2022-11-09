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
$sql="UPDATE `hostel_emp` SET `EMP_ID` = '$emp_id', `EMP_NAME` = '$emp_name', `ADDRESS` = '$address', `SALARY` = '$salary', `PH_NO` = '$phno', `EMP_TYPE` = '$emptype', `HOSTEL_ID` = '$hostel_id' WHERE `hostel_emp`.`EMP_ID` = $emp_id";
$result=mysqli_query($conn,$sql);
if($result){
header("location: employeesAdmin.php");
}
else if(mysqli_error($conn)=="Cannot add or update a child row: a foreign key constraint fails (`hostel`.`hostel_emp`, CONSTRAINT `hostel_emp_ibfk_1` FOREIGN KEY (`HOSTEL_ID`) REFERENCES `hostel` (`HOSTEL_ID`) ON DELETE SET NULL ON UPDATE CASCADE)")
{
    echo "<script>alert('Hostel id does not exits')</script>";
}
else if(mysqli_error($conn)=="Duplicate entry '$emp_id' for key 'PRIMARY'"){
    echo "<script>alert('Employee id exist already!')";
}
else{
    echo "Error:".mysqli_error($conn);
}
?>