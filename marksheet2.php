

<html>
    <head>
        <meta charset="UTF-8">
        <title>LoginDB</title>
    </head>
    <body>

        
        <?php




/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'faculty1';
$con = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

            $result=  mysqli_query($con, "select * from detailsa");

       ?>
        <div>
            <td>student marks</td>
         <table border="1">
         <tr>
           
                    <th> Name</th>
                    <th>ROLLNO</th>
                    <!--  <th>Password</th>
                    <th>Gender</th>
                    <th>D.O.B.</th>
                    <th>Phone Number</th>
                    <th>Address</th>-->

            </tr>

        <?php

             while($row=  mysqli_fetch_array($result))

             {
                 ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
               <td><?php echo $row['rollno']; ?></td>
                 <!--<td><?php echo $row['Username']; ?></td>
                <td><?php echo $row['Password'] ;?></td>
                <td><?php echo $row['Gender'] ;?></td>
                <td><?php echo $row['DOB'] ;?></td>
                <td><?php echo $row['PhoneNumber'] ;?></td>
                <td><?php echo $row['Address'] ;?></td>-->
            </tr>
        <?php
             }
             ?>
             </table>
            </div>
    </body>
</html>

