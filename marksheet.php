<!DOCTYPE html>
<HTML>
<HEAD>


   
     
<style>



 body 
 {
  background-color:   rgb(255,0,255);
  text-align: center;
 border-radius: 20px;
 border-style: double;
 border-color: yellow;
 position: absolute;
 /*width:50%;*/
 height: 805px;
 top: 15px;
 left: 45px;
right: 45px;
 padding: 30px 30px 50px 30px;
 
}


#tbl,#tbl2
{
border-collapse:collapse;
font-size:18;
font-family:Century Gothic;
}


.demo
{
position:absolute;
left:35px;
top:380px;
font-size:17;
font-family:Arial;
font-weight:bold;
margin-top:35px;
border-collapse:collapse;
}


#demoname
{
font-size:15px
}


.btn
{
position:left;
top:355px;
left:720px;
}


.color
{
  background-color:#ffb6c1;
     text-align: center;
}
tr
{
  background-color:#cc7722;
}


</style>

<SCRIPT>
function myFun()
{
var a=document.form1.txtname.value;
document.getElementById("demoname").innerHTML=a;
var b=document.form1.txtfname.value;
document.getElementById("demofname").innerHTML=b;
var c=document.form1.txtins.value;
document.getElementById("demoins").innerHTML=c;
var d=document.form1.txtbatch.value;
document.getElementById("demobatch").innerHTML=d;
var e=document.form1.txtoffice.value;
document.getElementById("demooffice").innerHTML=e;
var f=document.form1.txtweb.value;
document.getElementById("demoweb").innerHTML=f;
var g=document.form1.txtit.value;
document.getElementById("demoit").innerHTML=g;
var h=document.form1.txtc.value;
document.getElementById("democ").innerHTML=h;
var txt1=eval(parseFloat(document.form1.txtoffice.value)+parseFloat(document.form1.txtweb.value)
+parseFloat(document.form1.txtit.value)+parseFloat(document.form1.txtc.value));
document.getElementById("demototal").innerHTML=txt1;
var txt2=eval(parseFloat(txt1*100)/400);
document.getElementById("demoper").innerHTML=txt2.toFixed(2)+"%";

switch(true)
{
case(txt2>=80):
document.getElementById("demograde").innerHTML="A1";
break;
case(txt2>=70):
document.getElementById("demograde").innerHTML="A";
break;
case(txt2>=60):
document.getElementById("demograde").innerHTML="B";
break;
case(txt2>=50):
document.getElementById("demograde").innerHTML="C";
break;
case(txt2>=40):
document.getElementById("demograde").innerHTML="D";
break;
case(txt2<40):
document.getElementById("demograde").innerHTML="Fail";
break;
}

}
</SCRIPT>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <title>mark_sheet
    </title>
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.12.0/semantic.min.css" />
</HEAD>

<BODY background="screen311.jpg">

              
<DIV class="color">
<H1 align="center"style="font-family:cambria;font-size:40";><U>PILLAI COLLEGE OF ENGGINERRING</H1>

              



<div class="ui button aligned center teal" id="create_pdf"> 
                           Create PDF
              </div>
              <form name="form1" class="ui form">

<FIELDSET>

<LEGEND> STUDENT MARKSHEET</LEGEND>
<TABLE align="center" id="tbl">

</TR>
<TD width="100">Name:</TD> <TD><INPUT type="text" name="txtname"/></TD>
<TD> &nbsp; &nbsp;Family name:</TD><TD> <INPUT type="text" name="txtfname"/></TD>
</TR>

<TR>
<TD width="140" > Institute Name:</TD><TD> <INPUT type="text" name="txtins"/></TD>
<TD style="text-indent:16px">Branch:</TD><TD> <INPUT type="text" name="txtbatch"/></TD>
</TR>
</TABLE>
</FIELDSET>
</BR>


<FIELDSET>
<LEGEND> SEMESTER MARKS </LEGEND>
<TABLE id="tbl2">
<TR>
<TD> SEMESTER 1:</TD><TD> <INPUT type="text" name="txtoffice" maxlength="2" size="5"/> Out of 100 </TD>

</TR>
<TR>
<TD> SEMESTER 2:</TD><TD>  <INPUT type="text" name="txtweb" maxlength="2" size="10"/> Out of 100</TD>
</TR>
<TR>
<TD> SEMESTER 3:</TD><TD> <INPUT type="text" name="txtit" maxlength="2" size="10"/> Out of 100</TD>
</TR>
<TR>
<TD> SEMESTER 4:</TD><TD> <INPUT type="text" name="txtc" maxlength="2" size="10" /> Out of 100</TD>
</TR>
<!--<TR>
<TD>&nbsp;</TD>
</TR>-->
</TABLE>
</FIELDSET>

<DIV class="btn">
<button style="font-size:17" type="button" onclick='myFun()'>Submit</button>
<button style="font-size:17" type="Reset">Reset</button>
</DIV>

 
<DIV class="content">
  <TABLE border="1">
<TR>
<TH colspan="8" width="240"> Student Information </TH>
</TR>
<TR>
<TD width="135">Name:</TD><TD><FONT face="arial" id="demoname"></FONT></TD>
</TR>
<TR>
<TD width="135">Family Name:</TD><TD><FONT face="arial" id="demofname"></FONT></TD>
</TR>
<TR>
<TD width="135">Institute Name:</TD><TD><FONT face="arial" id="demoins"></FONT></TD>
</TR>
<TD width="135">Branch:</TD> <TD><FONT face="arial" id="demobatch"></FONT></TD>
</TR>
<TR>
<TH colspan="8" width="240"> Subjects Marks </TH>
</TR>
<TR>
<TD width="135">SEMESTER 1:</TD> <TD><FONT face="arial" id="demooffice"></FONT></TD>
</TR>
<TR>
<TD width="135">SEMESTER 2:</TD><TD><FONT face="arial" id="demoweb"></FONT></TD>
</TR>
<TD width="135">SEMESTER 3:</TD><TD><FONT face="arial" id="demoit"></FONT></TD>
</TR>
<TR>
<TD width="135">SEMESTER 4:</TD><TD><FONT face="arial" id="democ"></FONT></TD>
</TR>
<TR>
<TH colspan="8" width="240"> Marks Result </TH>
</TR>
<TR>
<TD width="135">TOTAL:</TD><TD> <FONT face="arial" id="demototal"></FONT></TT></TD>
</TR>
<TR>
<TD width="135">Percentage:</TD><TD><FONT face="arial" id="demoper"></FONT></TD>
</TR>
<TR>
<TD width="135">Grade:</TD><TD><FONT face="arial" id="demograde"></FONT></TD>


</TR>
</TABLE>

</DIV>

</form>



</DIV>

     <script src="./lib/jquery.min.js">
    </script>
    <script type="text/javascript" src="./lib/jspdf.min.js">
    </script>
    <script type="text/javascript" src="./lib/html2canvas.min.js">
    </script>

    <script type="text/javascript" src="app.js">
    </script>
</BODY>
</HTML>