<?php
require "connect.php";
$sql="SELECT * FROM `room`";
$result=mysqli_query($conn,$sql);
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="iframe.css">
</head>
<body>
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
