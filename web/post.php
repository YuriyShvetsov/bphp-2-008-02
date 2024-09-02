<?php
session_start(); 
if ($_POST['user_name'] !== '') {
    $_SESSION['user_name'] = $_POST['user_name'];
}
header('Location: index.php');

