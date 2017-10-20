<?php

$con = mysql_connect("localhost", "root", "");
mysql_select_db("faculty1",$con);
if (!$con) {
    die("Connection Failed: ".mysql_error());
}
?>