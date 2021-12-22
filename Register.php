<?php

session_start();

$con = mysqli_connect('fdb31.runhosting.com','4011122_moexpense','Tanhayee14');

mysqli_select_db($con, '4011122_moexpense');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$emailL = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$s = "select * from users where USERNAME = '$username'";

$result = mysqli_query($con, $s);

if($result ==1) {
  echo "Username Already Exists";
} else {
  $reg = "INSERT INTO users(USERNAME, FIRST_NAME, LAST_NAME, EMAIL, PASSWORD) values ($USERNAME,$FIRST_NAME,$LAST_NAME,$EMAIL,$PASSWORD)";
  mysqli_query($con, $reg);
  echo "User Created";
}