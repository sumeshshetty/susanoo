<?php

session_start();


$conn = mysqli_connect("localhost", "root", "", "faculty1");

if (!$conn) {
  die("Connection Failed: ".mysqli_connect_error());
}
$id = $_POST['id'];
$facname = $_POST['facname'];
$emailid = $_POST['emailid'];
$pswd = $_POST['pswd'];




$sql = "INSERT INTO enter (id, facname, emailid, pswd) VALUES ('$id','$facname','$emailid', '$pswd')";

$result = mysqli_query($conn, $sql);


?>
       <html>
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
       
    <link rel="stylesheet" type="text/css" href="style1.css">

        </head>

        <body>
<h1><center>FACULTY REGISTRATION</center></h1>
          <div class="main">
  <div class="login-box">
    <div class="info">Successfully Registered!</div>
    <form>
   
      <a href="index.php" class="reg">Go Back To Login Page!</a>
    </form>
  </div>
</div>
        </body>
        </html>
