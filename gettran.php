<?php

include("connection.php");
$user = $_SESSION['username'];
if(isset($_POST["action"]))
{
	if($_POST["action"] == 'fetch')
	{
		$query = "
		SELECT ref.cat_desc as category, sum(tran.amount) AS Total 
		FROM transactions tran
        inner join tran_category ref
        on tran.cat_id = ref.cat_id
        where tran.username = '$username'
		GROUP BY category
		";

		$tran_output = $connect->query($query);

		$data = array();

		foreach($tran_output as $row)
		{
			$data[] = array(
				'Category'		=>	$row["Category"],
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}

		echo json_encode($data);
	}
}


?>