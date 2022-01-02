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
    <link rel="stylesheet" type="text/css" href="CSS/style.css"/>
    <link rel="icon" href="Images/MoIcon.ico"/>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                var style = {
                    width: '100%',
                    height: '500px'
                };
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, style);  
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
<div class="container">
    <div class="row">
        <div class="col-sm-6 banner-info">
            <form class="box" action="Transaction.php" method="POST" onsubmit="return validate()">
                <h2 class="big-text">Transactions</h2>
                    <input type="radio" name="cat_id" value="6" id="1" required >
                    <label for="1" class="lbl-radio">
                        <div class = "display-box">
                            <div class="size">Income</div>
                        </div>
                    </label>   
                    <input type="radio" name="cat_id" value="6" id = "2"  required>
                    <label for="2" class="lbl-radio">
                        <div class = "display-box">
                            <div class="size">Expense</div>
                        </div>
                    </label>  
                    <br>

				    <input type="integer" placeholder="Amount" name="amount" required><p>
				    <input type="date" placeholder="Please capture date" name="date" required><p>
				    <input type="integer" placeholder="Description" name="description" required><p>
                <input type="submit" name="add_tran" class="button-submit" value="Add Transaction">
        </form>
        </div>
        <div class="container-fluid">
            <div class="col">
                <div class="col-sm-6 banner-info">
                        <h2 class="big-text">Expenses</h2>
                        <div class="chart_style">
                                <div id="piechart" class="piechart"></div>
                        </div> 
                </div>
            </div>
</body>  
</html>