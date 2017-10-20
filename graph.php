<!DOCTYPE html>
<html lang="en">
    <head>
<style>




.verticalLine {
  border-left: thick solid #ff0000;
   border-bottom: thick solid #ff0000;

}





</style>
        <title>Graph</title>


<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.12.0/semantic.min.css" />

    </head>
    <script src="js/jquery.js" type="text/javascript"></script>


    <script type="application/javascript" src="js/awesomechart.js"> </script>

<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'faculty1');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   ?>
  
<body background="nature.jpg">
<div class="ui button aligned center teal" id="create_pdf"> 
                           Create PDF
              </div>
              <form name="form1" class="ui form">

<div class="verticalLine">
            <div class="container">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="hero-unit-table">
                            <div class="charts_container">
                                <div class="chart_container">
                                    <div class="alert alert-info"><center><h2>students-attendance graph</h2></center></div>  
                                    <canvas id="motorcycle_graph" width="1100" height="400">
                                        Your web-browser does not support the HTML 5 canvas element.
                                    </canvas>
                                </div>
                            </div>
						</div>




<script type="application/javascript">
    var motorcycle_chart = new AwesomeChart('motorcycle_graph');
    motorcycle_chart.data = [
    <?php
    $query = mysqli_query($db,"select * from graph") or die(mysqli_error());

    while ($row = mysqli_fetch_array($query)) {
        ?>
        <?php echo $row['lp'] . ','; ?>	
    <?php }; ?>
    ];

    motorcycle_chart.labels = [
    <?php
    $query = mysqli_query($db,"select * from graph") or die(mysqli_error());
    while ($row = mysqli_fetch_array($query)) {
        ?>
        <?php echo "'" . $row['name'] . "'" . ','; ?>	
    <?php }; ?>
    ];
    motorcycle_chart.colors = ['gold', 'skyblue', '#FF6600', 'pink', 'darkblue', 'lightpink', 'green'];
    motorcycle_chart.randomColors = true;
    motorcycle_chart.animate = true;
    motorcycle_chart.animationFrames = 30;
    motorcycle_chart.draw();
</script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

<h5 style="color: #FFFFFF">students-------></h5>

 </div>
 </form>
 <h2>NOTE:</h2>
 <p> <h3><i>numbers above the bar graph indicate total lectures attended by the student</i></h3></p>
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
