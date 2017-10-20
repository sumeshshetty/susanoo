<?php

session_start();


/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'faculty1';
$con = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

?>


<html>
<head>
<style type="text/css">
div {
	float:left;
	

} 
th, td {
    padding: 12px;
}
</style>

</head>
	<body>
	<div>
	
	<?php

	$checksql = "SELECT * FROM detailsa";
$tempdata = mysqli_query($con,$checksql);
$result = mysqli_fetch_array($tempdata);

	$sql = "SELECT * FROM detailsa ";

$myData = mysqli_query($con,$sql);

echo "<center><table border=1><cellpadding=10>
<tr>
<th>Roll No</th>
<th>Student Name</th>";

while($record = mysqli_fetch_array($myData)) {
echo "<tr>";
echo "<td>" . $record['rollno'] . "</td>";

echo "<td>" . $record['name'] . "</td>";



echo "</tr>";



}

		
echo "</table>";


?>
</div>
<div>
<form action="attaupdate.php" method="post">
<table border="1">
		
			<tr>
				<th>Date:-<input type="text" name="date"></th>
			
			</tr>
				<tr><th><input type="checkbox" name="1" value="1"></th></tr>
				<tr><th><input type="checkbox" name="2" value="1"></th></tr>
				<tr><th><input type="checkbox" name="3" value="1"></th></tr>
				<tr><th><input type="checkbox" name="4" value="1"></th></tr>
				<tr><th><input type="checkbox" name="5" value="1"></th></tr>
				<tr><th><input type="checkbox" name="6" value="1"></th></tr>
				<tr><th><input type="checkbox" name="7" value="1"></th></tr>
				<tr><th><input type="checkbox" name="8" value="1"></th></tr>
				<tr><th><input type="checkbox" name="9" value="1"></th></tr>
				<tr><th><input type="checkbox" name="10" value="1"></th></tr>
				
		
				

			</table><br><input type="submit" name="submit" value="UPDATE">
			    <a href="attaseen.php" class="reg">Display Attendence Sheet</a>
			</form>
			

			</div>
	</body>

</head>
</html>