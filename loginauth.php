<?php
session_start();
require "connect.php";
$sql="SELECT * FROM `USERS`";
$result=mysqli_query($conn,$sql);
$username=$_POST['stud_id'];
$password=$_POST['password'];
while($row=mysqli_fetch_assoc($result)){
    if($row['STUD_ID']==$username){
        if($row['PASSWORD']==$password){
         $_SESSION['user']=$username;
        Print '<script>alert("Logged in !");</script>'; //Prompts the user
            Print '<script>window.location.assign("home.php");</script>';
        }
        else{
			Print '<script>alert("Incorrect Password!");</script>'; //Prompts the user
			Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
        
        }
    }
}
		Print '<script>alert("Username not valid ! ");</script>'; //Prompts the user
		Print '<script>window.location.assign("signup.php");</script>'; // redirects to login.php

?>