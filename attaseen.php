<?php

session_start();


/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'faculty1';
$conn = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

?>


<!DOCTYPE html>
<html>
<head>


<style type="text/css">
th{
	font-size: 11px;
    padding: 12px;
}
td {

    padding: 12px;
}
</style>
</head>
<body>
<?php


     

$sql = "SELECT * FROM detailsa";

$myData = mysqli_query($conn,$sql);

echo "<center><table border=3>
<tr>
<th>Roll No</th>
<th>Student Name</th>
<th>2017-10-1</th>
<th>2017-10-2</th>
<th>2017-10-3</th>
<th>2017-10-4</th>
<th>2017-10-5</th>
<th>2017-10-6</th>
<th>2017-10-7</th>
<th>2017-10-8</th>
<th>2017-10-9</th>
<th>2017-10-10</th>
<th>2017-10-11</th>
<th>2017-10-12</th>
<th>2017-10-13</th>
<th>2017-10-14</th>
<th>2017-10-15</th>

</tr>";


while($record = mysqli_fetch_array($myData)) {

	echo "<tr>";

	echo "<td>" . $record['rollno'] . "</td>";

echo "<td>" . $record['name'] . "</td>";

if($record['2017-10-01']=="0") {echo "<td>A</td>"; }
else {echo "<td>P</td>";}

if($record['2017-10-02']=="0") {echo "<td>A</td>"; }
else {echo "<td>P</td>";}

if($record['2017-10-03']=="0") {echo "<td>A</td>"; }
else {echo "<td>P</td>";}

if($record['2017-10-04']=="0") {echo "<td>A</td>"; }
else {echo "<td>P</td>";}

if($record['2017-10-05']=="0") {echo "<td>A</td>"; }
else {echo "<td>P</td>";}

if($record['2017-10-06']=="0") {echo "<td>A</td>"; }
else {echo "<td>P</td>";}

if($record['2017-10-07']=="0") {echo "<td>A</td>"; }
else {echo "<td>P</td>";}

if($record['2017-10-08']=="0") {echo "<td>A</td>"; }
else {echo "<td>P</td>";}

if($record['2017-10-09']=="0") {echo "<td>A</td>"; }
else {echo "<td>P</td>";}

if($record['2017-10-10']=="0") {echo "<td>A</td>"; }
else {echo "<td>P</td>";}

if($record['2017-10-11']=="0") {echo "<td>A</td>"; }
else {echo "<td>P</td>";}

if($record['2017-10-12']=="0") {echo "<td>A</td>"; }
else {echo "<td>P</td>";}

if($record['2017-10-13']=="0") {echo "<td>A</td>"; }
else {echo "<td>P</td>";}

if($record['2017-10-14']=="0") {echo "<td>A</td>"; }
else {echo "<td>P</td>";}

if($record['2017-10-15']=="0") {echo "<td>A</td>"; }
else {echo "<td>P</td>";}



    echo "</tr>";


}

echo "</table></center>";
?>
