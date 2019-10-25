<?php
    require 'user.php';

	session_start();
	if (!isset($_SESSION['user'])) {
		header('Location: index.php');
    }
    $user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <ul>
        <li>username: <?= $user->name; ?></li>
        <li>email: <?= $user->email; ?></li>
        <li>firstname: <?= $user->firstname; ?></li>
        <li>lastname: <?= $user->lastname; ?></li>
    </ul>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>