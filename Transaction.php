<?php

session_start();
$username= $_SESSION['username'];
include("connection.php");
    if(isset($_POST['add_tran'])){
        $date = $_POST['date'];
        $cat_id = $_POST['cat_id'];
        $amount = $_POST['amount'];
        $description = $_POST['description'];
        
        $add_tran = "INSERT INTO transaction (username, date, cat_id, amount, desc_id)
        VALUES ('$username','$date','$cat_id','$amount', '$description')";
        mysqli_query($con, $add_tran);
           
        if ($add_tran) {
            header('location: Login.html');
        }
        }