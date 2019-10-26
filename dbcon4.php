<?php
    $server="localhost";
    $username="root";
    $password="";
    $database="red";
try{
$connection1=mysqli_connect($server,$username,$password,$database);
if($connection1)
{
  
}
}
catch(exception $errormsg)
    {
        echo $errormsg->getMessage();
    }

?>

