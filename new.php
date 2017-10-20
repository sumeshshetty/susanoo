<?php

session_start();

$cgvr = $_POST[$row['m_cgvr']];
$os = $_POST['m _os'];
$ost = $_POST['m_ost'];
//$sname = $_POST['sname'];



$conn = mysqli_connect("localhost", "root", "", "faculty1");

if (!$conn) {
  die("Connection Failed: ".mysqli_connect_error());
}
$total=$cgvr+$os+$ost;
echo $total;
?>
