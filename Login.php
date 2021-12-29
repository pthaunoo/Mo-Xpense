<?php
session_start();
include("connection.php");

?>

{
                $check_user = "SELECT * FROM Users WHERE username = '$username' OR email = '$email' LIMIT 1";
                $output = mysqli_query($con, $check_user);
                    if(mysqli_num_rows($output)==1){
                        header('location: Login.html');
                    } 