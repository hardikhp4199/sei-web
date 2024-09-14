<?php
// Initialize the session
require_once('shared/database.blade.php');

session_start();

function checkAuth($email)
{
    if (DatabaseService::getInstance()->checkUser($email)) {
        setSesstion();
        return true;
    } else {
        return "Email is not valid";
    }
}

function setSesstion()
{
    $_SESSION["user"] = true;
}

function logoutSesstion()
{
    $_SESSION["user"] = false;
}

// if (!isset($_SESSION["user"]) || $_SESSION["user"] !== true) {
//     header("location:pages-login.php");
//     exit;
// }
