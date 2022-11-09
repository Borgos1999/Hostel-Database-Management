<?php
   session_start(); //starts the session
   if($_SESSION['id']){ // checks if the user is logged in  
   }
   else{
      header("location: index.html"); // redirects if user is not logged in
   }
?>
<html>
    <head>
    <link rel="stylesheet" href="iframe.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>   
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
require "connect.php";
$sql="SELECT * FROM visitor";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
echo "<tr>";
   echo "<tD>".$row['STUD_ID']."</td>";
   echo "<td>".$row['VISITOR_NAME']."</tD>";
   echo "<tD>".$row['TIME_IN']."</tD>";
   echo "<tD>".$row['TIME_OUT']."</tD>";
   echo "<tD>".$row['DATE']."</tD>";
?>
<td><button><a href="deletevisitor.php?id=<?php echo $row["STUD_ID"]; ?>&sno=<?php echo $row["S_NO"]; ?>">Delete</a></button></td>
<?php
   echo "</tr>";
}
?>
</table>
</body>
</html>