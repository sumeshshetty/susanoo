<?php
session_start();

/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'faculty1';
$con = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

<?php
$facname = $_POST['facname'];
$pswd = $_POST['pswd'];

$checksql = "SELECT * FROM enter WHERE facname= '$facname' AND pswd= '$pswd'";
$tempdata = mysqli_query($con,$checksql);
$result = mysqli_fetch_array($tempdata);

if ($result['facname'] != $facname AND $result['pswd'] != $pswd)
     {
       session_destroy();
       ?>
       <div class="main">
        <div class="login-box"><form class="form-box"><div class="account">Your Name Or Password Is Incorrect!</div><br>
        <a  href="index.php"><button  style="font-size:17" type="button"  > back</button></a>
         <!--<a href="index.php" class="reg">back</a>-->
        <!--<a href="index.php" class="reg">Go Back To Login Page!</a>-->

        <?php
        exit();

        


    }
    else {

header ("Location: homepage.php");


    }
    ?>