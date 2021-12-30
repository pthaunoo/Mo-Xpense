<?php
session_start();

// initializing variables
$username = "";
$password    = "";
    include("connection.php");

    if($_SERVER['REQUEST_METHOD'] =="POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user_query = "SELECT * FROM Users WHERE username = '$username' AND password='$password'";
        $output = mysqli_query($con, $user_query);
        if (mysqli_num_rows($output) == 1) {
            $_SESSION['username'] = $username;
            header('location: homepage.php');
            die;
        } else {
            echo"Failed";
            die;
        }   
        }