<?php
$conn = require_once('conexion.php');
//inner join triple
//query = SELECT campos FROM Personal_almacontact INNER JOIN MunicipioResidencia ON tabla1.campo = tabla2.campo INNER JOIN tabla3 ON tabla2.campo = tabla3.campo where condicion;
try {

    $idUser = $_POST['idUser'];
    $Fk_Sede =  trim($_POST["sedeLaboral"]);
    $Fk_Area = trim($_POST["Area"]);
    $Fk_TipoVia = trim($_POST["direccion"]);
    $numeroViaFinal = trim($_POST["numeroViaUno"]);
    $NumeroViaDos = trim($_POST["numeroViaDos"]);
    $Interior = trim($_POST["interior"]);
    $Municipio = trim($_POST["municipioRecidencia"]);
    $Barrios = trim($_POST["barrio"]);
    $Telefonofijo = trim($_POST["telefono"]);
    $Movil = trim($_POST["movil"]);
    $TelefonoEmergencia = trim($_POST["telefonoEmergencia"]);
    $CorreoElectronico = trim($_POST["correo"]);
    $FechaNacimiento = trim($_POST["fechaNacimiento"]);
    $Fk_idioma =  trim($_POST["idiomas"]);
    $Guion = "-";
    $NumeroVia = $NumeroViaDos . " " . $numeroViaFinal;



    echo $idUser;
    echo '<br>';
    echo $Fk_Sede;
    echo '<br>';
    echo $Fk_Area;
    echo '<br>';
    echo $Fk_TipoVia;
    echo '<br>';
    echo $NumeroVia;
    echo '<br>';
    echo $Interior;
    echo '<br>';
    echo $Municipio;
    echo '<br>';
    echo $Barrios;
    echo '<br>';
    echo $Telefonofijo;
    echo '<br>';
    echo $Movil;
    echo '<br>';
    echo $TelefonoEmergencia;
    echo '<br>';
    echo $CorreoElectronico;
    echo '<br>';
    echo $FechaNacimiento;
    echo '<br>';
    echo $Fk_idioma;



    //hacer una consulta para actualizar los datos
    $query = $conn->prepare();


    $query->bindParam(1, $Fk_TipoVia, PDO::PARAM_STR);
    $query->bindParam(2, $NumeroVia, PDO::PARAM_INT);
    $query->bindParam(3, $Guion, PDO::PARAM_STR);
    $query->bindParam(4, $Interior, PDO::PARAM_STR);
    $query->bindParam(5, $Municipio, PDO::PARAM_STR);
    $query->bindParam(6, $Barrios, PDO::PARAM_STR);
    $query->bindParam(7, $Telefonofijo, PDO::PARAM_INT);
    $query->bindParam(8, $Movil, PDO::PARAM_INT);
    $query->bindParam(9, $TelefonoEmergencia, PDO::PARAM_INT);
    $query->bindParam(10, $CorreoElectronico, PDO::PARAM_STR);
    $query->bindParam(11, $Fk_idioma, PDO::PARAM_STR);

    $query->execute();

    echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        </head>
        <body>
        <div class="alert alert-success" role="alert">
                Los datos se actualizaron corrextamente.
        </div>
        </body>
        </html>';
} catch (Exception $e) {
    echo $e;
}
