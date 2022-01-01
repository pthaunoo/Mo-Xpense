<?php

session_start();
include("connection.php");
    if(isset($_POST['add_tran'])){
        $username = $_POST['username'];
        $date = $_POST['date'];
        $cat_id = $_POST['cat_id'];
        $amount = $_POST['amount'];
        $description = $_POST['description'];
        
        $add_tran = "INSERT INTO transaction (username, date, cat_id, amount, description)
        VALUES ('$username','$date','$cat_id','$amount', '$description')";
        mysqli_query($con, $add_tran);
           
        if ($add_tran) {
            echo '<script type = "text/javascript">alert("Transaction Added")</script>';
            header('location: Homepage.php');
        }
        }