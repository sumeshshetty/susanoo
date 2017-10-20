<!DOCTYPE html>
<html>
<?php

session_start();

$sname = $_POST['sname'];



$conn = mysqli_connect("localhost", "root", "", "faculty1");

if (!$conn) {
  die("Connection Failed: ".mysqli_connect_error());
}

?>

<head>
<style type="text/css">
	table{
		cen
	}
</style>
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.12.0/semantic.min.css" />
</head>
<body>
		<?php

            $result=  mysqli_query($conn, "select * from detailsa where name ='$sname'");

?>

<div class="ui button aligned center teal" id="create_pdf"> 
                           Create PDF
              </div>
              <form name="form1" class="ui form">
            <div>
           <h3 align="center">student marksheet</h3>
            
         <table id="countit" border="1" align="center">
         <tr>
           
                    <th> Name</th>
                    <th>ROLLNO</th>
                        <th>cgvr marks</th>
                            <th>os marks</th>
                                <th>ost marks</th>
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
                <td class="count-me"><?php echo $row['m_cgvr']; ?></td>
                <td class="count-me"><?php echo $row['m _os']; ?></td>
                <td class="count-me"><?php echo $row['m_ost'] ; ?></td>
               <script>
               //var sum=document.getElementById('td1');
               </script>

               <!-- <td><?php echo $row['DOB'] ;?></td>
                <td><?php echo $row['PhoneNumber'] ;?></td>
                <td><?php echo $row['Address'] ;?></td>-->
            </tr>
           
            <tr>
            <td></td>
            </tr>
        <?php
             }
             ?>
             <TD width="135">Grade:</TD><TD colspan="4"><FONT face="arial" id="demograde"></FONT></TD>
             <tr rowspan ="2">
           
             </tr>
             </table>
             
            </div>
                    <script language="javascript" type="text/javascript">
            var tds = document.getElementById('countit').getElementsByTagName('td');
            var sum = 0;
            for(var i = 0; i < tds.length; i ++) {
                if(tds[i].className == 'count-me') {
                    sum += isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
                    avg=sum/3;
                }
            }
            document.getElementById('countit').innerHTML += '<tr><td>total marks  </td><td colspan="4">'+sum+'</td></tr>';
            document.getElementById('countit').innerHTML += '<tr><td>percentage  </td><td colspan="4">'+avg +'</td></tr>';
            switch(true)
{
case(avg>=80):
document.getElementById("demograde").innerHTML="A1";
break;
case(avg>=70):
document.getElementById("demograde").innerHTML="A";
break;
case(avg>=60):
document.getElementById("demograde").innerHTML="B";
break;
case(avg>=50):
document.getElementById("demograde").innerHTML="C";
break;
case(avg>=40):
document.getElementById("demograde").innerHTML="D";
break;
case(avg<40):
document.getElementById("demograde").innerHTML="Fail";
break;
}

        </script>
		<table id="countit" border="1" align="center">
		<tr>
		</tr>
		<td colspan ="2">_____________________</td>
		<td colspan ="2">_____________________</td>
		<tr rowspan ="2">
		<td colspan ="2">parents signature</td>
		
		
		<td colspan ="2">teachers signature</td>
		</tr>
		</table>
		</form>
		<script src="./lib/jquery.min.js">
    </script>
    <script type="text/javascript" src="./lib/jspdf.min.js">
    </script>
    <script type="text/javascript" src="./lib/html2canvas.min.js">
    </script>

    <script type="text/javascript" src="app.js">
    </script>
</body>
</html>