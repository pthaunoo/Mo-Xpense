<?php
session_start();

    include("connection.php");

    if($_SERVER['REQUEST_METHOD'] =="POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user_signin = "SELECT * FROM Users WHERE username = '$username'";
        $output = mysqli_query($con, $user_signin);
            if (mysqli_num_rows($output) > 0) {
                $user = mysqli_fetch_assoc($output);
                return $user;
                if ($user['password'] === $password) {
                    $_SESSION[username] = $user['username'];
                    header('location: Homepage.php');
                    die;
                }
                else {
                        header('location: Index.html');
                        die;
                }

        }
    }   
    
