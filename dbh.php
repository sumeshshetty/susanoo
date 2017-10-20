<?php

$con = mysql_connect("localhost", "root", "");
mysql_select_db("student",$con);
if (!$con) {
    die("Connection Failed: ".mysql_error());
}
