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
<div class="container">
    <div class="row">
        <div class="col-sm-6 banner-info">
            <form class="box" action="Transaction.php" method="POST" onsubmit="return validate()">
                <h2 class="big-text">Transactions</h2>
                    <input type="radio" name="cat_id" value="6" required/> Income
                    <input type="radio" name="cat_id" value="7" required/> Expense<p>

				    <input type="integer" placeholder="Amount" name="amount" required><p>
				    <input type="date" placeholder="Please capture date" name="date" required><p>
				    <input type="integer" placeholder="Description" name="description" required><p>
                <input type="submit" name="add_tran" class="button-submit" value="Add Transaction">
        </form>
        </div>
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