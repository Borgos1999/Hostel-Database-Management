<?php
   session_start(); //starts the session
   if($_SESSION['id']){ // checks if the user is logged in  
   }
   else{
      header("location: index.html"); // redirects if user is not logged in
   }
   require "connect.php";
   $sql="SELECT * FROM `STUDENT`";
   $result=mysqli_query($conn,$sql);
   ?>
   <html>
    <head>
    <link rel="stylesheet" href="iframe.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
   <body>
   <h2>Student Information</h2>
   <button><a href="addstudent.php">Add new Student</a></button>
   <table>
   <tr>
   <th>STUD_ID</th>
   <th>STUDENT NAME</th>
   <th>DOB</th>
   <th>FATHER NAME</th>
   <th>ROOM_ID</th>
   <th>HOSTEL_ID</th>
   <th>PH_NO</th>
   <th>FEE DUE</th>
   </tr>
<tr>
<?php
while ($row=mysqli_fetch_assoc($result)){
   echo "<tD>".$row['STUD_ID']."</td>";
   echo "<td>".$row['STUD_NAME']."</tD>";
   echo "<tD>".$row['DOB']."</tD>";
   echo "<tD>".$row['FATHER_NAME']."</tD>";
   echo "<tD>".$row['ROOM_ID']."</tD>";
   echo "<tD>".$row['HOSTEL_ID']."</tD>";
   echo "<tD>".$row['PH_NO']."</tD>";
   echo "<tD>".$row['FEE_DUE']."</tD>";
   ?>
<td ><button><a href="editstudent.php?id=<?php echo $row["STUD_ID"]; ?>">Edit</a></button>
<button><a href="deleteStudent.php?id=<?php echo $row["STUD_ID"]; ?>">Delete</a></button></td>
<?php
   echo "</tr>";
}
?>
</table>