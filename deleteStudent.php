<?php
require "connect.php";
$id=$_REQUEST['id'];
$sql="DELETE FROM `student` WHERE `student`.`STUD_ID` = '$id'";
$result=mysqli_query($conn,$sql);
if($result){
    header("location: studentAdmin.php");
}
else{
    echo "Error".mysqli_error($conn);
}
?>