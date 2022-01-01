<?php
session_start();
$user = $_SESSION['username'];
include("connection.php");
include("gettran.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mo-Xpense - Track It or Waste It</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['category', 'total'],  
                          <?php  
                          while($row = mysqli_fetch_array($output))  
                          {  
                               echo "['".$row["category"]."', ".$row["total"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of Male and Female Employee',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data);  
           }  
           </script>  

</head>
<body>  
           <br /><br />  
           <div style="width:900px;">  
                <h3 align="center">Make Simple Pie Chart by Google Chart API with PHP Mysql</h3>  
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>  
      </body>  
</html>