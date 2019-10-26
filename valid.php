<?php
include('dbconnetion.php');
session_start();
$user=$_POST['user'];
$pass=$_POST['password'];
$q="SELECT * FROM soul WHERE user='$user' && password='$pass'";
$result=mysqli_query($connection,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
   $_SESSION['username']=$user;
    header('location:index1.php');
}
else
{
    header('location:login.php');   
}
?>