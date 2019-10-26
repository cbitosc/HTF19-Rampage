<?php
include("dbcon3.php");
session_start();
$re=$_SESSION['username'];
$arr=array_keys($_POST);
print_r($_POST);
$rk=$arr[0];
$q="INSERT INTO hel(username,hosid) VALUES ('$re','$rk') ";
$res=mysqli_query($connection,$q);
echo mysqli_error($connection);
 header('Refresh:0; url="kalinga.php"');
echo '<script language="javascript">';
echo 'alert("emergency in the location kadiri")';
echo '</script>';

?>