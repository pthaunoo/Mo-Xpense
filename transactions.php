<?php
session_start();
$user = $_SESSION['username'];
include("connection.php");
$query = "SELECT tran1.date as 'date', ref.cat_desc as category, tdesc.description as description,tran1.amount AS amount 
		FROM transactions as tran1
        inner join tran_category as ref
        on tran1.cat_id = ref.cat_id
        inner join tran_description as tdesc
        on tran1.desc_id = tdesc.desc_id
        where tran1.username = '$user'
        ORDER BY date ASC
		";
$output = mysqli_query($con, $query);