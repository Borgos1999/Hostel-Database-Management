<?php
require ('connect.php');
$id=$_REQUEST['id'];
echo "$id";
$query = "DELETE FROM `hostel_emp` WHERE `hostel_emp`.`EMP_ID`='$id'"; 
$result = mysqli_query($conn,$query);
if($result){
header("Location: employeesAdmin.php");
} 
else{
    echo "error is ".mysqli_error($conn);
}
?>