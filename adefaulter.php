<!DOCTYPE html>
<html>
<?php

session_start();


/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'faculty1';
$con= new mysqli($host,$user,$pass,$db) or die($mysqli->error);

?>

<!DOCTYPE html>
<html>
<head>


<style type="text/css">
th, td {
    padding: 12px;
}
</style>
</head>
<body>
<?php


     

$sql = "SELECT * FROM detailsa";

$myData = mysqli_query($con,$sql);

echo "<center><table border=3>
<tr>
<th>Roll No</th>
<th>Student Name</th>
<th>Days Absent</th>
<th>Days Present</th>
<th>Defaulter</th>

</tr>";

while($record = mysqli_fetch_array($myData)) {

	echo "<tr>";

	echo "<td>" . $record['rollno'] . "</td>";

echo "<td>" . $record['name'] . "</td>";
$count=0;
$counter=15;


if($record['2017-10-01']=="0") {$count++; $counter--;}

if($record['2017-10-02']=="0") {$count++; $counter--;}
if($record['2017-10-03']=="0") {$count++; $counter--;}
if($record['2017-10-04']=="0") {$count++; $counter--;}
if($record['2017-10-05']=="0") {$count++; $counter--;}
if($record['2017-10-06']=="0") {$count++; $counter--;}
if($record['2017-10-07']=="0") {$count++; $counter--;}
if($record['2017-10-08']=="0") {$count++; $counter--;}
if($record['2017-10-09']=="0") {$count++; $counter--;}
if($record['2017-10-10']=="0") {$count++; $counter--;}
if($record['2017-10-11']=="0") {$count++; $counter--;}
if($record['2017-10-12']=="0") {$count++; $counter--;}
if($record['2017-10-13']=="0") {$count++; $counter--;}
if($record['2017-10-14']=="0") {$count++; $counter--;}
if($record['2017-10-15']=="0") {$count++; $counter--;}


	echo "<td>".$count."</td>";
echo "<td>".$counter."</td>";

     extract($record);  
    $n = array($myData);
    foreach($n as $i)
    {
    	$sql="UPDATE `graph` SET `la` = '$counter' WHERE `name` = '$name'";
    	  $result=mysqli_query($con,$sql);
    }
if($counter <=4)
{
	echo "<td>YES</td>";
}
else
{
    echo "<td>No</td>";
}


    echo "</tr>";


}


echo "</table></center>";
?>
<body>
<a href="graph.php"><button>display graph</button></a>
</body>
</html>