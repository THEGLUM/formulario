<?php

$conn = require_once('conexion.php');

class Actualizar()
{
    public static function actualizarDatos()
    {
        $AutorizaTratamiento = trim($_POST["autorizacion"]);
        $Fk_TipoDocumento = trim($_POST["tipoDedocumento"]);
        $Pk_NumeroDocumento = trim($_POST["numeroDeDocumento"])
        $PrimerApellido =  trim($_POST["PrimerApellido"]);
        $SegundoApellido = trim($_POST["segundoApellido"]);
        $PrimerNombre = trim($_POST["primeroNombre"]);
        $SegundoNombre =  trim($_POST["segundoNombre"]);
        $Fk_Sede =  trim($_POST["sedeLaboral"]);
        $Fk_Area = trim($_POST["area"]);
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
        $Fk_Genero = trim($_POST["genero"]);
        $Fk_idioma =  trim($_POST["idiomas"]);
        $Guion = "-";
        $NumeroVia = $NumeroViaDos." ".$numeroViaFinal;

    $query = $conn->prepare('UPDATE Personal_almacontact(Fk_TipoVia, NumeroVia, Guion, Interior, MunicipioResidencia, Barrios, Telefonofijo, Movil, TelefonoEmergencia, CorreoElectronico, Fk_Idioma) VALUES (?,?,?,?,?,?,?,?,?,?,?)');

    $query->bindParam(1, $Fk_TipoVia, PDO::PARAM_STR);
    $query->bindParam(1, $NumeroVia, PDO::PARAM_INT);
    $query->bindParam(1, $Guion, PDO::PARAM_STR);
    $query->bindParam(1, $Interior, PDO::PARAM_STR);
    $query->bindParam(1, $Municipio, PDO::PARAM_STR);
    $query->bindParam(1, $Barrios, PDO::PARAM_STR);
    $query->bindParam(1, $Telefonofijo, PDO::PARAM_INT);
    $query->bindParam(1, $Movil, PDO::PARAM_INT);
    $query->bindParam(1, $TelefonoEmergencia, PDO::PARAM_INT);
    $query->bindParam(1, $CorreoElectronico, PDO::PARAM_STR);
    $query->bindParam(1, $Fk_idioma, PDO::PARAM_STR);

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

    }
}