<?php
session_start();
include("connection.php");
    if($_SERVER['REQUEST_METHOD'] =="POST"){
        $username = $_POST['username'];
        $date = $_POST['date'];
        $cat_id = $_POST['cat_id'];
        $amount = $_POST['amount'];
        $description = $_POST['description'];
        
            $add_tran = "INSERT INTO transactions (username, date, cat_id, amount, desc_id) VALUES ('$username','$date','$cat_id','$amount', '$description')";
            mysqli_query($con, $add_tran);
           
        if ($add_tran) {
            header('location: Homepage.php');
            die;
        }
    }
        