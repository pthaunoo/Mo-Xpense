<?php
session_start();

    include("connection.php");

    if($_SERVER['REQUEST_METHOD'] =="POST"){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

            if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($username) && !empty($password))
            {
                $password = md5($password); //encrypting password sent to DB
                $query = "INSERT INTO Users (FIRST_NAME, LAST_NAME, EMAIL, USERNAME, PASSWORD) VALUES ('$first_name','$last_name','$email','$username', '$password')";
                mysqli_query($con, $query);
                header('location: Login.html');
            } else {
                alert("Please complete all fields");
            }
            header("location: login.php");
            die;
        }
