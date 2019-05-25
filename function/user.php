<?php

function check_login($username,$password)
{
    global $user;
    //require 'data/user.php';
    foreach ($user as $value) {
        if ($username==$value['username']&&$password==$value['password']) {
            return TRUE;
        }
    }
    return FALSE;
}
function is_login() {
    if (isset($_SESSION['login'])) {

        return $_SESSION['login']['is_login'];
    }
    return false;
}

function user_login() {
    if (isset($_SESSION['login'])) {

        return $_SESSION['login']['user_login'];
    }
    return false;
}
function user_id_login()
{
    if (isset($_SESSION['login'])) {
        return$_SESSION['login']['user_id_login'];
    }
}
function is_username($username) {
    $parttern = "/^[A-Za-z0-9_\@.]{6,32}$/";
    if (preg_match($parttern, $username)) {
        return true;
    }
}
function is_password($password) {
    $parttern = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
    if (preg_match($parttern, $password)) {
        return true;
    }
}