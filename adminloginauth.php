<?php
session_start();
require "connect.php";
$sql="SELECT * FROM `admin`";
$result=mysqli_query($conn,$sql);
$username=$_POST['id'];
$password=$_POST['password'];
while($row=mysqli_fetch_assoc($result)){
    if($row['id']==$username){
        if($row['password']==$password){
         $_SESSION['id']=$username;
        Print '<script>alert("Logged in !");</script>'; //Prompts the user
            Print '<script>window.location.assign("admin.php");</script>';
        }
        else{
			Print '<script>alert("Incorrect Password!");</script>'; //Prompts the user
			Print '<script>window.location.assign("adminlogin.php");</script>'; // redirects to login.php
        
        }
    }
}
		Print '<script>alert("Username not valid ! ");</script>'; //Prompts the user
		Print '<script>window.location.assign("adminlogin.php");</script>'; // redirects to login.php

?>