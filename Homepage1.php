<?php
include("connection.php");
$query = "SELECT cat_id, sum(tran1.amount) AS Total FROM transactions WHERE username = 'Praveen' GROUP BY cat_id";
$output = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mo-Xpense - Track It or Waste It</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts.loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current',{'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart()
        {
            var data = google.visualization.arrayToDataTable([
                ['cat_id', 'Total'],
                <?php
                while($row = mysqli_fetch_array($output))
                {
                    echo "['".$row["cat_id"]."',".$row["Total"]."],";
                }
                ?>
            ]);
            var options:{
                title:'My Finance'
            }
            car chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }

        
    </script>

</head>
<body>
    <div style = "width:900px;">
       <div id="piechart" style="width: 900px; height:500px;"></div>
    </div>
</body>
</html>