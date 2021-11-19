<?php
$conn = require_once('../../conexion.php');
try {


  if (!empty(isset($_POST["txtCorreo"])) && !empty(isset($_POST["txtCedula"]))) {

    $Fk_NumeroDocumento = trim($_POST["txtCedula"]);
    $CorreoElectronico = trim($_POST["txtCorreo"]);
        $userMunicipios = '';
        $userSedeLAboral = '';
        $Areas = '';
        $userBarrio = '';
        $userDireccion = '';
        $userInterior = '';
        $userFijo = '';
        $userMovil = '';
        $userTelefonoDeEmergencia = '';
        $userCorreo = '';
        $userMunicipios = '';

    $basesdeDatos = $conn->prepare("SELECT *  from Personal_almacontact p join  TipoArea ON TipoArea.Id_area = p.Fk_Area join Municipio on Municipio.Id_municipio = p.MunicipioResidencia join Sede ON Sede.Id_sede = p.Fk_Sede join Barrio on Barrio.Id_barrio = p.Barrios WHERE Pk_NumeroDocumento = ? AND CorreoElectronico = ?;");
    $basesdeDatos->bindParam(1, $Fk_NumeroDocumento, PDO::PARAM_STR);
    $basesdeDatos->bindParam(2, $CorreoElectronico, PDO::PARAM_STR);
    $basesdeDatos->execute();
    $data = $basesdeDatos->fetchAll();

    foreach ($data as $datos) :

        $userID = $datos['Pk_NumeroDocumento'];
        $userMunicipios = $datos['Nombre_municipio'];
        $userSedeLAboral = $datos["Nombre_sede"];
        $Areas = $datos['Nombre_area'];
        $userBarrio = $datos['Nombre_barrio'];
        $userDireccion = $datos['NumeroVia'];
        $userInterior = $datos['Interior'];
        $userFijo = $datos['Telefonofijo'];
        $userMovil = $datos['Movil'];
        $userTelefonoDeEmergencia = $datos['TelefonoEmergencia'];
        $userCorreo = $datos['CorreoElectronico'];
        $userMunicipios = $datos['Nombre_municipio'];
    endforeach;
  }

  header('actualizardatos.php');
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
      <div id="titulo">
        <p> Actualiza tus datos</p>
      </div>
      <form action="../../actualizar.php" method="POST">
        <!-- id que se va a utilizar para identificar el usuario -->
        <input type="text" hidden value="<?php if (isset($_POST["txtCorreo"]) && !empty(isset($_POST["txtCorreo"]))) {
                                            echo $userID;
                                          } ?>" name="idUser"></input>


        <label for="area">Area</label>
        <div id ="sino" style=" font-size: 11px;">
          si no has cambiado de area por favor ingrese la misma
        </div>
        <select name="Area" id="area" class="form-select form-select-sm">
          <option value="">Selecciona el area</option>
          <?php
          $select = include_once("../../conexion.php");
          $select = $conn->prepare("SELECT * FROM TipoArea");
          $select->execute();
          $data = $select->fetchAll();
          foreach ($data as $valores) :
            echo '<option value="' . $valores["Id_area"] . '">' . $valores["Nombre_area"] . '</option>';
            $sede = $valores;
          endforeach;
          ?>
        </select>



        <label for="sedeLaboral">Sede Laboral*</label>
        <select class="form-select form-select-sm" name="sedeLaboral" aria-label=".form-select-sm example" id="sedeLaboral">
          <option  value="">selecciona sede </option>
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
        <select class="form-select form-select-sm" name="municipioRecidencia" aria-label=".form-select-sm example" id="municipioDeRecidencia">
          <option  value="">selecciona el municipio </option>
        </select>


        <label for="barrio">Barrio*</label>
        <select class="form-select form-select-sm" name="barrio" aria-label=".form-select-sm example" id="Barrio">
          <option  value="">selecciona el barrio </option>
        </select>

        <label for="direccion">Direccion*</label>
        <div id ="sino" style=" font-size: 11px;">
          es importante que si cambiaste de recidencia actualices la direccion
        </div>
        <select class="form-select form-select-sm" name="direccion"    aria-label=".form-select-sm example" id="direccion">
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
          <input type="text" aria-label="First name" class="form-control" name="numeroViaDos" >
          <span class="input-group-text">#</span>
          <input type="text" aria-label="Last name" class="form-control" name="numeroViaUno">
        </div>

        <label for="interiores"> Interior</label>
        <input type="text" aria-label="Last name" class="form-control" name="interior" id="interior">

        <label for="telefonoFijo">telefono fijo</label>
        <input type="text" id="telefonoFijo" class="form-control" name="telefonofijo" maxlength="10" >

        <label for="movil">movil</label>
        <input type="text" id="movil" class="form-control" name="movil" maxlength="10">

        <label for="telefonoEmergencia">telefono en caso de emergencia</label>
        <input type="text" id="telefonoEmergencia" class="form-control" name="telefonoEmergencia" maxlength="10">

        <label for="correo">correo electronico</label>
        <input type="text" id="correo" class="form-control" name="correo" maxlength="80">
        <button type="submit" class="btn btn-primary" value="enviar">actualizar</button>
        <a href="./home.php"><button type="button" class="btn btn-outline-dark ms-">atras</button></a>
      </form>
    </div>



    <!-- estos son los cambios que podemos guardar -->
    <div class="img">
      <button type="button" class="btn btn-outline-dark btn-lg" data-bs-target="#upDate" data-bs-toggle="modal">Buscar personas</button>
      <div class="formulario2">
        <label for="area">Area</label>
        <input type="text"="area" class="form-control form-sm" disabled placeholder="<?php if (isset($_POST["txtCorreo"]) && !empty(isset($_POST["txtCorreo"]))) {
                                                                                        echo $Areas;
                                                                                      } ?>">
        </input>



        <label for="sedeLaboral">Sede Laboral*</label>
        <input class="form-control form-select-sm" placeholder="<?php if (isset($_POST["txtCorreo"]) && !empty(isset($_POST["txtCorreo"]))) {
                                                                  echo $userSedeLAboral;
                                                                } ?>" aria-label=".form-select-sm example" id="sedeLaboral" disabled>
        </input>

        <label for="municipioDeRecidencia">Municipio de Recidencia*</label>
        <input type="text" class="form-control form-control-sm" placeholder="<?php if (isset($_POST["txtCorreo"]) && !empty(isset($_POST["txtCorreo"]))) {
                                                                                echo $userMunicipios;
                                                                              } ?>" aria-label=".form-select-sm example" id="municipioDeRecidencia" disabled>
        </input>


        <label for="barrio">Barrio*</label>
        <input class="form-control form-control-sm disanble" placeholder="<?php if (isset($_POST["txtCorreo"]) && !empty(isset($_POST["txtCorreo"]))) {
                                                                            echo $userBarrio;
                                                                          } ?>" aria-label=".form-select-sm example" id="userBarrio" disabled>
        </input>

        <label for="direccion">Direccion*</label>
        <input class="form-control form-select-sm" placeholder="<?php if (isset($_POST["txtCorreo"]) && !empty(isset($_POST["txtCorreo"]))) {
                                                                  echo $userDireccion;
                                                                } ?>" aria-label=".form-select-sm example" id="direccion" disabled>
        </input>
        <label for="disabledTextInput"> Interior</label>
        <input type="text" aria-label="Last" class="form-control" disabled placeholder="<?php if (isset($_POST["txtCorreo"]) && !empty(isset($_POST["txtCorreo"]))) {
                                                                                          echo $userInterior;
                                                                                        } ?>" id="disabledTextInput">

        <label for="telefonoFijo">telefono fijo</label>
        <input type="text" id="telefonoFijo" class="form-control" disabled placeholder="<?php if (isset($_POST["txtCorreo"]) && !empty(isset($_POST["txtCorreo"]))) {
                                                                                          echo $userTelefonoDeEmergencia;
                                                                                        } ?>">

        <label for="movil">movil</label>
        <input type="text" id="movil" class="form-control" disabled placeholder="<?php if (isset($_POST["txtCorreo"]) && !empty(isset($_POST["txtCorreo"]))) {echo $userMovil;}else{ echo 'no se encontro';} ?>">

        <label for="telefonoEmergencia">telefono en caso de emergencia</label>
        <input type="text" id="telefonoEmergencia" class="form-control" disabled placeholder="<?php if (isset($_POST["txtCorreo"]) && !empty(isset($_POST["txtCorreo"]))) {echo $userTelefonoDeEmergencia;}else{ echo 'no se encontro';}  ?>">

        <label for="correo">correo electronico</label>
        <input type="text" id="correo" class="form-control" disabled placeholder="<?php if (isset($_POST["txtCorreo"]) && !empty(isset($_POST["txtCorreo"]))) {echo $userCorreo;}else{ echo 'no se encontro';} ?>">
      </div>
    </div>


    <!-- aca comienza el modal -->
    <div class="modal fade" id="upDate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Actualiza tus datos</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="./actualizardatos.php" method="POST">

              <div class="user">
                <p>Cedula</p>
                <div id ="sino" style=" font-size: 11px;">
                  pon tu numero de identificacion
                </div>
                <input type="text" class="user-input" name="txtCedula" id="ingreseCedula" />
              </div>
              <div class="ingreseMovil">
                <p for="">Correo</p>
                <div id ="sino" style=" font-size: 11px;">
                  introduce tu correo el cual registraste
                </div>
                <input type="text" maxlength="" class="movil-input" name="txtCorreo" id="correo" />
              </div>

          </div>
          
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
              Cerrar
            </button>
            <button type="submit" class="btn btn-primary">Buscar</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <script src="../js/actualizar.js"></script>
</body>

</html>