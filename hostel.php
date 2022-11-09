<?php
require "connect.php";
$sql="SELECT * FROM `hostel`";
$result=mysqli_query($conn,$sql);
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="iframe.css">
</head>
<body>
    <div class="iframe">
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
echo "</tr>";
}
?>
</table>
</div>
</body>
</html>
