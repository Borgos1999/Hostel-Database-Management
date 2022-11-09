<?php
require "connect.php";
$sql="SELECT * FROM `USERS`";
$result=mysqli_query($conn,$sql);
$username=$_POST['stud_id'];
$password=$_POST['password'];
$password2=$_POST['password2'];
if($password!=$password2){
    Print '<script>alert("password does not match");</script>'; //Prompts the user
    Print '<script>window.location.assign("signup.php");</script>';
}
else{
while($row=mysqli_fetch_assoc($result)){
    if($row['STUD_ID']==$username){
        Print '<script>alert("User exits already!");</script>'; //Prompts the user
            Print '<script>window.location.assign("login.php");</script>';
    }
}
$sql="INSERT INTO `users` (`STUD_ID`, `PASSWORD`) VALUES ('$username', '$password')";
$result=mysqli_query($conn,$sql);
if($result){
    Print '<script>alert("Succesfully signed up");</script>';
    Print '<script>window.location.assign("login.php");</script>'; 
}
else{
Print '<script>alert("Kindly contact admin.Your data not uploaded yet!");</script>';
Print '<script>window.location.assign("home.php");</script>'; 
}
}
?>