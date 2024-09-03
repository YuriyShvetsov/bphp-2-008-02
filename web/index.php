<?php
session_start(); 

if (isset($_SESSION['user_name'])) {
    echo 'Привет, ' . $_SESSION['user_name'] . '!';
    ?>
    <br>
    <a href="exit.php">Выход</a>
    <?php
} else {
    include 'login.php';
}