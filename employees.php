<?php
require "connect.php";
$sql="SELECT * FROM `hostel_emp`";
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
<th>EMP_ID</th>
<th>EMP_NAME</th>
<th> ADDRESS</th>
<th>PH_NO</th>
<th>EMP_TYPE</th>
<th>HOSTEL_ID</th>
</tr>
<?php 
while($row = mysqli_fetch_assoc($result)) {
echo"<td>".$row['EMP_ID']."</td>";
echo"<td>".$row['EMP_NAME']."</td>";
echo"<td>".$row['ADDRESS']."</td>";
echo"<td>".$row['PH_NO']."</td>";
echo"<td>".$row['EMP_TYPE']."</td>";
echo"<td>".$row['HOSTEL_ID']."</td>";
echo "</tr>";
}
?>
</table>
</div>
</body>
</html>
