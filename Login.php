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
        if ($output) {
            if ($outpur && mysqli_num_rows($result)>0) {
                $user = mysqli_fetch_assoc($result);
                if ($user['password'] === $password) {
                    $_SESSION[username] = $user['username'];
                    header('location: homepage.php');
                    die;
                }

            } else {
                header('location: Index.html');
            }
        } else {
            echo"Failed";
            die;
        }   
        }