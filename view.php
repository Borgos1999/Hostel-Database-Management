<html>
    <head>
    <link rel="stylesheet" href="iframe.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
   <?php
   require "connect.php";
   session_start(); //starts the session
   if($_SESSION['user']){ // checks if the user is logged in  
   }
   else{
      header("location: index.html"); // redirects if user is not logged in
   }
   $user = $_SESSION['user']; //assigns user value
   $sql="SELECT * FROM STUDENT WHERE stud_id='$user'";
   $result=mysqli_query($conn,$sql);
   $row=mysqli_fetch_assoc($result);
   ?>
   <body>
   <h2 class="h">Student Information</h2>
   <table>
   <tr>
   <th>STUD_ID</th>
   <th>STUDENT NAME</th>
   <th>FATHER NAME</th>
   <th>ROOM_ID</th>
   <th>PH_NO</th>
   <th>FEE DUE</th>
   </tr>
<tr>
<?php
   echo "<tD>".$row['STUD_ID']."</td>";
   echo "<td>".$row['STUD_NAME']."</tD>";
   echo "<tD>".$row['FATHER_NAME']."</tD>";
   echo "<tD>".$row['ROOM_ID']."</tD>";
   echo "<tD>".$row['PH_NO']."</tD>";
   echo "<tD>".$row['FEE_DUE']."</tD>";

?>
</tr>
</table>
<h2>Visitors</h2>
   <table>
   <tr>
   <th>STUD_ID</th>
   <th>Visitor Name</th>
   <th>Time in</th>
   <th>Time out</th>
   <th>Date</th>
   </tr>

<?php
$sql="SELECT * FROM visitor WHERE stud_id='$user'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
echo "<tr>";
   echo "<tD>".$row['STUD_ID']."</td>";
   echo "<td>".$row['VISITOR_NAME']."</tD>";
   echo "<tD>".$row['TIME_IN']."</tD>";
   echo "<tD>".$row['TIME_OUT']."</tD>";
   echo "<tD>".$row['DATE']."</tD>";
   echo "</tr>";
}
?>

</table>
<h2>Outpass</h2>
   <table>
   <tr>
   <th>STUD_ID</th>
   <th>time in</th>
   <th>Time out</th>
   <th>Days on leave</th>
   <th>Date</th>
   </tr>

<?php
$sql="SELECT * FROM outpass WHERE stud_id='$user'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
echo "<tr>";
   echo "<tD>".$row['STUD_ID']."</td>";
   echo "<tD>".$row['TIME_IN']."</tD>";
   echo "<tD>".$row['TIME_OUT']."</tD>";
   echo "<td>".$row['DAYS_ON_LEAVE']."</tD>";
   echo "<tD>".$row['DATE']."</tD>";
   echo "</tr>";
}
?>

</table>
  
   </body>
   </html>