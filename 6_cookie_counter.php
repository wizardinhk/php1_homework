<?php

$n = $_COOKIE['quantity'];

if(!isset($_COOKIE)){
    setcookie('quantity', $n, time()+3600, "/");
} else{
    $n++;
    setcookie('quantity', $n, time()+3600, "/");
}
print_r($_COOKIE['quantity']);