<?php
$_SESSION['username'];
if(isset($_SESSION['username']))
{
    unset($_SESSION['username']);
}

header("Location: Index.Html");