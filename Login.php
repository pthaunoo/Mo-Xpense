<?php
session_start();
include("connection.php");

if($_SERVER['REQUEST_METHOD'] =="POST"){
    $firstname = $_POST['firstname'];
        $query = "INSERT INTO test (firstname) VALUES ('$firstname')";
        mysqli_query($con, $query);
    }
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
                    <li><a href="Index.html">Home</a></li>
                    <li><a href="Login.html">Sign In</a></li>
                    <li><a href="Register.html">Register</a></li>
                    <li><a href="About.html">About</a></li>
                </ul>
        </div> 
        </div>
    </nav>

    <div class="container">
    <div class="row">
        <div class="col-sm-6 banner-info">
            <form class="box" action="Index.html" method="POST">
                <h2 class="big-text">Sign In</h2>
                <input type="text" name="" placeholder="USERNAME" id="username">
                <input type="password" name="" placeholder="PASSWORD" id="password">
                <input type="submit" name="" value="Sign In">
            </form>
        </div>
        <div class="col-sm-6 banner-image">
            <img src="Images/Mologo.png" class="img-responsive">
        </div>
    </div>

</body>
</html>