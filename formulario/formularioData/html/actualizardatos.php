<?php
    $conn = require_once('../../conexion.php');
try {


    if (isset($_POST["txtCorreo"]) && !empty(isset($_POST["txtCorreo"]))) {
        $Fk_NumeroDocumento = trim($_POST["txtCedula"]);
        $CorreoElectronico = trim($_POST["txtCorreo"]);
        $basesdeDatos = $conn->prepare("SELECT * FROM Personal_almacontact WHERE Pk_NumeroDocumento = ? AND CorreoElectronico = ?;");
        $basesdeDatos->bindParam(1, $Fk_NumeroDocumento, PDO::PARAM_STR);
        $basesdeDatos->bindParam(2, $CorreoElectronico, PDO::PARAM_STR);
        $basesdeDatos->execute();
        $data = $basesdeDatos->fetchAll();
        foreach ($data as $datos) :
            $Areas = $datos['Fk_Area'];
            $userSedeLAboral = $datos['Fk_Sede'];
            $userMunicipios = $datos['MunicipioResidencia'];
            $userBarrio = $datos['Barrios'];
            $userDireccion = $datos['NumeroVia'];
            $userInterior = $datos['Interior'];
            $userFijo = $datos['Telefonofijo'];
            $userMovil = $datos['Movil'];
            $userTelefonoDeEmergencia = $datos['TelefonoEmergencia'];
            $userCorreo = $datos['CorreoElectronico'];
        endforeach;
    }
} catch (PDOException $e) {
    echo $e;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actualizacion de datos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <!-- conexion con los estilos de boostrap y los Javascripts -->
  <link rel="stylesheet" href="../css/actualizardatos.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="../css/formulario.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>

<body>




  <header>
    <div class="navegator">
      <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="../html/home.php">Almacontact</a>
          <a href="../html/home.php">
            <img src="../img/logo.png" alt="" width="30px" height="30px">
          </a>
        </div>
      </nav>
    </div>
  </header>
  <section class="contenedor">
    <div class="formulario">
    <form action="../../actualizar.php">
        <div id="titulo">
          <p> Actualiza tus datos</p>
        </div>

        <label for="area">Area</label>
        <select name="sedeLaboral" id="area" class="form-select form-select-sm">
          <option value="">Selecciona el area</option>
          <?php
          ?>
        </select>



        <label for="sedeLaboral">Sede Laboral*</label>
        <select class="form-select form-select-sm" name="sedeLaboral" required="true" aria-label=".form-select-sm example" id="sedeLaboral">
          <option selected value="">selecciona</option>
          <?php
          $select = include_once("../../conexion.php");
          $select = $conn->prepare("SELECT * FROM Sede");
          $select->execute();
          $data = $select->fetchAll();
          foreach ($data as $valores) :
            echo '<option value="' . $valores["Id_sede"] . '">' . $valores["Nombre_sede"] . '</option>';
            $sede = $valores;
          endforeach;
          ?>
        </select>

        <!--  -----------------
                  MUNCIPIO DE RECIDENCIA
                  -----------------
                -->
        <label for="municipioDeRecidencia">Municipio de Recidencia*</label>
        <select class="form-select form-select-sm" name="municipioRecidencia" required="true" aria-label=".form-select-sm example" id="municipioDeRecidencia">
          <option selected value="">selecciona </option>
        </select>


        <label for="barrio">Barrio*</label>
        <select class="form-select form-select-sm" name="barrio" required="true" aria-label=".form-select-sm example" id="Barrio">
          <option selected value="">selecciona </option>
        </select>

        <label for="direccion">Direccion*</label>
        <select class="form-select form-select-sm" name="direccion" aria-label=".form-select-sm example" id="direccion" required="true">
          <option value="">tipo de avenida</option>
          <?php
          $select = include_once("../../conexion.php");
          $select = $conn->prepare("SELECT * FROM TipoVia");
          $select->execute();
          $data = $select->fetchAll();
          foreach ($data as $valores) :

            echo '<option value="' . $valores["Id_tipo_via"] . '">' . $valores["Nombre_tipo_via"] . '</option>';
          endforeach;
          ?>
        </select>
        <div class="dire input-group input-group-sm">
          <span class="input-group-text"></span>
          <input type="text" aria-label="First name" class="form-control" name="numeroViaDos">
          <span class="input-group-text">#</span>
          <input type="text" aria-label="Last name" class="form-control" name="numeroViaUno">
        </div>

        <label for="interiores"> Interior</label>
        <input type="text" aria-label="Last name" class="form-control" name="interior" id="interior">

        <label for="telefonoFijo">telefono fijo</label>
        <input type="text" id="telefonoFijo" class="form-control">

        <label for="movil">movil</label>
        <input type="text" id="movil" class="form-control">

        <label for="telefonoEmergencia">telefono en caso de emergencia</label>
        <input type="text" id="telefonoEmergencia" class="form-control">

        <label for="correo">correo electronico</label>
        <input type="text" id="correo" class="form-control">
        <button type="submit" class="btn btn-primary" value="enviar">actualizar</button>
        <button type="button" class="btn btn-outline-dark ms-">cancelar</button>
      </form>
    </div>



        <!-- estos son los cambios que podemos guardar -->
        <div class="img">
          <button
            type="button"
            class="btn btn-outline-dark btn-lg"
            data-bs-target="#upDate"
            data-bs-toggle="modal">Buscar personas</button>
            <div class="formulario2">
    <label for="area">Area</label>
        <input type="text" name="sedeLaboral" id="area" class="form-control form-sm" disabled  placeholder="<?php if (isset($_POST["txtCorreo"]) && !empty(isset($_POST["txtCorreo"]))){ echo $Areas; }?>" >
        </input>



        <label for="sedeLaboral">Sede Laboral*</label>
        <input  class="form-control form-select-sm" placeholder="<?php if (isset($_POST["txtCorreo"]) && !empty(isset($_POST["txtCorreo"]))){ echo $userSedeLAboral;} ?>" name="sedeLaboral" required="true" aria-label=".form-select-sm example" id="sedeLaboral" disabled>
        </input>

        <label for="municipioDeRecidencia">Municipio de Recidencia*</label>
        <input type="text" class="form-control form-control-sm" placeholder="<?php if (isset($_POST["txtCorreo"]) && !empty(isset($_POST["txtCorreo"]))){echo $userMunicipios;} ?>" name="municipioRecidencia" required="true" aria-label=".form-select-sm example" id="municipioDeRecidencia" disabled>
        </input>


        <label for="barrio">Barrio*</label>
        <input class="form-control form-control-sm disanble" placeholder="<?php if (isset($_POST["txtCorreo"]) && !empty(isset($_POST["txtCorreo"]))){echo $userBarrio;} ?>" name="barrio" required="true" aria-label=".form-select-sm example" id="Barrio" disabled>
        </input>

        <label for="direccion">Direccion*</label>
        <input class="form-control form-select-sm" name="direccion" placeholder="<?php if (isset($_POST["txtCorreo"]) && !empty(isset($_POST["txtCorreo"]))){echo $userDireccion;} ?>" aria-label=".form-select-sm example" id="direccion" required="true" disabled>
        </input>
        <label for="disabledTextInput"> Interior</label>
        <input type="text" aria-label="Last name" placeholder="<?php if (isset($_POST["txtCorreo"]) && !empty(isset($_POST["txtCorreo"]))){ echo $userInterior;} ?>" class="form-control"  disabled name="interior" id="disabledTextInput" placeholder="<?php if (isset($_POST["txtCorreo"]) && !empty(isset($_POST["txtCorreo"]))) {echo $Areas;} ?>" >

        <label for="telefonoFijo">telefono fijo</label>
        <input type="text" id="telefonoFijo" class="form-control" disabled placeholder="<?php if (isset($_POST["txtCorreo"]) && !empty(isset($_POST["txtCorreo"]))){ echo $userTelefonoDeEmergencia;} ?>">

        <label for="movil">movil</label>
        <input type="text" id="movil" class="form-control" disabled placeholder="<?php if (isset($_POST["txtCorreo"]) && !empty(isset($_POST["txtCorreo"]))){echo $userMovil;} ?>">

        <label for="telefonoEmergencia">telefono en caso de emergencia</label>
        <input type="text" id="telefonoEmergencia" class="form-control"disabled placeholder="<?php  if (isset($_POST["txtCorreo"]) && !empty(isset($_POST["txtCorreo"]))){echo $userTelefonoDeEmergencia;} ?>" >

        <label for="correo">correo electronico</label>
        <input type="text" id="correo" class="form-control" disabled placeholder="<?php if (isset($_POST["txtCorreo"]) && !empty(isset($_POST["txtCorreo"]))){ echo $userCorreo;} ?>">
    </div>
    </div>


    <!-- aca comienza el modal -->
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
						<form action="./actualizardatos.php" method="POST">

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
  </section>
  <script src="../js/actualizar.js"></script>
</body>

</html>