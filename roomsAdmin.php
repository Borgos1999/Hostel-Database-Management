<?php
require "connect.php";
$sql="SELECT * FROM `room`";
$result=mysqli_query($conn,$sql);
?>
 <?php
   session_start(); //starts the session
   if($_SESSION['id']){ // checks if the user is logged in  
   }
   else{
      header("location: index.html"); // redirects if user is not logged in
   }
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="iframe.css">
</head>
<body>
<button> <a href="addroom.php">Add new Rooms</a></button>
<table>
<tr>
<th>ROOM_ID</th>
<th>HOSTEL_ID</th>
<th>CAPACITY</th>
<th>FURNITURE_COUNT</th>
</tr>
<?php 
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
echo"<td>".$row['ROOM_ID']."</td>";
echo"<td>".$row['HOSTEL_ID']."</td>";
echo"<td>".$row['CAPACITY']."</td>";
echo"<td>".$row['FURNITURE_COUNT']."</td>";
echo "<td ><button><a href='editrooms.php?id=".$row['ROOM_ID']."&hid=".$row['HOSTEL_ID']."'>Edit</a></button>
<button><a href='deleteroom.php?id=".$row['ROOM_ID']."&hid=".$row['HOSTEL_ID']."'>Delete</a></button></td>";
echo "</tr>";
}
}
else{
    echo "NO DATA FOUNT";
}
mysqli_close($conn);
if(!$conn){
    echo "hello ";
}
?>
</table>
</body>
</html>
