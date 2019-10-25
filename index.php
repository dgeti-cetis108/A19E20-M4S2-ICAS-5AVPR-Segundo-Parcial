<?php
	session_start();
	if (isset($_SESSION['user'])) {
		header('Location: home.php');
	}
	if (isset($_GET['error'])) {
		$error = $_GET['error'];
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Inicio de sesión</title>
</head>
<body>
	<h1>Inicio de sesión</h1>
	<form action="login.php" method="post">
		<div>
			<label for="user_name">Usuario:</label>
			<input type="text" name="user_name" required>
		</div>
		<div>
			<label for="user_password">Contraseña:</label>
			<input type="password" name="user_password" required>
		</div>
		<div>
			<button type="submit">Iniciar sesión</button>
		</div>
		<?php if (isset($error)) { ?>
		<div class="error">
			Usuario y/o contraseña incorrectos.
		</div>
		<?php } ?>
	</form>
</body>
</html>