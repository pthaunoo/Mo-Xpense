<?php
session_start();

    include("connection.php");

    if($_SERVER['REQUEST_METHOD'] =="POST"){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $pass = $_POST['pass]'];

            $query = "INSERT INTO Users (FIRST_NAME, LAST_NAME, EMAIL, USERNAME, PASS) VALUES ('$first_name','$last_name','$email','$username', '$pass')";
            mysqli_query($con, $query);
            header("location: Register1.php");
        }
