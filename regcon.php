<?php
include('dbconnetion.php');
header('location:login.php');
session_start();
$user=$_POST['user'];
$pass=$_POST['password'];
$pho=$_POST['phoneno'];
$q="SELECT * FROM soul WHERE user='$user' && password='$pass'";
$result=mysqli_query($connection,$q);
$num=mysqli_num_rows($result);
if($num>=1)
{
    echo"we are very sorry we already have this details registered";
}
else
{
    $qr="INSERT INTO soul(user,password,phoneno) VALUES ('$user','$pass','$pho')";
    mysqli_query($connection,$qr);
}
?>