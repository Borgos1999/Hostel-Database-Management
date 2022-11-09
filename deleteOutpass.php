<?php
require "connect.php";
$id=$_REQUEST['id'];
$sql="DELETE FROM `outpass` WHERE `outpass`.`STUD_ID` = '$id'";
$result=mysqli_query($conn,$sql);
if($result){
    header("location: outpassAdmin.php");
}
else{
    echo "Error".mysqli_error($conn);
}
?>