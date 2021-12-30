<?php
session_start();

// initializing variables
$username = "";
$email    = "";
    include("connection.php");

    if($_SERVER['REQUEST_METHOD'] =="POST"){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user_query = "SELECT * FROM Users WHERE username = '$username' OR email='$email'";
        $output = mysqli_query($con, $user_query);
        if (mysqli_num_rows($output) > 0) {
           echo '<div>User Already Existit</div>';
           <div class="container">
            <div class="row">
                <div class="col-sm-6 banner-info">
                    <h1 class="big-text">Your budget tracker</h1>
                    <p class="para-text">With Mo-Xpense application, manage your personal finance at your finger tips anywhere, anytime. We care about the health of your finance and help you 
                        move forward in your journey.</p> 
                </div>
                    <form class="box" action="Login.html" method="POST">
                        <input type="submit" name="" value="Sign In">
                    </form>
                    <form class="box" action="Register.html" method="POST">
                        <input type="submit" name="" value="Register">
                    </form>
                
                <div class="col-sm-6 banner-image">
                    <img src="Images/Mologo.png" class="img-responsive">
                </div>
            </div>
        } else {
            $password = md5($password); //encrypting password sent to DB
            $add_query = "INSERT INTO Users (FIRST_NAME, LAST_NAME, EMAIL, USERNAME, PASSWORD) VALUES ('$first_name','$last_name','$email','$username', '$password')";
            mysqli_query($con, $add_query);
            $_SESSION['username'] = $username;
            header('location: Login.html');
            die;
        }   
        }
