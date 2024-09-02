<?php
session_start(); 

if (isset($_SESSION['user_name'])) {
    echo 'Привет, ' . $_SESSION['user_name'] . '!';
    include 'exit.php';
} else {
    include 'login.php';
}