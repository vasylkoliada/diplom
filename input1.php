<?php 
//error_reporting(E_ALL & ~ E_NOTICE);
include 'connecting.php';
session_start();

$name = $_POST['name'];
$surname = $_POST['surname'];
$location = $_POST['location'];
$coment = $_POST['comment'];



//$result = mysqli_query($db,"DELETE FROM two.ta Where id  BETWEEN 9 and 18");
/*$result = mysqli_query($db,"INSERT INTO ta (name, surname, location, coment) VALUES ('$name', '$surname',
																			 '$location' , '$coment')");
$picture = $_POST['picture'];
$rr = mysqli_query($db,"INSERT INTO pic (picture) VALUES ('$picture')");
if($rr == 'true') 
{echo "Win1";}
else{echo "No1";}
if($result == 'true') 
{echo "Win";}
else{echo "No";}*/

/*
$res = mysqli_query($db,"SELECT * FROM ta");
if($res)
{
    $rows = mysqli_num_rows($res); // количество полученных строк
     
    echo "<table><tr><th>Id</th><th>name</th><th>surname</th><th>location</th><th>comment</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($res);
        echo "<tr>";
            for ($j = 0 ; $j < 5 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
        mysqli_free_result($res);
}*/
 
 $res = mysqli_query($db,"SELECT * FROM pic");
if($res)
{
    $rows = mysqli_num_rows($res); // количество полученных строк
     
    echo "<table><tr><th>Id</th><th>name</th></tr>";
    for ($i = 1 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($res);
        echo "<tr>";
            for ($j = 1 ; $j < 2 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
        mysqli_free_result($res);
}
mysqli_close($db);
?>