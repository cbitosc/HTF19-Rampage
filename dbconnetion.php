<?php
    $server="localhost";
    $username="root";
    $password="";
    $database="reg2";
try{
$connection=mysqli_connect($server,$username,$password,$database);
if($connection)
{
    echo "connection okay";
}
}
catch(exception $errormsg)
    {
        echo $errormsg->getMessage();
    }

?>

