<?php
require "connect.php";
$id=$_REQUEST['id'];
$sql="DELETE FROM `hostel` WHERE `hostel`.`HOSTEL_ID` =$id";
$result=mysqli_query($conn,$sql);
if($result){
    header("location: hostelAdmin.php");
}
else{
    echo "Error".mysqli_error();
}
?>