<?php
session_start();

    include("connection.php");

    if($_SERVER['REQUEST_METHOD'] =="POST"){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

            $query = "INSERT INTO Users (FIRST_NAME, LAST_NAME, EMAIL, USERNAME, PASSWORD) VALUES ('$first_name','$last_name','$email','$username', '$password')";
            mysqli_query($con, $query);
            header("location: Login.php");
        }
