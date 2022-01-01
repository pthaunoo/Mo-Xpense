<?php
session_start();
$user= $_SESSION['username'];
include("gettran.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mo-Xpense - Track It or Waste It</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css"/>
    <link rel="icon" href="Images/MoIcon.ico"/>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script	src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <script type="text/javascript" src="/JS/validation.js"></script>
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
    <header class="header">
    <nav class="navbar navbar-style">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#iconm">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href=""><img class="logo" src="Images/Mologo.png"></a>
            </div>

            <div class="collapse navbar-collapse" id="iconm">   
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="logout.php">logout</a></li>
                </ul>
        </div> 
        </div>
    </nav>
    <div class="container-fluid">
        <div class="col">
            <div class="col-sm-6 m-auto">
                    <h2 class="big-text">Expenses</h2>
                    <div class="card-body">
                            <div id="piechart"></div>
                    </div> 
            </div>
        </div>

</body>
</html>