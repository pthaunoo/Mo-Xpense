<?php
session_start();
$name= $_SESSION['username'];
?>
\<!DOCTYPE html>
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

    <script type="text/javascript" src="/JS/validation.js"></script>

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
                <label for=""><b>Select category</b></label> <br>
                    <input type="radio" name="transaction" value="1" required/> Income<br>
                    <input type="radio" name="transaction" value="0" required/> Expense<p>
                    <label for="email"><b>Amount</b></label><br>
				    <input type="text" placeholder="Enter the Amount" name="amount" required><p>
                    <label for="date"><b>Date</b></label><br>
				    <input type="date" placeholder="Enter the date" name="date" required><p>
				    <label for="desc"><b>Description</b></label><br>
				    <input type="text" placeholder="Enter description" name="desc" required><p>
                <input type="submit" name="" id="submit" class="button-submit" value="Add Transaction">
        </form>
        </div>
        <div class="col-sm-6 banner-image">
            <img src="Images/Mologo.png" class="img-responsive">
        </div>
    </div>

</body>
</html>