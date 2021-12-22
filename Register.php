<?php
session_start();

    include("connection.php");

    if($_SERVER['REQUEST_METHOD'] =="POST"){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password]'];

            $query = "INSERT INTO Users (first_name, last_name, email, username, password) VALUES ('$fname','$lname','$email','$username', '$password')";
            mysqli_query($con, $query);
            header("location: login.html");
        }
