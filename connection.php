<?php

$dbhost = "fdb31.runhosting.com";
$dbuser = "4011122_moexpense";
$dbpass = "Tanhayee14";
$dbname = "4011122_moexpense";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname))
{
  die("failed to connect");
}
