<?php

function check_login($con)
{
    if(isset($_session['username'])){
        $id = $_SESSION['username']
        $query = "select * from users where username = '$id' limit1";

        $result = mysqli_query($con,$query)
        if($result && mysqli_num_rows($result)>0){
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    header("location: login.html");
    die;
}