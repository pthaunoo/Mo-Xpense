<?php
session_start();

// initializing variables
$username = "";
$password    = "";
    include("connection.php");

    if($_SERVER['REQUEST_METHOD'] =="POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $password = md5($password); //encrypting password sent to DB
        $user_signin = "SELECT * FROM Users WHERE username = '$username' AND password = '$password'";
        $output = mysqli_query($con, $user_usersignin);
            if ($output && mysqli_num_rows($result) == 1) {
                    $_SESSION[username] = $user['username'];
                    header('location: user.php');
                    die;
                }

            } else {

            }
         else {
            header('location: Index.html');
            die;
        }   
        }
