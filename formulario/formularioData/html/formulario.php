


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="icon" href="../img/logo.png">
        <!-- conexion con los estilos de boostrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <!-- conexion con los estilos de boostrap y los Javascripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script> 

<link rel="stylesheet" href="../css/formulario.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="../js/multi.js"></script>


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
                        <img src="../img/logo.png" alt="" width="30px" height="30px">
                      </a>
                    </div>
                  </nav>
                </div>
    </header>

    <section class="formulario-container">

              <form action="../../registro.php" method="POST" >
              <div class="titulo">Sistema de creación de usuario</div>
              <img src="../img/formulario.svg" alt="imagen de formulario" height="300px" width="600px">
              <!--
                -----------------
                TIPO DE DOCUMENTO
                -----------------
              -->
              <p>Los campos que tengan asterisco (*) son obligatorios</p>
                <div class="caja">
                  <label for="tipoDeDocumento">Tipo de Documento*</label>
                <select class="form-select form-select-sm" required="true" aria-label=".form-select-sm example" id="tipoDeDocumento" name="tipoDedocumento">
                  <option selected value="">Tipo de documento</option>
                  <?php
                        $select = include_once("../../conexion.php");
                        $select = $conn->prepare("SELECT * FROM TipoDocumento");
                        $select->execute();
                        $data = $select->fetchAll();
                        foreach ($data as $valores):
                        echo '<option value="'.$valores["Id_tipo_documento"].'">'.$valores["Nombre_tipo_documento"].'</option>';
                        endforeach;
                        ?>
                </select>
              </div>
                </div>
              <!--
                -----------------
                NUMERO DE DOCUMENTO
                -----------------
              -->
              <div class="caja">
                <label for="numeroDeDocumento">Numero de Documento*</label>
                <div  id="input" class="input-group input-group-sm mb-3">
                  <input type="text" class="form-control" required="true" maxlength="50" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="numeroDeDocumento" name="numeroDeDocumento">
                </div>
              </div>

              <script>

              </script>

              <!--
                -----------------
                PRIMER APELLIDO
                -----------------
              -->
              <div class="caja">
                <label for="PrimerApellido">Primer Apellido*</label>
                <div class="input-group input-group-sm mb-3">
                  <input name="PrimerApellido" type="text" pattern="[a-zA-Z]+" class="form-control" required="true" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="PrimerApellido">
                </div>
              </div>

              <!--
                -----------------
                SEGUNDO APELLIDO
                -----------------
              -->
              <div class="caja">
                <label for="segundoApellido">Segundo Apellido*</label>
                <div class="input-group input-group-sm mb-3">
                  <input  name="segundoApellido" type="text" class="form-control" required="true" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="segundoApellido">
                </div>
              </div>

              <!--
                -----------------
                PRIMER NOMBRE
                -----------------
              -->
              <div class="caja">
                <label for="primeroNombre">Primer Nombre*</label>
                <div class="input-group input-group-sm mb-3">
                  <input name="primeroNombre" type="text" class="form-control" required="true" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="primeroNombre">
                </div>
              </div>

              <!--
                -----------------
                SEGUNDO NOMBRE
                -----------------
              -->
              <div class="caja">
                <label for="segundoNombre">Segundo Nombre</label>
                <div class="input-group input-group-sm mb-3">
                  <input name="segundoNombre" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="segundoNombre">
                </div>
                <div>
                </div>
              </div>

              <!--
                -----------------
                AREA
                -----------------
              -->
              <div class="caja">
                <label for="area">Área*</label>
                <select class="form-select form-select-sm" name="area" required="true" aria-label=".form-select-sm example" id="area">
                  <option value=""> selecciona</option>
                    <?php
                        $select = include_once("../../conexion.php");
                        $select = $conn->prepare("SELECT * FROM TipoArea");
                        $select->execute();
                        $data = $select->fetchAll(); 
                        foreach ($data as $valores):
                        echo '<option value="'.$valores["Id_area"].'">'.$valores["Nombre_area"].'</option>';
                        endforeach;
                        ?>
                    </select>

                  </div>

                  <!--
                    -----------------
                    DIRECCION
                    -----------------
                  -->
                  <div class="caja">
                    <label for="direccion">Direccion*</label>
                    <select class="form-select form-select-sm" name="direccion"  aria-label=".form-select-sm example" id="direccion" required="true">
                      <option value="">tipo de avenida</option>
                      <?php
                        $select = include_once("../../conexion.php");
                        $select = $conn->prepare("SELECT * FROM TipoVia");
                        $select->execute();
                        $data = $select->fetchAll();
                        foreach ($data as $valores):
                        echo '<option value="'.$valores["Id_tipo_via"].'">'.$valores["Nombre_tipo_via"].'</option>';
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


                  </div>
                    <!--
                    -----------------
                    SEDE LABORAL
                    -----------------
                  -->
                  <div class="caja">
                    <label for="sedeLaboral">Sede Laboral*</label>
                    <select class="form-select form-select-sm" name="sedeLaboral" required="true" aria-label=".form-select-sm example" id="sedeLaboral">
                      <option selected value="">selecciona</option>
                      <?php
                        $select = include_once("../../conexion.php");
                        $select = $conn->prepare("SELECT * FROM Sede");
                        $select->execute();
                        $data = $select->fetchAll();
                        foreach ($data as $valores):
                        echo '<option value="'.$valores["Id_sede"].'">'.$valores["Nombre_sede"].'</option>';
                        $sede = $valores;
                        endforeach;
                        ?>
                    </select>
                  </div>

                <!--  -----------------
                  MUNCIPIO DE RECIDENCIA
                  -----------------
                -->
                <div class="caja">
                  <label for="municipioDeRecidencia">Municipio de Recidencia*</label>
                  <select class="form-select form-select-sm" name="municipioRecidencia" required="true" aria-label=".form-select-sm example" id="municipioDeRecidencia">
                    <option selected value="">selecciona </option>
                  </select>
                </div>


                <div class="caja">
                  <label for="barrio">Barrio*</label>
                  <select class="form-select form-select-sm" name="barrio" required="true" aria-label=".form-select-sm example" id="Barrio">
                    <option selected value="">selecciona </option>
                  </select>
                </div>


                  <div class="caja">
                    <label for="telefono"> Telefono fijo</label>
                    <div class="input-group input-group-sm mb-3">
                      <input type="text" class="form-control" maxlength="10" name="telefono" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="telefono">
                    </div>
                  </div>

                  <div class="caja">
                    <label for="Movil">Movil*</label>
                    <div class="input-group input-group-sm mb-3">
                      <input type="text" name="movil" maxlength="10" required="true" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="Movil">
                    </div>
                    <div>
                    </div>
                  </div>


                  <div class="caja">
                    <label for="telefonoEmergencia">Telefono en caso de emergencia*</label>
                    <div class="input-group input-group-sm mb-3">
                      <input type="text" name="telefonoEmergencia" maxlength="10" required="true" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="telefonoEmergencia">
                    </div>
                  </div>


                  <div class="caja">
                    <label for="correoElectronico">Correo electronico*</label>
                    <div class="input-group input-group-sm mb-3">
                      <input type="email" name="correo" required="true" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="correoElectronico">
                    </div>
                  </div>


                  <div class="caja">
                    <label for="fechaNacimiento">Fecha nacimiento*</label>
                    <div class="input-group input-group-sm mb-3">
                      <input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required="true" id="fechaNacimiento" name="fechaNacimiento">
                    </div>
                  </div>
                  <div class="caja">
                    <label for="genero">Genero</label>
                    <select class="form-select form-select-sm" name="genero" aria-label=".form-select-sm example" id="genero">
                      <option selected>selecciona tu genero</option>
                      <?php
                        $select = include_once("../../conexion.php");
                        $select = $conn->prepare("SELECT * FROM Genero");
                        $select->execute();
                        $data = $select->fetchAll();
                        foreach ($data as $valores):
                        echo '<option value="'.$valores["Id_genero"].'">'.$valores["Nombre_genero"].'</option>';
                        endforeach;
                        ?>
                    </select>
                  </div>

                    <div class="caja">
                      <label for="idiomas">Idiomas*</label>
                      <select  id="multipleSelect" name="idiomas" class="idiomas" multiple aria-label="multiple select" required="true">
                        <option value="0">seleciona un idioma</option>
                        <?php
                        $select = include_once("../../conexion.php");
                        $select = $conn->prepare("SELECT * FROM Idioma");
                        $select->execute();
                        $data = $select->fetchAll();
                        foreach ($data as $valores):
                      echo '<option value="'.$valores["Id_idioma"].'">'.$valores["Nombre_idiomao"].'</option>';
                        endforeach;
                        ?>
                      </select>
                    </div>

                    <div class="form-check" >
                    <input class="form-check-input" type="checkbox" value="si" id="flexCheckIndeterminate" required="true" name= "autorizacion"  >
                    <label class="form-check-label" for="flexCheckIndeterminate" >
                      <a  href="https://almacontact-my.sharepoint.com/:w:/g/personal/jbecerra_almacontactcol_co/EcIpeut13BxBg9G3AUuanUQBWP0OtvJUMzXcKByr0Ru28Q?e=oYk4VO" target="_blank" class="tratamientosDatos" > Autorizo el tratamiento de datos</a>
                    </label>
                  </div>

                  <!--
                    -----------------
                    BOTONES DEL FORMULARIO
                    -----------------
                  -->
                  <a href="../html/home.html"><button type="button" class="btn btn-primary">atras</button></a>
                  <button type="submit" class="btn btn-primary">crear</button>
                </form>
                <script src="../js/formulario.js"></script>
  </body>

</html>