<?php
session_start();

    include("connection.php");

    if($_SERVER['REQUEST_METHOD'] =="POST"){
        $FIRST_NAME = $_POST['first_name'];
        $LAST_NAME = $_POST['last_name'];
        $EMAIL = $_POST['email'];
        $USERNAME = $_POST['username'];
        $PASSWORD = $_POST['password]'];

            $query = "INSERT INTO Users (FIRST_NAME, LAST_NAME, EMAIL, USERNAME, PASSWORD) VALUES ('$first_name','$last_name','$email','$username', '$password')";
            mysqli_query($con, $query);
            header("location: Register1.php");
        }
