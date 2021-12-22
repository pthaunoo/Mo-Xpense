<?php

session_start();

$con = mysqli_connect('fdb31.runhosting.com','4011122_moexpense','Tanhayee14');

mysqli_select_db($con, '4011122_moexpense');

$FIRST_NAME = $_POST['fname'];
$LAST_NAME = $_POST['lname'];
$EMAIL = $_POST['email'];
$USERNAME = $_POST['username'];
$PASSWORD = $_POST['password'];

$s = "select * from users where name = '$username'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num ==1) {
  echo "Username Already Exists";
} else {
  $reg = "INSERT INTO users(USERNAME, FIRST_NAME, LAST_NAME, EMAIL, PASSWORD) values ($USERNAME,$FIRST_NAME,$LAST_NAME,$EMAIL,$PASSWORD)";
  mysqlli_query($con, $reg);
  echo "User Created";
}