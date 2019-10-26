<?php
    $server="localhost";
    $username="root";
    $password="";
    $database="ora";
try{
$connection=mysqli_connect($server,$username,$password,$database);
if($connection)
{
  
}
}
catch(exception $errormsg)
    {
        echo $errormsg->getMessage();
    }

?>

