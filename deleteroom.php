<?php

   session_start(); //starts the session
   if($_SESSION['id']){ // checks if the user is logged in  
   }
   else{
      header("location: index.html"); // redirects if user is not logged in
   }
   ?>
<?php
require "connect.php";
$id=$_REQUEST['id'];
echo "$id";
$HOSTEL_ID=$_REQUEST['hid'];
echo "$id";
echo "$HOSTEL_ID";
$query = "DELETE FROM `room` WHERE `room`.`ROOM_ID` = $id AND `room`.`HOSTEL_ID`=$HOSTEL_ID"; 
$result = mysqli_query($conn,$query);
if($result){
    
header("Location: roomsAdmin.php");
} 
else{
    echo "error is ".mysqli_error($conn);
}
?>