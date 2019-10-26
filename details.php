<table border="1">
    <tr>
        <th>name</th>
        <th>location</th>
        <th>exact address</th>
        <th>phoneno</th>
        <th>click here to send message</th>
    </tr>

<?php
include('db2con.php');
$ro=$_POST['pq'];
if($ro)
{
$po="SELECT * FROM tab1 where location='$ro'";
$re=mysqli_query($connection,$po);

while($rows=mysqli_fetch_array($re)){
    $a=$rows['id'];
    echo "<tr>";
    echo "<td>";
    echo $rows['name'];
    echo "</td>";
    echo "<td>";
    echo $rows['location'];
    echo "</td>";
    echo "<td>";
    echo $rows['exact address'];
    echo "</td>";
     echo "<td>";
    echo $rows['phone number'];
    echo "</td>";
     echo "<td>";
    echo "
    <form action='questions.php' method='POST'>
    <input type='submit' name='$a' value='submit'>
    </form>";
    echo "</td>";
    echo "<br/>";
    
}
}
else
{
    echo"not possible";
}
?>
</table>

