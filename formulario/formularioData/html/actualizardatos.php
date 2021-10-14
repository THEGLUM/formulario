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
                  <a class="navbar-brand" href="../html/home.html">Almacontact</a>
                  <a href="../html/home.html">
                    <img src="../img/logo.png" alt="" width="30px" height="30px"> 
                  </a>
                </div>
              </nav>
    </div>
    </header>
    <section class="contenedor">
            <div class="formulario" >
            <form action="../../">
                 <div id="titulo">
                     <p> Actualiza tus datos</p>
                 </div>  
            
                 <label for="area">Area</label>
                 <select name="sedeLaboral" id="area" class="form-select form-select-sm">
                     <option value="">Selecciona el area</option>
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
                    
                    <label for="telefonoFijo">telefono fijo</label>
                    <input type="text" id="telefonoFijo" class="form-control">
                    
                    <label for="movil">movil</label>
                <input type="text" id="movil"class="form-control">

                <label for="telefonoEmergencia">telefono en caso de emergencia</label>
                <input type="text" id="telefonoEmergencia" class="form-control">

                <label for="correo">correo electronico</label>
                <input type="text" id="correo" class="form-control">
                  <button type="submit" class="btn btn-primary" value="enviar">actualizar</button>  
                  <button type="button" class="btn btn-outline-dark ms-">cancelar</button>  
            </form>
        </div>

            <div class="img">
                <img src="../img/update.svg" alt="" srcset="" width="200px" height="200px">
            </div>
          </section>
      <script src="../js/actualizar.js"></script>
</body>
</html>