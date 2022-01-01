<?php

include("connection.php");
$user = $_SESSION['username'];
$query = "
		SELECT ref.cat_desc as category, sum(tran.amount) AS Total 
		FROM transactions tran
        inner join tran_category ref
        on tran.cat_id = ref.cat_id
        where tran.username = '$username'
		GROUP BY category
		";
$output = mysqli_query($con, $query);
