<table border="1">
    <tr>
        <th>name</th>
    </tr>

<?php
include('dbcon3.php');
$ro=$_POST['username'];
if($ro)
{
$po="SELECT * FROM hel where username='$ro'";
$re=mysqli_query($connection,$po);
$num=mysqli_num_rows($result);

while($rows=mysqli_fetch_array($re)){
    echo "<tr>";
    echo "<td>";
    echo $rows['username'];
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
