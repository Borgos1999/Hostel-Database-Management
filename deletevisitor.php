<?php
require "connect.php";
$id=$_REQUEST['id'];
$sno=$_REQUEST['sno'];
$sql="DELETE FROM `visitor` WHERE `visitor`.`S_NO` = $sno AND `visitor`.`STUD_ID` = '$id'";
$result=mysqli_query($conn,$sql);
if($result){
    header("location: visitorsAdmin.php");
}
else{
    echo "Error".mysqli_error($conn);
}
?>