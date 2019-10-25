<?php
require 'user.php';

session_start();
if (isset($_SESSION['user'])) {
    header('Location: home.php');
}

if (!isset($_POST['user_name']) || !isset($_POST['user_password'])) {
    header('Location: index.php');
}

$user_name = $_POST['user_name'];
$user_password = $_POST['user_password'];

$user = User::Login($user_name, $user_password);
if (!$user) {
    header('Location: index.php?error=1');
} else {
    $_SESSION['user'] = $user;
    header('Location: home.php');
}