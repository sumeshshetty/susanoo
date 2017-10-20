<?php

session_start();

$date = $_POST['date'];



$conn = mysqli_connect("localhost", "root", "", "faculty1");

if (!$conn) {
  die("Connection Failed: ".mysqli_connect_error());
}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<?php


  

if (empty($_POST['1']))
{
	$_POST['1']=0;
}
if (empty($_POST['2']))
{
	$_POST['2']=0;
}
if (empty($_POST['3']))
{
	$_POST['3']=0;
}
if (empty($_POST['4']))
{
	$_POST['4']=0;
}
if (empty($_POST['5']))
{
	$_POST['5']=0;
}
if (empty($_POST['6']))
{
	$_POST['6']=0;
}
if (empty($_POST['7']))
{
	$_POST['7']=0;
}
if (empty($_POST['8']))
{
	$_POST['8']=0;
}
if (empty($_POST['9']))
{
	$_POST['9']=0;
}
if (empty($_POST['10']))
{
	$_POST['10']=0;
}







$a = $_POST['1'];
$b = $_POST['2'];
$c = $_POST['3'];
$d = $_POST['4'];
$e = $_POST['5'];
$f = $_POST['6'];
$g = $_POST['7'];
$h = $_POST['8'];
$i = $_POST['9'];
$j = $_POST['10'];


$myArray = Array('', $a, $b, $c, $d, $e, $f, $g, $h, $i, $j);

for ($p=0; $p <= 10 ; $p++) {


	$sql = "UPDATE `detailsa` SET `$date`=$myArray[$p] WHERE rollno='$p'";
$result = mysqli_query($conn, $sql);

}

header("Location: attaseen.php");
?>

