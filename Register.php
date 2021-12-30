<?php
session_start();

// initializing variables
$username = "";
$email    = "";
    include("connection.php");

    if($_SERVER['REQUEST_METHOD'] =="POST"){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user_query = "SELECT * FROM Users WHERE username = '$username' OR email='$email'";
        $output = mysqli_query($con, $user_query);
        if (mysqli_num_rows($output) > 0) {
            header('location: Login.html');
            die;
        } else {
            $add_query = "INSERT INTO Users (FIRST_NAME, LAST_NAME, EMAIL, USERNAME, PASSWORD) VALUES ('$first_name','$last_name','$email','$username', '$password')";
            mysqli_query($con, $add_query);
            $_SESSION['username'] = $username;
            header('location: Login.html');
            die;
        }   
        }
