<?php
require "connect.php";
$sql="SELECT * FROM `hostel_emp`";
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
    <button ><a href="addE.php">Add new Employee</a></button>
<table>
<tr>
<th>EMP_ID</th>
<th>EMP_NAME</th>
<th> ADDRESS</th>
<th>PH_NO</th>
<th>SALARY</th>
<th>EMP_TYPE</th>
<th>HOSTEL_ID</th>
</tr>
<?php 
while($row = mysqli_fetch_assoc($result)) {
echo"<td>".$row['EMP_ID']."</td>";
echo"<td>".$row['EMP_NAME']."</td>";
echo"<td>".$row['ADDRESS']."</td>";
echo"<td>".$row['PH_NO']."</td>";
echo"<td>".$row['SALARY']."</td>";
echo"<td>".$row['EMP_TYPE']."</td>";
echo"<td>".$row['HOSTEL_ID']."</td>";
echo "<td ><button><a href='editE.php?id=".$row['EMP_ID']."&hid=".$row['HOSTEL_ID']."'>Edit</a></button>
<button><a href='deleteE.php?id=".$row['EMP_ID']."'>Delete</a></button></td>";
echo "</tr>";
}
?>
</table>
</div>
</body>
</html>
