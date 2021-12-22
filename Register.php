<?php
session_start();

    include("connection.php");
    include("function.php");

    if($_SERVER['REQUEST_METHOD'] =="POST"){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password]'];

        if(!empty($username) && !empty($password) && ! is_numeric($username)){
            $query = "INSERT INTO Users (first_name, last_name, email, username, password) values ('$fname','$lname','$email','$username', '$password')"
            mysqli_query($con, $query);
            header("location: login.html");
            die;
        } else {
            echo "Not valid";
        }
    }