<?php
session_start();

// initializing variables
$username = "";
$password    = "";
    include("connection.php");

    if($_SERVER['REQUEST_METHOD'] =="POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user_signin = "SELECT * FROM Users WHERE username = '$username'";
        $output = mysqli_query($con, $user_signin);
            if ($output && mysqli_num_rows($output) == 1) {
                    $_SESSION[username] = $user['username'];
                    header('location: Homepage.php');
                    die;
                }
                else {
                        header('location: Index.html');
                        die;
                }

        }   
    
