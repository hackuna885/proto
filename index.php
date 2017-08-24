<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Login</title>
	<script type="text/javascript">
		window.addEventListener("load", function() { window. scrollTo(0, 0); });
	</script>
	<script type="text/javascript">
		var body = document.documentElement;
			if (body.requestFullscreen) {
			 body.requestFullscreen();
			} else if (body.webkitrequestFullscreen) {
			 body.webkitrequestFullscreen();
			} else if (body.mozrequestFullscreen) {
			 body.mozrequestFullscreen();
			} else if (body.msrequestFullscreen) {
			 body.msrequestFullscreen();
			}
	</script>
</head>
<body>
<div class="main_wrapper">

	<div class="c1">
		<div class="c2">
			<form method="post" action="#">
				<div class="cLogo">
					<div class="logo"></div>
				</div>
				<div class="cLogin">
					<div class="c2Titulo">INICIO</div>
					<div class="c2Form">
						<input type="text" name="txtNombre" class="inp inpNombre" placeholder="Usuario:">
						<br>
						<input type="password" name="txtPassword" class="inp inpPassword" placeholder="Password:">
					</div>
					<div class="cBtnRegistro">
						<a href="#">
							<div class="btnRegistro"></div>
							<div class="txtBtnReg">
								Registro
							</div>
						</a>
					</div>
				</div>
				<div class="cBotonLogin">
					<input type="image" class="btnAction" src="img/backTransparent.png">
					<div class="txtBoton">
						CONTINUAR
					</div>
				</div>
			</form>
		</div>
	</div>

</div>
</body>
</html>