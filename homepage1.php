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
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 banner-info">
            <form class="box" action="Transaction.php" method="POST" onsubmit="return validate()">
                <h2 class="big-text1">Transactions</h2>
                <div class="col-sm-offset-6">
                    <input type="radio" name="cat_id" value="6" required/> Income
                    <input type="radio" name="cat_id" value="7" required/> Expense<p>
                </div>            
				    <input type="text" placeholder="Amount" name="amount" required><p>
                    <input type="date" placeholder="Date"  name="date" required><p>
                <div class="col-sm-offset-4">
                    <input type="radio" name="description" value="1" required/> Salary
                    <input type="radio" name="description" value="2" required/> Food
                    <input type="radio" name="description" value="3" required/> Beverage<br><br>
                    <input type="radio" name="description" value="4" required/> Clothing
                    <input type="radio" name="description" value="5" required/> Fuel
                    <input type="radio" name="description" value="6" required/> Entertainment<br><br>
                    <input type="radio" name="description" value="7" required/> Medical
                    <input type="radio" name="description" value="8" required/> Debt
                    <input type="radio" name="description" value="9" required/> Others<p>
                </div>
                    <input type="submit" name="add_tran" class="button-submit" value="Add">
                    <br>
                    <br>
            </form>
            <div class="col-sm-offset-6">
                <?php
                    
                    include("connection.php");
                    $result = mysqli_query($con,"SELECT * FROM transactions WHERE username= '$user' ORDER BY date ASC");
                
                    if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                        echo "<table border=1 align='center'>";
                        echo "<tr>
                            <th>date</th>
                            <th>cat_id</th>
                            <th>amount</th>
                            <th>desc_id</th>";
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo 
                                "<td>".$row['date']."</td>
                                <td>".$row['cat_id']."</td>
                                <td>".$row['amount']."</td>
                                <td>".$row['desc_id']."</td>";
                        }
                        echo "</table>";
                    } else {
                        echo "<h3 align='center'>No Results</h3>";
                    }
                    mysqli_close($con);
                
                    ?>
                </div> 
        </div>
        <div class="container-fluid">
            <div class="row">
            <div class="col-sm-6 banner-chart">    
            <h2 class="big-text1">Analytics</h2>
                <div id="piechart" class="piechart">
                </div>
            <div class="col-sm-offset-4">
                <?php
				
                    include("connection.php");
                    $result = mysqli_query($con,"SELECT ref.cat_desc as category, sum(tran1.amount) AS total 
                    FROM transactions as tran1
                    inner join tran_category as ref
                    on tran1.cat_id = ref.cat_id
                    where tran1.username = '$user'
                    GROUP BY category");
                
                    if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                        echo "<table border=2 align='center'>";
                        echo "<tr>
                            <th>category</th>
                            <th>total</th>";   
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo 
                                "<td>".$row['category']."</td>
                                <td>".$row['total']."</td>";
                        }
                        echo "</table>";
                    } else {
                        echo "<h3 align='center'>No Results</h3>";
                    }
                    mysqli_close($con);
			
				?>
            </div>
            </div>
        </div>

</body>  
</html>