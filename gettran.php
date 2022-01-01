<?php
session_start();
$user = $_SESSION['username'];
include("connection.php");
$query = "SELECT ref.cat_desc as category, sum(tran.amount) AS Total 
		FROM transactions tran
        inner join tran_category ref
        on tran.cat_id = ref.cat_id
        where tran.username = '$user'
		GROUP BY category
		";
$output = mysqli_query($con, $query);
