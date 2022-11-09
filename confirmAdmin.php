<?php
require "connect.php";
$sql="SELECT * FROM `admin`";
$result=mysqli_query($conn,$sql);
$username=$_POST['stud_id'];
$password=$_POST['password'];
$password2=$_POST['password2'];
if($password!=$password2){
    Print '<script>alert("password does not match");</script>'; //Prompts the user
    Print '<script>window.location.assign("addAdmin.php");</script>';
}
else{
while($row=mysqli_fetch_assoc($result)){
    if($row['id']==$username){
        Print '<script>alert("User exits already!");</script>'; //Prompts the user
            Print '<script>window.location.assign("addAdmin.php");</script>';
    }
}
$sql="INSERT INTO `admin` (`id`, `password`) VALUES ('$username', '$password')";
$result=mysqli_query($conn,$sql);
if($result){
    Print '<script>alert("Succesfully added up");</script>';
    Print '<script>window.location.assign("addAdmin.php");</script>'; 
}
else{
Print '<script>alert("Sorry we got a problem.Try again later!");</script>';
Print '<script>window.location.assign("home.php");</script>'; 
}
}
?>