<?php
session_start();
$user = $_SESSION['username'];
include("connection.php");
$query = "SELECT ref.cat_desc as category, sum(tran1.amount) AS total 
		FROM transactions as tran1
        inner join tran_category as ref
        on tran1.cat_id = ref.cat_id
        where tran1.username = '$user'
		GROUP BY category
		";
$output = mysqli_query($con, $query);
