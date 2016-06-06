<!DOCTYPE html>
<html>
<head>
<!--<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">-->
<meta http-equiv="Content-type" content="text/html; charset=utf-8" /> 
	<title><?= $title; ?></title>
	
    <link rel="stylesheet"  type="text/css" href="<?= APP_W.'pub/css/m.css'; ?>">
    <link rel="stylesheet"  type="text/css" href="<?= APP_W.'pub/css/responsive.css'; ?>">
    <script src="<?= APP_W.'pub/js/jquery.min.js'; ?>"></script>
    <script src="<?= APP_W.'pub/js/app.js'; ?>"></script>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

</head>
	
<div id="cabecera">
	<div id="logo"><a href="<?= APP_W; ?>">
		<img src="<?= APP_W.'pub/img/logo_1.png'; ?>">
	</a></div>
	
	<div class="container2">
		<?php
		if (isset($_SESSION['user'])) {
			echo "<p id='user'>".$_SESSION['user']."</p>
				<form id='form_cerrar_sesion' name='cerrar_sesion' method='post' action='".APP_W."home/cerrar_sesion'>
				<button type='button' id='boton_cerrar_sesion'>Cerrar sesión</button></form>";
		}else{
			
			echo "<div id='form'>
				<h4 id='register'><a href='".APP_W."register'>Regístrate</a></h4>
				<h4 id='login'>Inicia Sesión</h4>
			</div>";
		}
		?>

		<!--Este div es el del login, que siempre estará oculto hasta que hagamos click en login o regisrate-->
		<div id="li_desplegable">
			<form id="form_login" name="login" method="post" action="<?=APP_W.'home/iniciar_sesion'; ?>">
				<input type="text" name="username" placeholder="Usuario" maxlength="20"><br>
				<input type="password" name="password" placeholder="**********" maxlength="30"><br>
				<input type="submit" id="login_submit" value="Entrar">
			</form>
		</div>
	</div>

</div>
