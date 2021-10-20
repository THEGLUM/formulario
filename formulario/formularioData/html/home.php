<!DOCTYPE html>
<head>
		<html lang="en">
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>home</title>
		<link rel="icon" href="../img/logo.png" />
		<!-- conexion con los estilos de boostrap -->
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
			crossorigin="anonymous"
		/>
		<!-- conexion con los estilos de boostrap y los Javascripts -->
		<link rel="stylesheet" href="../css/home.css" />
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
			crossorigin="anonymous"
		></script>

		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap"
			rel="stylesheet"
		/>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


		<script src="../js/query/jquery-ui.min.js"></script>
		<script src="../js/query/jquery-ui.js"></script>
		<link rel="stylesheet" href="../css/jquery-ui.css">
	</head>
	<body>
		<header>
			<div class="navegator">
				<nav class="navbar navbar-light bg-light">
					<div class="container-fluid">
						<a class="navbar-brand" href="../html/home.php">Almacontact</a>
						<a href="../html/home.php">
							<img src="../img/logo.png" alt="" width="30px" height="30px" />
						</a>
					</div>
				</nav>
			</div>
		</header>

		<section class="contenedor">
			<div class="botones">
				<a href="formulario.php"
					><button type="button" class="btn btn-primary btn-lg" id="">
						Registrar usuario
					</button></a
				>
				<button
					type="button"
					class="btn btn-outline-dark btn-lg"
					data-bs-target="#upDate"
					data-bs-toggle="modal"
				>
					Actualizar datos
				</button>

				<button type="button" class="btn btn-outline-dark btn-lg">Administrador</button>
			</div>
			<div class="imagen">
				<img
					src="../img/home.svg"
					alt="formulario almacontact"
					srcset=""
					width="700px"
					height="700px"
				/>
			</div>
		</section>

		<div
			class="modal fade"
			id="upDate"
			tabindex="-1"
			aria-labelledby="exampleModalLabel"
			aria-hidden="true"
		>
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">actualizar datos</h5>
						<button
							type="button"
							class="btn-close"
							data-bs-dismiss="modal"
							aria-label="Close"
						></button>
					</div>
					<div class="modal-body">
						<form action="../../validarDatos.php" method="POST">

							<div class="user">
								<p>cedula</p>
								<input type="text"  class="user-input" name="txtCedula" id="ingreseCedula" required/>
							</div>
							<div class="ingreseMovil">
								<p for="">corroe</p>
								<input type="text" maxlength="" class="movil-input" name="txtCorreo" id="correo" required/>
							</div>

						</div>
						<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
							cerrar
						</button>
							<button type="submit" class="btn btn-primary">ingresar</button>
						</div>
						</form>
				</div>
			</div>
		</div>


		<footer class="footer">
			<div class="copy">
				<b>Copyright&copy; 2021 - Todos los derechos reservados</b>
			</div>
		</footer>
		<script src="../js/home.js"></script>
	</body>
</html>
