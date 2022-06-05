<?php
session_start();
$pageHeader = 'Добро пожаловать';
$_SESSION['login'] = null;

if (isset($_GET['action']) && $_GET['action'] === 'login') {
    //setcookie('username', null, -1, '/');
    $_SESSION['login'] = true;
    // unset($_COOKIE['username']);
}

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    //setcookie('username', null, -1, '/');
    unset($_SESSION['username']);
    // unset($_COOKIE['username']);
}

$username = null;
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} elseif (isset($_REQUEST['username']) && !empty($_REQUEST['username'])) {
    $username = $_REQUEST['username'];
    // $expires = time() + 86400;
    // setcookie('username', $username, $expires);
    $_SESSION['username'] = $username;
}
