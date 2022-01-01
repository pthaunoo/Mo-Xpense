<?php

function check_login($con)
{
    if(isset($_session['name'])){
        $user= $_SESSION['username'];
        $query = "select * from users where username = '$user'";
        $result = mysqli_query($con,$query);
        if(mysqli_num_rows($result)>0){
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    header("location: Login.html");
    die;
}