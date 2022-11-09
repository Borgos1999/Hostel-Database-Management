<?php
require "connect.php";
$sql="SELECT * FROM `hostel`";
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
    <div class="iframe">
       <button ><a href="addhostel.php">Add new Hostel</a></button>
<table>
<tr>
<th>NO_OF_ROOMS</th>
<th>HOSTEL_NAME</th>
<th>LOCATION</th>
<th>HOSTEL_ID</th>
</tr>
<?php 
while($row = mysqli_fetch_assoc($result)) {
echo"<td>".$row['NO_OF_ROOMS']."</td>";
echo"<td>".$row['HOSTEL_NAME']."</td>";
echo"<td>".$row['LOCATION']."</td>";
echo"<td>".$row['HOSTEL_ID']."</td>";
?>
<td ><button><a href="edithostel.php?id=<?php echo $row["HOSTEL_ID"]; ?>">Edit</a></button>
<button><a href="deletehostel.php?id=<?php echo $row["HOSTEL_ID"]; ?>">Delete</a></button></td>
<?php
echo "</tr>";
}
?>
</table>
</div>
</body>
</html>
