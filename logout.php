<? php
session_start();

if(isser($_SESSION['username']))
{
    unset($_SESSION['username']);
}

header("Location: Index.Html")