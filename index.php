<?php
session_start();
$name= $_SESSION['username'];
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
                    <li><a href="logout.php">Logout</a></li>
                </ul>
        </div> 
        </div>
    </nav>

    <div class="container">
    <div class="row">
        <div class="col-sm-6 banner-info">
            <form class="box" action="Register.php" method="POST">
                <h2 class="big-text">Register</h2>
                <input type="text" name="first_name" placeholder="FISRT NAME" id="first_name">
                <input type="text" name="last_name" placeholder="LAST NAME" id="last_name">
                <input type="text" name="email" placeholder="EMAIL ADDRESS" id="email">
                <input type="text" name="username" placeholder="USERNAME" id="username">
                <input type="password" name="password" placeholder="PASSWORD" id="password">
                <input type="submit" name="" id="submit" class="button-submit" value="Register">
        </form>
        </div>
        <div class="col-sm-6 banner-image">
            <img src="Images/Mologo.png" class="img-responsive">
        </div>
    </div>

</body>
</html>