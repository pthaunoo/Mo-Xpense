<?php
include("connection.php");
$query = "SELECT ref.cat_desc as category, sum(tran1.amount) AS Total
		FROM transactions as tran1
        inner join tran_category as ref
        on tran.cat_id = ref.cat_id
        where tran1.username = 'Praveen'
		GROUP BY category
		";
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
                ['category', 'Total'],
                <?php
                while($row = mysqli_fetch_array($output))
                {
                    echo "['".$row["category"]."',".$row["Total"]."],";
                }
                ?>
            ]);
            var options:{
                title:'My Finance'
            }
            car chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.dar(data, options);
        }

        
    </script>

</head>
<body>
    <div style = "width:900px;">
       <div id="piechart"></div>
    </div>
</body>
</html>